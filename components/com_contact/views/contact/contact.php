<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/" . $page->getPhoto(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url('<?php echo $siteURL . $banner; ?>')">
	<div class="auto-container">
		<h1><?php echo $page->getTitre(); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><?php echo $page->getTitre(); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Contact Section-->
<section class="contact-page-section ">
	<div class="auto-container ">
		<div class="inner-container inner-column-us">
			<div class="clearfix contact-flex-us">
				<!--Content Column-->
				<?php echo $page->getTexte(); ?>
				<div class="content-column content-column-us col-md-7 col-sm-12 col-xs-12 shadow">
					<div class="inner-column">
						<h2>
							<span>CONTACT</span>
							<span>US</span>
						</h2>
						<div class="title-text">Vous pouvez nous contacter en remplissant le formulaire ci-contre et en précisant le motif de votre demande. Votre message sera transmis au service concerné.</div>
						<div class="row clearfix">

							<!--Column-->
							<div class="column col-md-12 col-sm-12 col-xs-12">
								<h3>Siège social</h3>
								<div class="location">Casablanca</div>
								<ul class="contact-list">
									<li><?php echo $config->getAdresse(); ?></li>
									<li><span>Tél: </span><?php echo $config->getTel(); ?></li>
									<li><span>E-mail: </span><?php echo $config->getEmail(); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!--Form Column-->
				<div class="form-column form-column-us col-md-5 col-sm-12 col-xs-12">
					<div class="inner-column">

						<!--Contact Form-->
						<div class="contact-form">
							<form method="post" action="<?= $siteURL; ?>components/com_contact/controleurs/router.php?task=contact" id="contactForm">
								<div class="msgbox col-sm-12"></div>
								<div class="form-group">
									<input class="app-form-control"  type="text" name="nom" placeholder="Nom complet" required>
								</div>
								<div class="form-group">
									<input class="app-form-control" type="text" name="tel" placeholder="Téléphone" required>
								</div>
								<div class="form-group">
									<input class="app-form-control" type="email" name="email" placeholder="E-mail" required>
								</div>
								<div class="form-group">
									<input class="app-form-control" type="text" name="sujet" placeholder="Sujet">
								</div>
								<div class="form-group message">
									<textarea class="app-form-control" name="message" placeholder="Message..."></textarea>
								</div>
								<div class="form-group btn-box">
									<button class="theme-btn btn-style-two app-form-button" type="submit" name="submit-form">Envoyer <i class="fa fa-paper-plane"></i></button>
								</div>

							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!--End Contact Section-->

<!--Map Info Section-->
<section class="map-section">
	<div class="map-box">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.72692321622!2d-7.65703237599912!3d33.57226777587368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Maroc!5e0!3m2!1sfr!2spt!4v1633341209540!5m2!1sfr!2spt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</section>