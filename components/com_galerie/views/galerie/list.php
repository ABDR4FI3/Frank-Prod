<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<main id="content">
      <?php include('includes/rech.php'); ?>
      <section style="background-image: url('<?php echo $siteURL.$banner; ?>')"
         class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay">
        <div class="container position-relative z-index-2 text-center">
          <div class="mxw-751">
            <h1 class="text-white fs-30 fs-md-42 lh-15 font-weight-normal mt-4 mb-10" data-animate="fadeInRight"><?php echo $page->getTitre(); ?>
			  </h1>
          </div>
        </div>
      </section>
      <section class="py-6">
        <div class="container">
			<?php if($page->getTexte() != ''): ?>
				<div class="card border-0 z-index-3 mb-5">
				<div class="card-body p-6 px-lg-8 py-lg-8">
				  <?php echo $page->getTexte(); ?>
				</div>
				</div>
			<?php endif; ?>
          <div class="row align-items-sm-center">
				<?php if($pageSelection): ?>
				  <div class="wow fadeInUp btn-box-selection mx-auto">
					  <a href="javascript:void(0)" class="send-selection btn btn-md btn-outline-primary"><i class="fas fa-paper-plane"></i> <?php echo $lang["ENVOI_SELECTION"][$_SESSION['lang']]; ?></a>
					  <a href="javascript:void(0)" class="vider-selection btn btn-md btn-danger"><i class="fas fa-trash-alt"></i> <?php echo $lang["VIDER_SELECTION"][$_SESSION['lang']]; ?></a>
				  </div>
				  
				  <div class="msgbox col-md-6 offset-md-3 mt-5"></div>
			  <?php else: ?>

            <div class="col-md-6">
              <h2 class="fs-15 text-dark mb-0"><?php echo $lang["VOTRE_RECH"][$_SESSION['lang']]; ?> <span class="text-primary"><?php echo sizeof($allProduct); ?></span> <?php echo $lang["RESULTAT"][$_SESSION['lang']]; ?></h2>
            </div>
            <div class="col-md-6 mt-6 mt-md-0">				
              <div class="d-flex justify-content-md-end align-items-center">
                <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                  <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
						       for="inputGroupSelect01"><i
								class="fas fa-align-left fs-16 pr-2"></i><?php echo $lang["SORT"][$_SESSION['lang']]; ?> :</label>
                  <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
						        data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
						        id="sort-select" name="sort">
                    <option selected><?php echo $lang["DATE_DESC"][$_SESSION['lang']]; ?></option>
                    <option value="date_desc" <?php echo (isset($_SESSION['trie']) && $_SESSION['trie'] == 'date_desc') ? "selected" : "";?>><?php echo $lang["DATE_DESC"][$_SESSION['lang']]; ?></option> 
						<option value="prix_asc" <?php echo (isset($_SESSION['trie']) && $_SESSION['trie'] == 'prix_asc') ? "selected" : "";?>><?php echo $lang["PRIX_ASC"][$_SESSION['lang']]; ?></option> 
						<option value="prix_desc" <?php echo (isset($_SESSION['trie']) && $_SESSION['trie'] == 'prix_desc') ? "selected" : "";?>><?php echo $lang["PRIX_DESC"][$_SESSION['lang']]; ?></option> 
                  </select>
                </div>
                <div class="d-none d-md-block">
				  <a class="fs-sm-18 text-dark switch-view" data-view="map" href="javascript:void(0)">
                    <i class="fas fa-map-marker"></i>
                  </a>	
                  <a class="fs-sm-18 text-dark ml-5 opacity-2 switch-view" data-view="grid" href="javascript:void(0)">
                    <i class="fa fa-th-large"></i>
                  </a>
                </div>
              </div>
            </div>
			<?php endif; ?>  
          </div>
        </div>
      </section>
      <section class="pb-10">
        <div class="container">
          <div class="row">
			  
			  <?php foreach ($produits as $produit): ?>
            <div class="col-lg-4 col-md-6 pb-6">
              <div class="card shadow-hover-xs-4 item-product" data-animate="fadeInUp">
                <div class="card-header bg-transparent px-4 pt-4 pb-3">
                  <h2 class="fs-16 lh-2 mb-0">
                    <a href="<?php echo $produit->getLink(); ?>" class="text-dark hover-primary"><?php echo $produit->getTitre(); ?></a>
                  </h2>
                  <p class="font-weight-500 text-gray-light mb-3"><i class="fal fa-map-marker-alt mr-1"></i> <?php echo $produit->getLocalisation()->getTitre(); ?></p>
                  <div class="position-relative d-block rounded-lg hover-change-image bg-hover-overlay card-img">
                    <img src="<?php echo $siteURL; ?>images/produits/<?php echo $produit->getPhoto(); ?>" alt="<?php echo $produit->getTitre(); ?>">
					  <a href="<?php echo $produit->getLink(); ?>" class="btn-more"><?php echo $lang["VOIR_BIEN"][$_SESSION['lang']]; ?> <i class="fal fa-arrow-right ml-2"></i></a>
                    <div class="card-img-overlay d-flex flex-column">
						<a href="<?php echo $produit->getLink(); ?>" class="img-link"></a>
						<?php if($produit->isCoupCoeur()): ?>
                      <div><span class="badge badge-black"><?php echo $lang["COUP_COUEUR"][$_SESSION['lang']]; ?></span></div>
						<?php endif; ?>
                      <div class="mt-auto d-flex hover-image">
                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto pos-relative">
						  <?php $photos = photoProduit::findAllByProduit($produit->getId(), $_SESSION["lang"], true); ?>	
                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="<?php echo sizeof($photos); ?> Images">
                            <a href="<?php echo $produit->getLink(); ?>" class="text-white hover-primary">
                              <i class="far fa-images"></i><span class="pl-1"><?php echo sizeof($photos); ?></span>
                            </a>
                          </li>
						  <?php if($produit->getVideo() != ''): ?>	
                          <li class="list-inline-item" data-toggle="tooltip" title="Vidéo disponible">
                            <a href="javascript:void(0)" data-src="https://www.youtube.com/watch?v=<?php echo $produit->getVideo(); ?>" data-fancybox class="text-white hover-primary">
                              <i class="far fa-play-circle"></i><span class="pl-1">1</span>
                            </a>
                          </li>
							<?php endif; ?>
                        </ul>
                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3 pos-relative">
							<?php
							// bouton ajouter à ma selection
							$classCoeur = "";
							$icoCoeur = "far fa-heart";
							$title = $lang["AJOUT_SELECTION"][$_SESSION['lang']];
							if (isset($_COOKIE['meurice']) && !empty($_COOKIE['meurice'])) {
								$cookie = $_COOKIE['meurice'];
								$cookie = stripslashes($cookie);
								$ids = json_decode($cookie, true);
								if ($ids) {
									foreach ($ids as $id) {
										if ($id == $produit->getId()) {
											$classCoeur = "actif";
											$icoCoeur = "fas fa-heart";
											$title = $lang["SUPP_SELECTION"][$_SESSION['lang']];
										}
									}
								}
							}
							?>
                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="<?php echo $title; ?>">
                            <a href="javascript:void(0)" data-id="<?= $produit->getId();?>" class="btn-selection text-white fs-20 hover-primary <?php echo $classCoeur; ?>">
                              <i class="<?php echo $icoCoeur; ?>"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center pt-3">
					  <?php
						if($produit->getOperation()->getId() == 2)
							$par = " /".$lang["MOIS"][$_SESSION['lang']];
						elseif($produit->getOperation()->getId() == 3)
							$par = " /".$lang["JOUR"][$_SESSION['lang']];
						else
							$par = "";	

						$prix = ($produit->getPrix() == -1) ? $lang["NOUS_CONSULTER"][$_SESSION['lang']] : $produit->getPrice($_SESSION['currency']) . $par; 

						$from = ($produit->getOperation()->getId() == 3) ? $lang["APARTIR_PRIX"][$_SESSION['lang']] . ' ' : '';
						?> 
					  
                    <p class="fs-17 font-weight-bold text-heading mb-0 lh-1"><?php echo $prix; ?></p>
                    <span class="badge badge-primary"><?php echo $produit->getOperation()->getTitre(); ?></span>
                  </div>
                </div>
                <div class="card-body py-2">
                  <p class="mb-0"><?php echo mb_substr(nl2br(strip_tags($produit->getExtrait())),0,180,"UTF-8"); ?></p>
                </div>
                <div class="card-footer bg-transparent pt-3 pb-4 pb-3">
                  <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="<?php echo $produit->getChambres() .' '. $lang["CHAMBRES"][$_SESSION['lang']]; ?>">
                      <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                        <use xlink:href="#icon-bedroom"></use>
                      </svg>
                      <?php echo $produit->getChambres() .' '. $lang["CHAMBRES"][$_SESSION['lang']]; ?>
                    </li>
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="<?php echo $produit->getBains() .' '. $lang["SDB"][$_SESSION['lang']]; ?>">
                      <svg class="icon icon-shower fs-18 text-primary mr-1">
                        <use xlink:href="#icon-shower"></use>
                      </svg>
                      <?php echo $produit->getBains() .' '. $lang["SDB"][$_SESSION['lang']]; ?>
                    </li>
                    <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5" data-toggle="tooltip" title="<?php echo $lang["SUR_TERRAIN"][$_SESSION['lang']]; ?>">
                      <svg class="icon icon-square fs-18 text-primary mr-1">
                        <use xlink:href="#icon-square"></use>
                      </svg>
                      <?php echo $produit->getSurfaceGlobale(); ?> m²
                    </li>
                  </ul>
                </div>
              </div>
            </div>
			  <?php endforeach; ?> 
            
          </div>
          <nav class="pt-4">
            <ul class="pagination rounded-active justify-content-center mb-0">
				<?php if($nbrPage > 1): ?>
              <li class="page-item"><a class="page-link" data-page="<?php echo ($currentPage - 1); ?>" href="javascript:void(0)"><i class="far fa-angle-double-left"></i></a>
				  <?php endif; ?>
              </li>
				<?php
				for ($i = 1; $i <= $nbrPage; $i++) {
				$current = $i == $currentPage ? 'current' : "";
				?>
              <li class="page-item"><a class="page-link <?= $current; ?>" data-page="<?= $i; ?>" href="javascript:void(0)"><?= $i; ?></a></li>
				<?php
				}
				?>
				<?php if($nbrPage > 1 && $currentPage < $nbrPage): ?>
              <li class="page-item"><a class="page-link" data-page="<?php echo ($currentPage + 1); ?>" href="javascript:void(0)"><i class="far fa-angle-double-right"></i></a></li>
				<?php endif; ?>
            </ul>
          </nav>
        </div>
      </section>
    </main>