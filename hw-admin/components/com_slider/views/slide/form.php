<form method="post" action="<?php echo $action; ?>" id="slideForm" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12 msgbox"></div>
        <div class="col-md-3 form-group">
            <label>Slider</label>
            <select name="slider" class="form-control chosen-select">
                <option value="0"></option>
                <?php
                $sliders = slider::findAll();
                foreach ($sliders as $ss) {
                ?>
                    <option value="<?php echo $ss->getId(); ?>" <?php if (isset($_GET['id']) && $_GET['id'] == $ss->getId()) echo "selected"; ?>><?= $ss->getTitre() ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-3 form-group">
            <label>Titre</label>
            <div class="iconed-input"><input type="text" name="titre" value="<?php if (isset($s)) echo $s->getTitre(); ?>" class="form-control" /></div>
        </div>

        <div class="col-md-2 form-group">
            <label>Ordre</label>
            <div class="iconed-input"><input type="number" name="ordre" value="<?php if (isset($s)) echo $s->getOrdre(); ?>" class="form-control" /></div>
        </div>

        <div class="col-md-3 form-group has-iconed">
            <label>URL</label>
            <div class="iconed-input"><input type="text" name="url" value="<?php if (isset($s)) echo $s->getURL(); ?>" class="form-control" /></div>
        </div>
        <!-- Toggle Switch -->
        <div class="col-md-1 form-group">
            <label class="mb-3">Actif</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="actif" class="toggle-switch-input" <?php if (isset($s) && $s->isActif()) echo "checked"; ?>>
                    <span class="toggle-switch-label ml-auto">
                        <span class="toggle-switch-indicator"></span>
                    </span>
                </span>
            </label>
        </div>


        <div class="col-md-6 form-group has-iconed">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3"><?php if (isset($s)) echo $s->getDescription(); ?></textarea>
        </div>

        <div class="col-md-2 form-group">
            <label>Photo 1500 x 568</label>
            <input type="file" name="photo[]" class="form-control" />
        </div>

        <?php
        if (isset($s) && $s->getPhoto() != '') {
        ?>

            <div class="col-md-2 form-group mt-4 ">
                <img src="../images/slides/<?php echo $s->getPhoto(); ?>" alt="" class="img-thumbnail" />
            </div>
        <?php
        }
        ?>


        <input type="hidden" name="id_slider" value="<?= $slider->getId() ?>" />
        <?php if (isset($s)) : ?>
            <input type="hidden" name="id" value="<?php echo $s->getId(); ?>">
        <?php endif; ?>
    </div>


    <div class="text-right mt-4">
        <!-- <button type="reset" name="<?= $submitName; ?>" class="btn btn-light ">Anuller</button> -->
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>
</form>
<script type="text/javascript">
    $(function() {



        // envoi du formulaire en ajax
        $('form#slideForm').ajaxForm({
            beforeSubmit: function() {
                $("#slideForm .loading").css('display', 'inline-block');
            },
            success: function(theResponse) {
                $("#slideForm .loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");

                var msgsucces = "Slide ajoutée avec succès";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Slide modifiée avec succès";
                }
                if (parseInt(theResponse) === 1) {
                    $('#slideForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');

                    setTimeout(function() {
                        document.location = "index.php?option=com_slider&task=slides&id=<?php echo $slider->getId(); ?>";
                    }, 1500)

                } else if (parseInt(theResponse) === 0) {
                    $('#slideForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez remplir les champs obligatoires<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                } else {
                    $('#slideForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
                }
            }
        });
    })
</script>