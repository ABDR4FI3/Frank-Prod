<style>
    .connected,
    .sortable,
    .exclude,
    .handles {
        margin: 20px auto;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .sortable.grid {
        overflow: hidden;
        padding: 0;
        margin: 10px;
    }

    .connected li,
    .sortable li,
    .exclude li,
    .handles li {
        list-style: none;
        border: 1px solid #CCC;
        background: #F6F6F6;
        font-family: "Tahoma";
        color: #1C94C4;
        margin: 5px;
        padding: 5px;
    }

    .handles span {
        cursor: move;
    }

    li.disabled {
        opacity: 0.5;
    }

    .sortable.grid li {
        line-height: 80px;
        float: left;
        text-align: center;
        position: relative;
    }

    .sortable.grid li img {
        float: left;
    }

    li.highlight {
        background: #FEE25F;
    }

    #connected {
        width: 440px;
        overflow: hidden;
        margin: auto;
    }

    .connected {
        float: left;
        width: 200px;
    }

    .connected.no2 {
        float: right;
    }

    li.sortable-placeholder {
        border: 1px dashed #CCC;
        background: none;
        height: 100px;
        width: 100px;
    }
</style>
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Gestion des photos</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="index.php?option=com_produit">Produits</a></li>
                        <li class="breadcrumb-item active">Photos : <?php echo $produit->getTitre() ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $submitValue; ?></h4>
                    </div>
                    <div class="card-body">
                        <?php include("form.php"); ?>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ordre des photos</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" id="sort" action="components/com_produit/controleurs/router.php?task=orderPhoto">
                            <div class="msgbox"></div>
                            <div class="row">
                                <section>
                                    <ul class="sortable grid">
                                        <?php
                                        foreach ($produit_photos as $photo) {
                                        ?>
                                            <li id="pic_<?php echo $photo->getId(); ?>">
                                                <a href="#0" id="delete_<?php echo $photo->getId(); ?>" class="btn btn-danger btn-sm deletePhoto" style="position:absolute; top:-5px; right:-5px;"><i class="fa fa-trash"></i></a>
                                                <a href="index.php?option=com_produit&task=produitphotos<?= "&id=" . $_GET['id'] . "&id_photo=" . $photo->getId(); ?>" class="btn btn-warning text-white btn-sm" style="position:absolute; top:-5px; right:27px;"><i class="fa fa-pencil-alt"></i></a>
                                                <input type="hidden" name="ordre[]" value="<?php echo $photo->getId(); ?>" />
                                                <img src="../images/produit/<?php echo $photo->getPhoto(); ?>" width="" height="90" />
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </section>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4 text-right">
                                    <input type="submit" value="Appliquer l'ordre" class="btn btn-primary submit sort" />
                                    <span class="loading"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="js/jquery.sortable.js"></script>
<script type="text/javascript">
    $(function() {

        $('.sortable').sortable();
        $('.handles').sortable({
            handle: 'span'
        });
        $('.connected').sortable({
            connectWith: '.connected'
        });
        $('.exclude').sortable({
            items: ':not(.disabled)'
        });


        $(".deletePhoto").click(function() {
            if (confirm("Voulez vous supprimer cette photo ?")) {
                var btn = $(this);
                var t = btn.attr("id").split("_");
                var id = t[1];
                var order = "id=" + id;
                $.post("components/com_produit/controleurs/router.php?task=deleteProduitPhoto", order, function(theResponse) {
                    var success_msg = "Photo supprimée avec succès.";
                    var error_msg = "Erreur lors de la suppression.";
                    if (parseInt(theResponse) === 1) {
                        setTimeout(function() {
                            $("#pic_" + id).remove()
                        }, 300);
                    } else {
                        $(".msgbox").html("<div class='alert alert-danger alert-dismissable'><i class='fa fa-times'></i> <strong>Erreur! </strong>" + error_msg + "</div>").slideDown();
                    }
                });
            }
        });

        $('form#sort').ajaxForm({
            beforeSubmit: function() {
                $("#sort .loading").fadeIn();
            },
            success: function(theResponse) {
                $("#sort .loading").fadeOut();
                // messages
                var succes_msg = "Ordre mis à jour avec succès";
                var error_msg = "Erreur lors de la mise à jour";

                if (parseInt(theResponse) === 1) {
                    $('#sort .msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>' + '</strong> ' + succes_msg + '</div>');
                    setTimeout(function() {
                        document.location = "index.php?option=com_produit&task=produitphotos&id=<?php echo $produit->getId(); ?>";
                    }, 1500)
                } else {
                    $('#sort .msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> <strong>' + '</strong> ' + error_msg + '</div>');
                }
            }
        })

    });
</script>