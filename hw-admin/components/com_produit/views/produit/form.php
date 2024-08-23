<form method="post" action="<?= $action; ?>" enctype="multipart/form-data" class="validateForm" id="produitForm">

    <div class="row">
        <div class="col-md-12 msgbox"></div>
		
		<div class="col-md-3 form-group">
			<label>Catégorie</label>
			<select name="id_categorie" class="form-control chosen-select">
				<option value="0"></option>
				<?php
				$categories = categorie::findAll($_SESSION['langue'],true);
				foreach ($categories as $categorie) {
				$sl = isset($produit) && $produit->getCategorie()->getId() == $categorie->getId() ? "selected" : "";	
				?>
					<option value="<?php echo $categorie->getId(); ?>" <?php echo $sl; ?>><?= $categorie->getTitre() ?></option>
				<?php
				}
				?>
			</select>
		</div>
		
        <div class="col-md-3 form-group">
            <label>Titre</label>
            <input name="titre" type="text" value="<?= isset($produit) ? $produit->getTitre() : ""; ?>" class="form-control" />
        </div>
		
		<div class="col-md-3 form-group">
            <label>Prix</label>
            <input name="prix" type="text" value="<?= isset($produit) ? $produit->getPrix() : ""; ?>" class="form-control" />
        </div>
		
		<div class="col-md-12 form-group" style="float:left;">
			<label>Description</label>
			<textarea name="description" id="description"><?php if (isset($page)) echo $page->getDescription(); ?></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('description', {
					allowedContent: true,
					//allowedContent: 'p b i ul li tr th h2 h1 h3 h4 h5 h6 a; a[!href]; table[border,cellpadding,cellspacing]; td{height,width}; div(conditions,contentConditions,contentConditions2)',
					filebrowserBrowseUrl: '../ckeditor/plugins/ckfinder/ckfinder.html'
				});
			</script>
		</div>
	
        <!-- Toggle Switch -->
        <div class="col-md-1 form-group">
            <label class="mb-3">Active</label>
            <label class="row toggle-switch">

                <span class="col-4 col-sm-1">
                    <input type="checkbox" name="active" class="toggle-switch-input" <?php if (isset($produit) && $produit->isActive()) echo "checked"; ?>>
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

        <?php
        if (isset($produit) && $produit->getPhoto() != '') {
        ?>

            <div class="col-md-2 form-group mt-4 ">
                <img src="../images/produit/<?php echo $produit->getPhoto(); ?>" alt="" class="img-thumbnail" />
            </div>
        <?php
        }
        ?>



    </div>

    <?php if (isset($produit)) { ?>
        <input type="hidden" name="id" value="<?= $produit->getId(); ?>" />
    <?php } ?>

    <div class="text-right mt-4">
        <button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
    </div>

</form>

<script>
    $(function() {

        // envoi du formulaire en ajax
        $('form#produitForm').ajaxForm({
            beforeSubmit: function() {
                $(".loading").fadeIn();
            },
            success: function(theResponse) {
                $(".loading").fadeOut();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                var msgvide = "Veuillez remplir Les champs obligatoires !";
                var msgsucces = "Produit ajouté avec succès.";
                var msgfaild = "Erreur lors de l'ajout.";
                if ($(".submit").attr("name") === "edit") {
                    msgsucces = "Produit modifié avec succès.";
                    msgfaild = "Erreur lors de la modification.";
                }
                if (parseInt(theResponse) === 1) {
                    $('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès</strong> ' + msgsucces + '</div>').slideDown();
                    setTimeout(function() {

                        <?php
                        $loc = "index.php?option=com_produit";
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