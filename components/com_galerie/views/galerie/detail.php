<section class="container-custom">
<?php $banner = $galerie->getCover() == "" ? "images/banner.jpg" : "images/galerie/".$galerie->getCover(); ?>
<div class="banner" style="background-image: url('<?php echo $siteURL.$banner; ?>')">
	<h1 class="main-title"><?php echo $galerie->getTitre(); ?></h1>
</div>

<div class="page-content">
	<div class="grid">
		<?php foreach($photos as $photo): ?>
		<div class="grid__item">
			<a href="<?php echo $siteURL ?>images/galerie/<?php echo $photo->getPhoto(); ?>" class="overlay" data-fancybox="galerie"></a>
			<h4 class="caption"><?php echo $photo->getTitre(); ?></h4>
		    <img src="<?php echo $siteURL ?>images/galerie/<?php echo $photo->getPhoto(); ?>" alt="<?php echo $photo->getTitre(); ?>">
		</div>
		<?php endforeach; ?>
	</div>
</div>
</section>