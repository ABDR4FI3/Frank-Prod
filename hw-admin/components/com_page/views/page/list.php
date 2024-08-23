<!-- Page Wrapper -->
<div class="page-wrapper">
	<div class="content container-fluid">

		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title">Gestion des pages</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
						<li class="breadcrumb-item active">Pages</li>
					</ul>
				</div>
				<div class="col-auto">
					<a href="index.php?option=com_page&task=add" class="btn btn-success mr-1" data-toggle="tooltip" data-placement="top" data-original-title="Ajouter page">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">

				<div class="card card-table">
					<div class="card-header">
						<h4 class="card-title">Liste des Pages</h4>
					</div>
					<div class="card-body">
						<div class="col-sm-12 mt-3 msgbox"></div>
						<div class="table-responsive">
							<table class="table table-stripped table-center table-hover datatable">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>Titre</th>
										<th>Type</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pages as $page) : ?>
										<tr>
											<td><?php echo $page->getId(); ?></td>
											<td><?php echo $page->getTitre(); ?></td>
											<td><?php echo $page->getType(); ?></td>

											<td class="text-right">
												<?php $state = $page->isActive() ? 'oui' : 'non'; ?>
												<?php $title = $page->isActive() ? 'Active' : 'Inactive'; ?>
												<?php $color = $page->isActive() ? 'text-success' : 'text-danger'; ?>
												<?php $ico = $page->isActive() ? 'fa fa-toggle-on' : 'fa fa-toggle-off'; ?>
												<a href="javascript:void(0);" class="btn btn-sm btn-white <?php echo $color; ?> mr-2 enable" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $title; ?>" data-id="<?= $page->getId(); ?>" data-state="<?php echo $state; ?>"><i class="<?php echo $ico; ?>"></i></a>

												<a href="index.php?option=com_page&task=edit&id=<?= $page->getId(); ?>" class="btn btn-sm btn-white text-warning mr-2" data-toggle="tooltip" data-placement="top" data-original-title="Modifier" data-id="<?= $page->getId(); ?>"><i class="fa fa-pencil-alt"></i></a>

												<a href="javascript:void(0);" class="btn btn-sm btn-white  text-info mr-2 duplicate" data-toggle="tooltip" data-placement="top" data-original-title="Dupliquer" data-id="<?= $page->getId(); ?>"><i class="fa fa-copy"></i></a>

												<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2 delete" data-toggle="tooltip" data-placement="top" data-original-title="Supprimer" data-id="<?= $page->getId(); ?>"><i class="far fa-trash-alt"></i></a>
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
		var succes_msg = "Page dupliquée avec succès";
		var error_msg = "Erreur lors de la duplication de la page";
		$(document).on("click", ".duplicate", function() {
			var $btn = $(this);

			if (confirm("Voulez vous dupliquer cette page ?")) {
				var id = $(this).attr("data-id");
				var order = 'id=' + id;
				$.post("components/com_page/controleurs/router.php?task=duplicatePage", order, function(theResponse) {
					if (parseInt(theResponse) == 1) {

						$('.msgbox').html('<div class="alert alert-success alert-dismissable"><i class="icon-check-sign"></i> <strong>Succès!</strong> ' + succes_msg + '</div>');

						$('.msgbox').slideDown();

						setTimeout(function() {
							document.location = "index.php?option=com_page";
						}, 1500);
					} else {
						$('.msgbox').html('<div class="alert alert-danger alert-dismissable"><i class="icon-remove-sign"></i> <strong>' + error + '</strong> ' + error_msg + '</div>');
						$('.msgbox').slideDown();
					}

				});
			}
		});

		var msgsucces = "Page supprimée avec succès";
		$(document).on("click", ".delete", function() {
			var $btn = $(this);
			if (confirm("Etes-vous sure !")) {
				var id = $(this).attr("data-id");
				var order = 'id=' + id;
				$.post("components/com_page/controleurs/router.php?task=deletePage", order, function(theResponse) {
					if (parseInt(theResponse) == 1) {

						$btn.parent().parent().addClass("table-danger");
						setTimeout(function() {
							$btn.parent().parent().remove()
						}, 1000);

						$('.msgbox').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Succès!</strong> ' + msgsucces + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
					} else {
						$('.msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> Erreur lors de la suppression<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
					}
				});
			}
		})

		$(".enable").click(function() {
			var btn = $(this);
			var id = btn.attr("data-id");
			var state = btn.attr("data-state");
			var order = 'id=' + id + "&state=" + state;
			$.post("components/com_page/controleurs/router.php?task=enablePage", order, function(theResponse) {
				var error_msg = "Erreur lors de l'activation.";
				if (state === "oui") {
					error_msg = "Erreur lors de la désactivation.";
				}
				if (parseInt(theResponse) === 1) {
					if (state === "oui") {
						btn.attr("data-state", "non").removeClass("text-success").addClass("text-danger").attr("data-original-title", "Inactive").html("<i class='fa fa-toggle-off'>");
					} else {
						btn.attr("data-state", "oui").removeClass("text-danger").addClass("text-success").attr("data-original-title", "Active").html("<i class='fa fa-toggle-on'>");
					}
				} else {
					$('.msgbox').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Error!</strong> ' + error_msg + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>');
				}
			});
		});
	});
</script>