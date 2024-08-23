<form method="post" action="<?php echo $action; ?>" id="pageForm" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12 msgbox"></div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Titre SEO</label>
				<input type="text" class="form-control" name="seo_titre" value="<?php if (isset($page)) echo stripslashes($page->getSeoTitre()); ?>">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Description SEO</label>
				<input type="text" class="form-control" name="seo_description" value="<?php if (isset($page)) echo stripslashes($page->getSeoDescription()); ?>">
			</div>
		</div>

	</div>
	<div class="row">

		<div class="col-md-3">
			<div class="form-group">
				<label>Titre</label>
				<input type="text" class="form-control" name="titre" value="<?php if (isset($page)) echo $page->getTitre(); ?>">
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label>URL</label>
				<input type="text" class="form-control" name="url" value="<?php if (isset($page)) echo $page->getUrl(); ?>">
			</div>
		</div>

		<div class="col-md-3 form-group ">
			<label>Type</label>
			<select name="type" class="form-control chosen-select">
				<option value="page" <?php if (isset($page) && $page->getType() == 'page') echo "selected"; ?>>
					Page contenu
				</option>
				<option value="lien" <?php if (isset($page) && $page->getType() == 'lien') echo "selected"; ?>>
					Lien externe
				</option>
			</select>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label>Lien externe</label>
				<input type="text" class="form-control" name="externe" value="<?php if (isset($page)) echo $page->getExterne(); ?>">
			</div>
		</div>


		<div class="col-md-3 form-group">
			<label>Galerie</label>
			<select name="id_galerie" class="form-control chosen-select">
				<option value="0"></option>
				<?php
				$galeries = galerie::findAll();
				foreach ($galeries as $galerie) {
				?>
					<option value="<?php echo $galerie->getId(); ?>" <?php if (isset($_GET['id']) && $_GET['id'] == $galerie->getId()) echo "selected"; ?>><?= $galerie->getTitre() ?></option>
				<?php
				}
				?>
			</select>
		</div>

		<div class="col-md-3 form-group">
			<label>Photo</label>
			<div class="iconed-input"><input type="file" name="photo[]" class="" /></div>
		</div>
		<?php
		if (isset($page) && $page->getPhoto() != '') {
		?>
			<div class="col-md-2 form-group mt-4">
				<img src="../images/pages/<?php echo $page->getPhoto(); ?>" alt="" class="img-thumbnail" />
			</div>
		<?php
		}
		?>

		<div style="float:right;" class="col-md-6 form-group">
			<label>Extrait</label>
			<textarea class="form-control" id="extrait" name="extrait"><?php if (isset($page)) echo $page->getExtrait(); ?></textarea>
		</div>

		<div class="col-md-12 form-group" style="float:left;">
			<label>Texte</label>
			<textarea name="texte" id="texte"><?php if (isset($page)) echo $page->getTexte(); ?></textarea>
			<script type="text/javascript">
				CKEDITOR.replace('texte', {
					allowedContent: true,
					//allowedContent: 'p b i ul li tr th h2 h1 h3 h4 h5 h6 a; a[!href]; table[border,cellpadding,cellspacing]; td{height,width}; div(conditions,contentConditions,contentConditions2)',
					filebrowserBrowseUrl: '../ckeditor/plugins/ckfinder/ckfinder.html'
				});
			</script>
		</div>
		<!-- Toggle Switch -->
		<div class="col-md-12">
			<label class="row form-group toggle-switch">
				<span class="col-8 col-sm-3 toggle-switch-content ml-0">
					<span class="d-block text-dark">Page active</span>
				</span>
				<span class="col-4 col-sm-1">
					<input type="checkbox" name="active" class="toggle-switch-input" <?php if (isset($page) && $page->isActive()) echo "checked"; ?>>
					<span class="toggle-switch-label ml-auto">
						<span class="toggle-switch-indicator"></span>
					</span>
				</span>
			</label>
		</div>
		<!-- /Toggle Switch -->

		<?php if (isset($page)) : ?>
			<input type="hidden" name="id" value="<?php echo $page->getId(); ?>">
		<?php endif; ?>
	</div>
	<div class="text-right mt-4">
		<button type="submit" name="<?= $submitName; ?>" class="btn btn-primary submit"><span class="spinner-border spinner-border-sm mr-2 loading"></span> <?php echo $submitValue; ?></button>
	</div>
</form>

<script>
	$(function() {

		// envoi du formulaire en ajax
		$('form#pageForm').ajaxForm({
			beforeSubmit: function() {
				$("#pageForm .loading").css('display', 'inline-block');
			},
			success: function(theResponse) {
				$("#pageForm .loading").fadeOut();
				$("html, body").animate({
					scrollTop: 0
				}, "slow");

				var msgsucces = "Page ajouté avec succès";
				if ($(".submit").attr("name") === "edit") {
					msgsucces = "Page modifié avec succès";
				}
				if (parseInt(theResponse) === 1) {
					$('#pageForm .msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');

					setTimeout(function() {
						document.location = "index.php?option=com_page";
					}, 1500)

				} else if (parseInt(theResponse) === 0) {
					$('#pageForm .msgbox').html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Attention!</strong> Veuillez remplir les champs obligatoires<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
				} else {
					$('#pageForm .msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de l\'execution de l\'opération<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
				}
			}
		});
	})
</script>