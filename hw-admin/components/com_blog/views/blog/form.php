<form method="post" action="<?= $action; ?>" enctype="multipart/form-data" class="validateForm" id="blogForm">

    <div class="row">
        <div class="col-md-12 msgbox"></div>

        <div class="col-md-6 form-group ">
            <label>SEO Titre</label>
            <input type="text" class="form-control" name="seo_titre" value="<?php if (isset($blog)) echo stripslashes($blog->getSeoTitre()); ?>">
        </div>


        <div class="form-group col-md-6">
            <label>SEO Description</label>
            <input type="text" class="form-control" name="seo_description" value="<?php if (isset($blog)) echo stripslashes($blog->getSeoDescription()); ?>">
        </div>


        <div class="form-group col-md-3">
            <label>Catégorie</label>
            <select name="id_categorie" class="form-control chosen-select">
                <option value="0">Aucun(e)</option>
                <?php foreach ($categories as $categorie) : ?>
                    <option value="<?php echo $categorie->getId(); ?>" <?php if (isset($blog) && $blog->getCategorie() == $categorie->getId()) echo "selected"; ?>><?= $categorie->getTitre() ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-3 form-group">
            <label>Titre</label>
            <input name="titre" type="text" value="<?= isset($blog) ? $blog->getTitre() : ""; ?>" class="form-control" />
        </div>

        <div class="col-md-3 form-group">
            <label>Sous Titre</label>
            <input name="sous_titre" type="text" value="<?= isset($blog) ? $blog->getSousTitre() : ""; ?>" class="form-control" />
        </div>

        <!-- Toggle Switch -->
        <div class="col-md-1 form-group">
            <label class="mb-3">Active</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="active" class="toggle-switch-input" <?php if (isset($blog) && $blog->isActive()) echo "checked"; ?>>
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

        <?php if (isset($blog) && $blog->getPhoto()) { ?>
            <div class="col-md-3 form-group mt-4">
                <img src="../images/blog/<?= $blog->getPhoto(); ?>" class="img-thumbnail" />
            </div>
        <?php } ?>

        <div class="col-md-3 form-group">
            <label>Photo bannière</label>
            <input type="file" name="photo_banniere[]" class="form-control" />
        </div>

        <?php if (isset($blog) && $blog->getPhotoBanniere()) { ?>
            <div class="col-md-3 form-group mt-4">
                <img src="../images/blog/<?= $blog->getPhotoBanniere(); ?>" class="img-thumbnail" />
            </div>
        <?php } ?>



        <div class="col-md-12 form-group" style="float:left;">
            <label>Extrait
            </label>
            <textarea name="extrait" id="extrait"><?php if (isset($blog)) echo $blog->getExtrait(); ?></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('extrait', {
                    allowedContent: true,
                    //allowedContent: 'p b i ul li tr th h2 h1 h3 h4 h5 h6 a; a[!href]; table[border,cellpadding,cellspacing]; td{height,width}; div(conditions,contentConditions,contentConditions2)',
                    filebrowserBrowseUrl: '../ckeditor/plugins/ckfinder/ckfinder.html'
                });
            </script>
        </div>

        <div class="col-md-12 form-group" style="float:left;">
            <label>Texte
            </label>
            <textarea name="texte" id="texte"><?php if (isset($blog)) echo $blog->getTexte(); ?></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('texte', {
                    allowedContent: true,
                    //allowedContent: 'p b i ul li tr th h2 h1 h3 h4 h5 h6 a; a[!href]; table[border,cellpadding,cellspacing]; td{height,width}; div(conditions,contentConditions,contentConditions2)',
                    filebrowserBrowseUrl: '../ckeditor/plugins/ckfinder/ckfinder.html'
                });
            </script>
        </div>


        <?php if (isset($blog)) { ?>
            <input type="hidden" name="id" value="<?= $blog->getId(); ?>" />
        <?php } ?>

    </div>



    <div class="text-right mt-4">
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>

</form>

<script>
    $(function() {

        // envoi du formulaire en ajax
        $('form#blogForm').ajaxForm({
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
                    $('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès</strong> ' + msgsucces + '</div>').slideDown();
                    setTimeout(function() {

                        <?php
                        $loc = "index.php?option=com_blog";
                        if ($task == 'edit')
                            $loc = '';

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