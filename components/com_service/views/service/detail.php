<?php $banner = $service->getPhoto() == "" ? "images/banner.jpg" : "images/services/".$service->getPhoto(); ?>
<main id="content">
      <section style="background-image: url('<?php echo $siteURL.$banner; ?>')"
         class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay">
        <div class="container position-relative z-index-2 text-center">
          <div class="mxw-751">
            <h1 class="text-white fs-30 fs-md-42 lh-15 font-weight-normal mt-4 mb-10" data-animate="fadeInRight"><?php echo $service->getTitre(); ?></h1>
          </div>
        </div>
      </section>
      <section class="bg-patten-03 bg-gray-01 pb-13">
        <div class="container">
          <div class="card border-0 mt-n13 z-index-3 mb-12">
            <div class="card-body p-6 px-lg-14 py-lg-13">
              <?php echo $service->getTexte(); ?>
							  
			  <?php if(isset($photos)): ?>	
			  <div class="row galleries mb-10">
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
				<?php endif; ?>
				
			  <h2 class="big-title text-heading mb-2 fs-22 fs-md-32 text-center lh-16 mxw-571 px-lg-8"><?php echo $lang["CONTACT_NS"][$_SESSION['lang']]; ?></h2>
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
						<?php $service2 = new service($id_service,$db,$_SESSION['lang']); ?>
						<?php $sl = $service->getId() == $service2->getId() ? "selected" : ""; ?>
						<option value="<?php echo $service2->getTitre(); ?>" <?php echo $sl; ?>><?php echo $service2->getTitre(); ?></option>
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
			  <hr class="my-6">
				<p class="letter-spacing-263 text-uppercase mb-4 font-weight-500 text-center">Navigation</p>
              <div class="d-flex flex-wrap justify-content-center">
                <a href="<?php echo $page->getLink(); ?>" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary fs-18"><?php echo $page->getTitre(); ?></a>
				<?php foreach($services as $id_service): ?>
				<?php $service2 = new service($id_service,$db,$_SESSION['lang']); ?>  
                <a href="<?php echo $service2->getLink(); ?>" class="btn btn-lg bg-gray-01 text-body mr-4 mb-4 hover-primary fs-18"><?php echo $service2->getTitre(); ?></a>
				<?php endforeach; ?>  
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>