<form method="post" action="<?php echo $action; ?>" id="menuItemForm" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 msgbox"></div>
        <div class="col-md-3 form-group ">
            <label>Élément parent</label>
            <select name="parent_id" class="form-control chosen-select">
                <option value="0">- Sélectionner élément -</option>
                <?php
                isset($i) ? $claus = $i->getId() : $claus = null;
                $mis = menu_item::findAll($menu->getId(), $_SESSION['langue'], 0, $claus, true);
                foreach ($mis as $mi) {
                ?>
                    <option value="<?= $mi->getId() ?>" <?php if (isset($i) && $i->getItemParent() == $mi->getId()) echo "selected"; ?>><?= $mi->getTitre() ?></option>
                    <?php
                    $mits = menu_item::findAll($menu->getId(), $_SESSION['langue'], $mi->getId(), $claus, true);
                    foreach ($mits as $mit) {
                    ?>
                        <option value="<?= $mit->getId() ?>" <?php if (isset($i) && $i->getItemParent() == $mit->getId()) echo "selected"; ?>><?php echo '___' . $mit->getTitre() ?></option>
                <?php
                    }
                }
                ?>
            </select>
        </div>

        <div class="col-md-2 form-group">
            <label>Type</label>
            <select name="type" class="form-control chosen-select">
                <?php
                $modules = module::findAllUrl();
                foreach ($modules as $module) {
                ?>
                    <option value="<?= $module->getClasse(); ?>" <?php if (isset($i) && $i->getType() == $module->getClasse() . '') echo "selected"; ?>><?php echo ucfirst($module->getClasse()); ?></option>
                <?php
                }
                ?>
                <option value="ext" <?php if (isset($i) && $i->getType() == 'ext') echo "selected"; ?>>
                    Lien externe
                </option>
            </select>
        </div>
        <div class="col-md-4 form-group">
            <label>Titre</label>
            <input name="titre" type="text" value="<?php if (isset($i)) echo $i->getTitre() ?>" required class="form-control" />
        </div>
        <div class="col-md-1 form-group">
            <label>Ordre</label>
            <input name="ordre" type="number" value="<?php if (isset($i)) echo $i->getOrdre() ?>" class="form-control" />
        </div>

        <!-- Toggle Switch -->
        <div class="col-md-2 form-group">
            <label class="mb-3">Nouvelle feunêtre</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="blank" class="toggle-switch-input" <?php if (isset($i) && $i->isBlank()) echo "checked"; ?>>
                    <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                    </span>
                </span>
            </label>
        </div>

        <!-- /Toggle Switch -->
        <?php
        $modules = module::findAllUrl();
        foreach ($modules as $module) {
        //if($module->getClasse() != 'blog'){    
        ?>

            <div class="col-md-3 form-group">
                <label><?php echo ucfirst($module->getClasse()); ?></label>
                <select name="id_item_<?= $module->getClasse(); ?>" class="form-control chosen-select">

                    <option value="0">- Sélectionner <?= $module->getClasse(); ?> -</option>
                    <?php
                    $SQLselect = "SELECT * FROM " . __prefixe_db__ . $module->getNomTable() . " WHERE 1 = 1";
                    $result = $db->queryS($SQLselect);
                    foreach ($result as $data) {
                        $class = $module->getClasse();
                        $obj = $class::find($data['id'], $_SESSION["langue"]);
                        $sl = (isset($i) && $i->getType() == $module->getClasse() . '' && $i->getIdItem() == $obj->getId()) ? "selected" : "";
                    ?>
                        <option value="<?php echo $obj->getId() ?>" <?php echo $sl; ?>><?php echo $obj->getTitre(); ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        <?php
        //}
        }
        ?>

        <div class="col-md-3 form-group">
            <label>Lien externe</label>
            <input name="lien" type="text" value="<?php if (isset($i)) echo $i->getLien() ?>" class="form-control" />
        </div>


        <input type="hidden" name="id_menu" value="<?= $menu->getId() ?>" />
        <?php if (isset($i)) : ?>
            <input type="hidden" name="id" value="<?php echo $i->getId(); ?>">
        <?php endif; ?>
    </div>

    <div class="text-right mt-4">
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>
</form>
<script type="text/javascript">
    $(function() {

        // envoi du formulaire en ajax
        $('form#menuItemForm').ajaxForm({
            beforeSubmit: function() {
                $("#menuItemForm .loading").css('display', 'inline-block');
            },
            success: function(theResponse) {
                $("#menuItemForm .loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");

                var msgsucces = "Élément ajouté avec succès";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Élément modifié avec succès";
                }
                if (parseInt(theResponse) === 1) {
                    $('#menuItemForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');

                    setTimeout(function() {
                        document.location = "index.php?option=com_menu&task=items&id=<?php echo $menu->getId() ?>";
                    }, 1500)

                } else if (parseInt(theResponse) === 0) {
                    $('#menuItemForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez remplir les champs obligatoires<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                } else {
                    $('#menuItemForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                }
            }
        });
    })
</script>