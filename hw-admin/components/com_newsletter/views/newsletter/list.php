<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Gestion des emails</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Emails</li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a href="components/com_newsletter/controleurs/router.php?task=downloadNewsletter" class="btn btn-success mr-1 " data-toggle="tooltip" data-placement="top" data-original-title="Télécharger newsletter">
                        <i class="fas fa-download"></i>
                    </a>
                    <a class="btn btn-primary filter-btn upload" data-toggle="tooltip" data-placement="top" data-original-title="Uploader newsletter" href="#">
                        <i class="fas fa-upload"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table">
                    <div class="card-header">
                        <h4 class="card-title">Liste des emails</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12 mt-3 msgbox"></div>
                        <div class="table-responsive">
                            <!-- Upload form -->
                            <form method="post" id="uploadForm" action="components/com_newsletter/controleurs/router.php?task=uploadNewsletter" enctype="multipart/form-data">
                                <input type="file" name="fichier" id="input" style="display: none" />
                            </form>
                            <!-- End of upload form -->
                            <table class="table table-stripped table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Date de réception</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($newsletters as $newsletter) : ?>
                                        <tr>
                                            <td><?php echo $newsletter->getId(); ?></td>
                                            <td><?php echo $newsletter->getNom(); ?></td>
                                            <td><?php echo $newsletter->getEmail(); ?></td>
                                            <td><?php echo normalDate($newsletter->getDateAdd()); ?></td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 delete" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" data-id="<?= $newsletter->getId(); ?>"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->
<script type="text/javascript">
    $(function() {

        var msgsucces = "Newsletter supprimé avec succès";

        $(document).on("click", ".delete", function() {
            var $btn = $(this);
            if (confirm("Etes-vous sure !")) {
                var id = $(this).attr("data-id");
                var order = 'id=' + id;
                $.post("components/com_newsletter/controleurs/router.php?task=deleteNewsletter", order, function(theResponse) {
                    if (parseInt(theResponse) == 1) {

                        $btn.parent().parent().addClass("table-danger");
                        setTimeout(function() {
                            $btn.parent().parent().remove()
                        }, 1000);

                        $('.msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                    } else {
                        $('.msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de la suppression<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                    }
                });
            }
        })

        $(".upload").on('click', function(event) {
            event.preventDefault();
            $("#input:hidden").trigger('click');
        });

        $('#input').change(function() {
            extensions = ["xlsx"];
            var ext = $('#input')[0].files[0].name;
            ext = ext.split('.')[1];
            if ($.inArray(ext, extensions) != -1) {
                $('form#uploadForm').submit();
                $('form#uploadForm').ajaxForm({
                    beforeSubmit: function() {
                        $(".loading").fadeIn();
                    },
                    success: function(theResponse) {
                        $(".loading").fadeOut();
                        if (parseInt(theResponse) == 1) {
                            $('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès</strong> Emails uploaded avec succès</div>');
                            setTimeout(function() {
                                document.location = "index.php?option=com_newsletter";
                            }, 2000)
                        } else {
                            $('.msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> <strong>Erreur!</strong> Lors de l\'upload </div>');
                            $('.msgbox').slideDown();
                        }
                    }
                });
            } else {
                alert("Extension non supportable ( " + ext + " )")
            }
        });
    });
</script>