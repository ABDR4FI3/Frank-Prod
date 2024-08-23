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

<!--Company Section-->
<section class="company-section">
	<div class="auto-container">
		<?php echo $page->getTexte(); ?>
	</div>
</section>
<!--End Company Section-->