<form method="post" action="<?= $action; ?>" enctype="multipart/form-data" class="validateForm" id="galerieForm">

    <div class="row">
        <div class="col-md-12 msgbox"></div>
        <div class="col-md-3 form-group">
            <label>Titre</label>
            <input name="titre" type="text" value="<?= isset($galerie) ? $galerie->getTitre() : ""; ?>" class="form-control" />
        </div>

        <!-- Toggle Switch -->
        <div class="col-md-1 form-group">
            <label class="mb-3">Active</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="active" class="toggle-switch-input" <?php if (isset($galerie) && $galerie->isActive()) echo "checked"; ?>>
                    <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                    </span>
                </span>
            </label>
        </div>

        <div class="col-md-3 form-group">
            <label>Cover</label>
            <input type="file" name="cover[]" class="form-control" />
        </div>

        <?php
        if (isset($galerie) && $galerie->getCover() != '') {
        ?>

            <div class="col-md-2 form-group mt-4 ">
                <img src="images/galerie/<?php echo $galerie->getCover(); ?>" alt="" class="img-thumbnail" />
            </div>
        <?php
        }
        ?>



    </div>

    <?php if (isset($galerie)) { ?>
        <input type="hidden" name="id" value="<?= $galerie->getId(); ?>" />
    <?php } ?>

    <div class="text-right mt-4">
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>

</form>

<script>
    $(function() {

        // envoi du formulaire en ajax
        $('form#galerieForm').ajaxForm({
            beforeSubmit: function() {
                $(".loading").fadeIn();
            },
            success: function(theResponse) {
                $(".loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                var msgvide = "Veuillez remplir Les champs obligatoires !";
                var msgsucces = "Galerie ajoutée avec succès.";
                var msgfaild = "Erreur lors de l'ajout.";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Galerie modifiée avec succès.";
                    msgfaild = "Erreur lors de la modification.";
                }
                if (parseInt(theResponse) === 1) {
                    $('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès</strong> ' + msgsucces + '</div>').slideDown();
                    setTimeout(function() {

                        <?php
                        $loc = "index.php?option=com_galerie";
                        ?>
                        document.location = "<?= $loc ?>";

                    }, 3000);
                } else if (parseInt(theResponse) === 0) {
                    $('.msgbox').html('<div class="alert alert-warning alert-dismissable"><i class="icon-remove-sign"></i> <strong>Attention!</strong> ' + msgvide + '</div>').slideDown();
                } else {
                    $('.msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> <strong>Erreur!</strong> ' + msgfaild + '</div>').slideDown();
                }
            }
        });
    })
</script>