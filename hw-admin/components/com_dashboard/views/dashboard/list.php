<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-1">
											<i class="fas fa-dollar-sign"></i>
										</span>
										<div class="dash-count">
											<div class="dash-title">Créances</div>
											<div class="dash-counts">
												<p><?php echo number_format($creances, 2, ',', ' '); ?></p>
											</div>
										</div>
									</div>
									<div class="progress progress-sm mt-3">
										<div class="progress-bar bg-5" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-3 mb-0"><span class="text-danger mr-1"><i class="fas fa-arrow-down mr-1"></i><?php echo number_format($creancesYear, 2, ',', ' '); ?></span> année <?php echo date('Y'); ?></p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-2">
											<i class="fas fa-users"></i>
										</span>
										<div class="dash-count">
											<div class="dash-title">Clients</div>
											<div class="dash-counts">
												<p><?php echo number_format($clientNumber, 0, '', ','); ?></p>
											</div>
										</div>
									</div>
									<div class="progress progress-sm mt-3">
										<div class="progress-bar bg-6" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-3 mb-0"><span class="text-success mr-1"><i class="fas fa-user mr-1"></i><?php echo $clientNumberYear; ?></span> année <?php echo date('Y'); ?></p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-3">
											<i class="fas fa-file-alt"></i>
										</span>
										<div class="dash-count">
											<div class="dash-title">Factures</div>
											<div class="dash-counts">
												<p><?php echo number_format($factureNumber, 0, '', ','); ?></p>
											</div>
										</div>
									</div>
									<div class="progress progress-sm mt-3">
										<div class="progress-bar bg-7" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-3 mb-0">
										<span class="text-success mr-1"><i class="fas fa-money-bill-alt mr-1"></i><?php echo number_format($factureTotal, 2, ',', ' '); ?> Dh</span> année <?php echo date('Y'); ?><br>
										<span class="text-success mr-1"><i class="fas fa-money-bill-alt mr-1"></i><?php echo number_format($factureTotalEur, 2, ',', ' '); ?> €</span> année <?php echo date('Y'); ?><br>
										<span class="text-success mr-1"><i class="fas fa-money-bill-alt mr-1"></i><?php echo number_format($factureTotalPound, 2, ',', ' '); ?> £</span> année <?php echo date('Y'); ?>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-4">
											<i class="far fa-file"></i>
										</span> 
										<div class="dash-count">
											<div class="dash-title">Devis</div>
											<div class="dash-counts">
												<p><?php echo number_format($devisNumber, 0, '', ','); ?></p>
											</div>
										</div>
									</div>
									<div class="progress progress-sm mt-3">
										<div class="progress-bar bg-8" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="text-muted mt-3 mb-0"><span class="text-danger mr-1"><i class="fas fa-arrow-down mr-1"></i><?php echo $devisNumberInvalide; ?></span> devis invalide</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-7 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="card-title">Statistiques vente</h5> 
										<div class="dropdown" data-toggle="dropdown">
											<a href="javascript:void(0);" class="btn btn-white btn-sm dropdown-toggle" role="button" data-toggle="dropdown">
												Monthly
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
												<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
												<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
										<div class="w-md-100 d-flex align-items-center mb-3">
											<div>
												<span>CA MAD</span>
												<p class="h3 text-primary mr-5"><?php echo number_format(payment::total(date('Y')), 2, ',', ' '); ?></p>
											</div>
											<div>
												<span>CA EUR</span>
												<p class="h3 text-success mr-5"><?php echo number_format(payment::total(date('Y'),false,'€'), 2, ',', ' '); ?></p>
											</div>
											<div>
												<span>CA Pound</span>
												<p class="h3 text-danger mr-5"><?php echo number_format(payment::total(date('Y'),false,'£'), 2, ',', ' '); ?></p>
											</div>
										</div>
									</div>
									
									<div id="sales_chart"></div>
									<?php $paymentPerMonth = $paymentPerMonthEur = $paymentPerMonthPound = array();?>
									<?php for($i = 1 ; $i < 13 ; $i++){
										$total = payment::total(date('Y'),$i);
										$total2 = payment::total(date('Y'),$i,'€');
										$total3 = payment::total(date('Y'),$i,'£');
										array_push($paymentPerMonth,$total);
										array_push($paymentPerMonthEur,$total2);
										array_push($paymentPerMonthPound,$total3);
									} ?>
									<script>
									var paymentPerMonth = [<?php echo implode($paymentPerMonth,','); ?>];
									var paymentPerMonthEur = [<?php echo implode($paymentPerMonthEur,','); ?>];	
									var paymentPerMonthPound = [<?php echo implode($paymentPerMonthPound,','); ?>];		
									</script>
									<?php //echo implode($paymentPerMonthEur,','); ?>
								</div>
							</div>
						</div>
						<div class="col-xl-5 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="card-title">Facture Analytics</h5> 
										<div class="dropdown" data-toggle="dropdown">
											<a href="javascript:void(0);" class="btn btn-white btn-sm dropdown-toggle" role="button" data-toggle="dropdown">
												Monthly
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="javascript:void(0);" class="dropdown-item">Weekly</a>
												<a href="javascript:void(0);" class="dropdown-item">Monthly</a>
												<a href="javascript:void(0);" class="dropdown-item">Yearly</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div id="invoice_chart"></div>
									<script>
									var facturePaye = <?php echo $factureNumber = facture::count(1); ?>;
									var factureimpaye = <?php echo $factureNumber = facture::count(3); ?>;
									var facturePartial = <?php echo $factureNumber = facture::count(2); ?>;	
									</script>
									<div class="text-center text-muted">
										<div class="row">
											<div class="col-4">
												<div class="mt-4">
													<p class="mb-2 text-truncate"><i class="fas fa-circle text-primary mr-1"></i> Impayée</p>
													<h5<?php echo $factureNumber = facture::count(3); ?></h5>
												</div>
											</div>
											<div class="col-4">
												<div class="mt-4">
													<p class="mb-2 text-truncate"><i class="fas fa-circle text-success mr-1"></i> Payée</p>
													<h5><?php echo $factureNumber = facture::count(1); ?></h5>
												</div>
											</div>
											<div class="col-4">
												<div class="mt-4">
													<p class="mb-2 text-truncate"><i class="fas fa-circle text-warning mr-1"></i> Payée partiallement</p>
													<h5><?php echo $factureNumber = facture::count(2); ?></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Factures récentes</h5>
										</div>
										<div class="col-auto">
											<a href="index.php?option=com_facture" class="btn-right btn btn-sm btn-outline-primary">Voir tout</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<!--<div class="progress progress-md rounded-pill mb-3">
											<div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-warning" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="row">
											<div class="col-auto">
												<i class="fas fa-circle text-success mr-1"></i> Paid
											</div>
											<div class="col-auto">
												<i class="fas fa-circle text-warning mr-1"></i> Unpaid
											</div>
											<div class="col-auto">
												<i class="fas fa-circle text-danger mr-1"></i> Overdue
											</div>
											<div class="col-auto">
												<i class="fas fa-circle text-info mr-1"></i> Draft
											</div>
										</div>-->
									</div>
				
									<div class="table-responsive">
									
										<table class="table table-stripped table-hover">
											<thead class="thead-light">
												<tr>
												   <th>Client</th>
												   <th>Montant</th>
												   <th>Date</th>
												   <th>Status</th>
												   <th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($lastFactures as $facture): ?>
												<?php
												switch($facture->getStatu()){
													case '1' : $statu = '<span class="badge bg-success-light">Payée</span>'; break;
													case '2' : $statu = '<span class="badge bg-warning-light">Payée partialement</span>'; break;
													default : $statu = '<span class="badge bg-danger-light">Impayée</span>'; break;	
												}
												?>
												<tr>
													<td>
														<?php $photoLink = $facture->getClient()->getPhoto() != '' ? "images/clients/" . $facture->getClient()->getPhoto() : "assets/img/profiles/avatar-01.jpg"; ?>
														<h2 class="table-avatar">
															<a href="#0"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="<?php echo $photoLink; ?>" alt="Client Image"> <?php echo $facture->getClient()->getRaisonSocial(); ?></a>
														</h2>
													</td>
													<td><?php echo number_format($facture->getTotal(), 2, ',', ' ') . ' ' . $facture->getDevise(); ?></td>
													<td><?php echo normaldate($facture->getDateFacture()); ?></td>
													<td><?php echo $statu; ?></td>
													<td class="text-right">
														<div class="dropdown dropdown-action">
															<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item text-warning" href="index.php?option=com_facture&task=edit&id=<?php echo $facture->getId(); ?>"><i class="far fa-edit mr-2"></i>Modifier</a>
																<a class="dropdown-item text-info" href="index.php?option=com_facture&task=show&id=<?php echo $facture->getId(); ?>"><i class="far fa-eye mr-2"></i>Afficher</a>
																<a class="dropdown-item text-danger delete" href="javascript:void(0);" data-id="<?php echo $facture->getId(); ?>"><i class="far fa-trash-alt mr-2"></i>Supprimer</a>

																<a class="dropdown-item text-success" href="index.php?option=com_facture&task=payment&id=<?php echo $facture->getId(); ?>"><i class="far fa-money-bill-alt mr-2"></i>Reglement</a>
																<a class="dropdown-item text-danger" href="components/com_facture/controleurs/router.php?task=pdfFacture&id=<?php echo $facture->getId(); ?>" target="_blank"><i class="far fa-file-pdf mr-2"></i>PDF</a>
															</div>
														</div>
													</td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col">
											<h5 class="card-title">Devis récents</h5>
										</div>
										<div class="col-auto">
											<a href="index.php?option=com_devis" class="btn-right btn btn-sm btn-outline-primary">Voir tout</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<!--<div class="mb-3">
										<div class="progress progress-md rounded-pill mb-3">
											<div class="progress-bar bg-success" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
											<div class="progress-bar bg-warning" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="row">
											<div class="col-auto">
												<i class="fas fa-circle text-success mr-1"></i> Sent
											</div>
											<div class="col-auto">
												<i class="fas fa-circle text-warning mr-1"></i> Draft
											</div>
											<div class="col-auto">
												<i class="fas fa-circle text-danger mr-1"></i> Expired
											</div>
										</div>
									</div>-->
									<div class="table-responsive">
										<table class="table table-hover">
											<thead class="thead-light">
												<tr>
													<th>Client</th>
													<th>Date</th>
													<th>Montant</th>
													<th>Status</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($lastDevis as $devis): ?>
												<?php
												switch($devis->getStatu()){
													case '1' : $statu = '<span class="badge bg-success-light">Valide</span>'; break;
													default : $statu = '<span class="badge bg-warning-light">Non valide</span>'; break;	
												}
												?>
												<tr>
													<td>
														<?php $photoLink = $devis->getClient()->getPhoto() != '' ? "images/clients/" . $devis->getClient()->getPhoto() : "assets/img/profiles/avatar-01.jpg"; ?>
														<h2 class="table-avatar">
															<a href="#0"><img class="avatar avatar-sm mr-2 avatar-img rounded-circle" src="<?php echo $photoLink; ?>" alt="Client Image"> <?php echo $devis->getClient()->getRaisonSocial(); ?></a>
														</h2>
													</td>
													<td><?php echo normaldate($devis->getDateDevis()); ?></td>
													<td><?php echo number_format($devis->getTotal(), 2, ',', ' ') . ' ' . $devis->getDevise(); ?></td>
													<td><?php echo $statu; ?></td>
													<td class="text-right">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-warning" href="index.php?option=com_devis&task=edit&id=<?php echo $devis->getId(); ?>"><i class="far fa-edit mr-2"></i>Modifier</a>
															<a class="dropdown-item text-info" href="index.php?option=com_devis&task=show&id=<?php echo $devis->getId(); ?>"><i class="far fa-eye mr-2"></i>Afficher</a>
															<a class="dropdown-item text-danger delete" href="javascript:void(0);" data-id="<?php echo $devis->getId(); ?>"><i class="far fa-trash-alt mr-2"></i>Supprimer</a>

															<a class="dropdown-item text-danger" href="components/com_devis/controleurs/router.php?task=pdfDevis&id=<?php echo $devis->getId(); ?>" target="_blank"><i class="far fa-file-pdf mr-2"></i>PDF</a>
															<a class="dropdown-item text-success create-invoice" href="javascript:void(0);" data-id="<?php echo $devis->getId(); ?>"><i class="fa fa-file-invoice mr-2"></i>+ Facture</a>
														</div>
													</div>
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