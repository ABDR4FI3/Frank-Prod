<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url('<?php echo $siteURL.$banner; ?>')">
	<div class="auto-container">
		<h1><?php echo $page->getTitre(); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><?php echo $page->getTitre(); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Testimonial Section Two-->
<section class="testimonial-section-two">
	<div class="auto-container">
		<div class="row clearfix">
			<!--Column-->
			<div class="column col-md-6 col-sm-6 col-xs-12">
				<?php foreach($temoignages as $temoignage):?>
				<!--Testimonial Block Two-->
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="content-box">
							<div class="content">
								<div class="quote-icon">
									<span class="icon flaticon-right-quote-symbol"></span>
								</div>
								<div class="text"><?php echo $temoignage->getTemoignage(); ?></div>
								<div class="curve"></div>
							</div>
						</div>
						<div class="lower-box">
							<h3><?php echo $temoignage->getNom(); ?></h3>
							<div class="locations"><?php echo $temoignage->getFonction(); ?></div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!--End Testimonial Section Two-->