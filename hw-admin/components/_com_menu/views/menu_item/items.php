<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Gestion des éléments</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
                        <li class="breadcrumb-item active">Éléments du menu : <?php echo $menu->getTitre() ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Ajouter/modifier élément -->
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


        <!-- listes des élément -->
        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table">
                    <div class="card-header">
                        <h4 class="card-title">Éléments du menu - <?php echo $menu->getTitre(); ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12 mt-3 msgbox1"></div>
                        <div class="table-responsive">
                            <table class="table table-stripped table-center table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Ordre</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($menus_items as $menu_item) : ?>
                                        <tr>
                                            <td><?php echo $menu_item->getId(); ?></td>
                                            <td><?php echo $menu_item->getTitre(); ?></td>
                                            <td><?php echo $menu_item->getType(); ?></td>
                                            <td><?php echo $menu_item->getOrdre(); ?></td>
                                            <td class="text-right">

                                                <a href="index.php?option=com_menu&task=items&id=<?php echo $menu->getId(); ?>&id_item=<?php echo $menu_item->getId(); ?>" class="btn btn-sm btn-white text-warning mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Modifier"><i class="fa fa-pencil-alt"></i></a>

                                                <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 delete" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" data-id="<?= $menu_item->getId(); ?>"><i class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $sub_menus_items = menu_item::findAll($id, $menu_item->getId());
                                        foreach ($sub_menus_items as $sub_menu_item) : ?>
                                            <tr>
                                                <td><?php echo $sub_menu_item->getId(); ?></td>
                                                <td>___<?php echo $sub_menu_item->getTitre(); ?></td>
                                                <td><?php echo $sub_menu_item->getType(); ?></td>
                                                <td><?php echo $sub_menu_item->getOrdre(); ?></td>
                                                <td class="text-right">

                                                    <a href="index.php?option=com_menu&task=items&id=<?php echo $menu->getId(); ?>&id_item=<?php echo $sub_menu_item->getId(); ?>" class="btn btn-sm btn-white text-warning mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Modifier"><i class="fa fa-pencil-alt"></i></a>

                                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 delete" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" data-id="<?= $sub_menu_item->getId(); ?>"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $sub_sub_menus_items = menu_item::findAll($id, $sub_menu_item->getId());
                                            foreach ($sub_sub_menus_items as $sub_sub_menu_item) : ?>
                                                <tr>
                                                    <td><?php echo $sub_sub_menu_item->getId(); ?></td>
                                                    <td>___ ___<?php echo $sub_sub_menu_item->getTitre(); ?></td>
                                                    <td><?php echo $sub_sub_menu_item->getType(); ?></td>
                                                    <td><?php echo $sub_sub_menu_item->getOrdre(); ?></td>
                                                    <td class="text-right">

                                                        <a href="index.php?option=com_menu&task=items&id=<?php echo $menu->getId(); ?>&id_item=<?php echo $sub_sub_menu_item->getId(); ?>" class="btn btn-sm btn-white text-warning mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Modifier"><i class="fa fa-pencil-alt"></i></a>

                                                        <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 delete" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" data-id="<?= $sub_sub_menu_item->getId(); ?>"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
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

        var msgsucces = "Élément supprimé avec succès";

        $(document).on("click", ".delete", function() {
            var $btn = $(this);
            if (confirm("Etes-vous sure !")) {
                var id = $(this).attr("data-id");
                var order = 'id=' + id;

                $.post("components/com_menu/controleurs/router.php?task=deleteMenuItem", order, function(theResponse) {
                    if (parseInt(theResponse) == 1) {

                        $btn.parent().parent().addClass("table-danger");
                        setTimeout(function() {
                            $btn.parent().parent().remove()
                        }, 1000);

                        $('.msgbox1').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                    } else {
                        $('.msgbox1').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de la suppression<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                    }
                });
            }
        })
    });
</script>