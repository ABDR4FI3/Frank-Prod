<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<main id="content">
      <section class="pt-2 pb-10 pb-lg-17 page-title bg-overlay bg-img-cover-center"
     style="background-image: url('<?php echo $siteURL.$banner; ?>');">
        <div class="container">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-light mb-0">
              <li class="breadcrumb-item"><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?php echo $page->getTitre(); ?></li>
            </ol>
          </nav>
          <h1 class="fs-22 fs-md-42 mb-0 text-white font-weight-normal text-center pt-17 pb-13 lh-15 px-lg-16" data-animate="fadeInDown">
			  <?php echo $page->getExtrait(); ?>
          </h1>
        </div>
      </section>
      <section class="bg-patten-05 mb-13">
        <div class="container">
          <div class="card mt-n13 z-index-3 pt-10 border-0">
            <?php echo $page->getTexte(); ?>
          </div>
          <div class="row mb-9">
			  <?php foreach($services as $id_service): ?>
			  <?php $service = new service($id_service,$db,$_SESSION['lang']); ?>
			  <?php
			  switch($id_service){
				  case 3 : $ico = 'gestion_locative.png'; break;
			      case 2 : $ico = 'decoration.png'; break;
				  case 1 : $ico = 'renovation.png'; break;
			  }
			  ?>
            <div class="col-sm-6 col-lg-4 mb-6">
              <div class="card border-hover shadow-hover-lg-1 px-7 pb-6 pt-4 h-100 bg-transparent bg-hover-white">
                <div class="card-img-top d-flex align-items-end justify-content-center">
                  <a href="<?php echo $service->getLink(); ?>" class="text-primary fs-90 lh-1">
					<img src="<?php echo $siteURL; ?>images/<?php echo $ico; ?>" alt="<?php echo $service->getTitre(); ?>" style="height: 120px">
				  </a>
                </div>
                <div class="card-body px-0 pt-6 pb-0 text-center">
                  <h4 class="card-title fs-18 lh-17 text-dark mb-2"><a href="<?php echo $service->getLink(); ?>"><?php echo $service->getTitre(); ?></a></h4>
                  <p class="card-text px-2"><?php echo $service->getExtrait(); ?></p>
                </div>
              </div>
            </div>
			  <?php endforeach; ?>
            
          </div>
			
		
		 <div class="row galleries">
                  <div class="col-sm-6 col-md-5 mb-6">
                    <div class="item item-size-1-1">
                      <a href="<?php echo $siteURL ?>images/galerie/<?php echo $photos[0]->getPhoto(); ?>" class="card p-0 hover-zoom-in"
                       data-gtf-mfp="true" data-gallery-id="01">
                        <div class="card-img img"
                             style="background-image:url('<?php echo $siteURL ?>images/galerie/<?php echo $photos[0]->getPhoto(); ?>')">
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="row h-100">
						<?php $cpt = 0; ?>
						<?php foreach($photos as $photo): ?>
						<?php $cpt++; ?>
						<?php if($cpt == 1) continue; ?>
                      <div class="col-sm-6 col-md-4 mb-6">
                        <div class="item item-size-1-1">
                          <div class="card p-0 hover-zoom-in hover-change-image">
                            <a href="<?php echo $siteURL ?>images/galerie/<?php echo $photo->getPhoto(); ?>" class="card-img"
                                   data-gtf-mfp="true" data-gallery-id="01"
                                   style="background-image:url('<?php echo $siteURL ?>images/galerie/<?php echo $photo->getPhoto(); ?>')">
                            </a>
							  <?php if($cpt == 7): ?>
							  <a href="#"
                                   class="card-img-overlay text-white d-flex align-items-center justify-content-center flex-column hover-white hover-image bg-dark-opacity-04">
                            </a>
							  <?php endif; ?>
							  
                          </div>
                        </div>
                      </div>
						<?php if($cpt == 7) break; ?>
						<?php endforeach; ?>
						
                    </div>
                  </div>
                </div>
			
			
          <hr class="mb-11">
          <h2 class="big-title text-heading mb-2 fs-22 fs-md-32 text-center lh-16 mxw-571 px-lg-8"><?php echo $lang["TITRE_FORM_SERVICE"][$_SESSION['lang']]; ?></h2>
          <p class="text-center mxw-670 mb-8">
            Lorem ipsum dolor sit amet, consec tetur cing elit. Suspe ndisse suscorem ipsum dolor sit ametcipsum
            ipsumg consec tetur cing elitelit.
          </p>
          <form class="mxw-774" method="post" action="<?= $siteURL; ?>components/com_contact/controleurs/router.php?task=contactService" id="serviceForm">
            <div class="row">
				<div class="col-sm-12 msgbox"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" placeholder="<?php echo $lang["NOM"][$_SESSION['lang']]; ?>" class="form-control form-control-lg border-0" name="nom">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" placeholder="<?php echo $lang["EMAIL"][$_SESSION['lang']]; ?>" name="email" class="form-control form-control-lg border-0">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input placeholder="<?php echo $lang["TELEPHONE"][$_SESSION['lang']]; ?>" class="form-control form-control-lg border-0" type="text" name="tel">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
					<select name="service" class="form-control form-control-lg border-0">
						<?php foreach($services as $id_service): ?>
						<?php $service = new service($id_service,$db,$_SESSION['lang']); ?>
						<option value="<?php echo $service->getTitre(); ?>"><?php echo $service->getTitre(); ?></option>
						<?php endforeach; ?>
						<option value="Autres"><?php echo $lang["AUTRES"][$_SESSION['lang']]; ?></option>
					</select>
                </div>
              </div>
            </div>
            <div class="form-group mb-6">
              <textarea class="form-control border-0" placeholder="<?php echo $lang["MESSAGE"][$_SESSION['lang']]; ?>" name="message" rows="5"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-lg btn-primary px-9"><?php echo $lang["ENVOYER"][$_SESSION['lang']]; ?></button>
            </div>
          </form>
        </div>
      </section>
    </main>