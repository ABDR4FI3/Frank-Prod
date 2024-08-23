<form method="post" action="<?= $action; ?>" enctype="multipart/form-data" class="validateForm" id="categorieForm">

    <div class="row">

        <div class="col-md-3 form-group">
            <label>SEO Titre</label>
            <input name="seo_titre" type="text" value="<?= isset($categorie) ? $categorie->getSeoTitre() : ""; ?>" class="form-control" />
        </div>

        <div class="col-md-9 form-group">
            <label>SEO Description</label>
            <input name="seo_description" type="text" value="<?= isset($categorie) ? $categorie->getSeoDescription() : ""; ?>" class="form-control">
        </div>

        <div class="col-md-3 form-group">
            <label>Titre</label>
            <input name="titre" type="text" value="<?= isset($categorie) ? $categorie->getTitre() : ""; ?>" class="form-control" />
        </div>

        <div class="col-md-2 form-group">
            <label>Ordre</label>
            <input name="ordre" type="number" value="<?= isset($categorie) ? $categorie->getOrdre() : ""; ?>" class="form-control" />
        </div>


        <!-- Toggle Switch -->
        <div class="col-md-1 form-group">
            <label class="mb-3">Active</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="active" class="toggle-switch-input" <?php if (isset($categorie) && $categorie->isActive()) echo "checked"; ?>>
                    <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                    </span>
                </span>
            </label>
        </div>

        <div class="col-md-3 form-group">
            <label>Photo</label>
            <input type="file" name="photo[]" class="form-control" />
        </div>

        <?php if (isset($categorie) && $categorie->getPhoto()) { ?>
            <div class="col-md-3 form-group mt-4">
                <img src="images/categories/<?= $categorie->getPhoto(); ?>" height="60" />
            </div>
        <?php } ?>

        <?php if (isset($categorie)) { ?>
            <input type="hidden" name="id" value="<?= $categorie->getId(); ?>" />
        <?php } ?>

    </div>

    <div class="text-right mt-4">
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>

</form>

<script>
    $(function() {

        // envoi du formulaire en ajax
        $('form#categorieForm').ajaxForm({
            beforeSubmit: function() {
                $(".loading").fadeIn();
            },
            success: function(theResponse) {
                $(".loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                var msgvide = "Veuillez remplir Les champs obligatoires !";
                var msgsucces = "Article ajouté avec succès.";
                var msgfaild = "Erreur lors de l'ajout.";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Article modifié avec succès.";
                    msgfaild = "Erreur lors de la modification.";
                }
                if (parseInt(theResponse) === 1) {
                    $('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> ' + msgsucces + '</div>').slideDown();
                    setTimeout(function() {
                        document.location = "index.php?option=com_blog&task=categorie";
                    }, 1000)
                } else if (parseInt(theResponse) === 0) {
                    $('.msgbox').html('<div class="alert alert-warning alert-dismissable"><i class="icon-remove-sign"></i> ' + msgvide + '</div>').slideDown();
                } else {
                    $('.msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> ' + msgfaild + '</div>').slideDown();
                }
            }
        });
    })
</script>