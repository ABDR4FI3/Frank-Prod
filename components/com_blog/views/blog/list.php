<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/" . $page->getPhoto(); ?>
<!--Page Title-->
<!-- <section class="page-title Blog_Banner" style="background-image:url('<?php echo $siteURL . $banner; ?>')">
	<div class="auto-container">
		<h1><?php echo $page->getTitre(); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><?php echo $page->getTitre(); ?></li>
		</ul>
	</div>
</section> -->



<section
	class="page-title Blog_Banner" style="background-image:url('<?php echo $siteURL . $banner; ?>')">
	<div class="auto-container Bog_Title_Container">
		<h1><?php echo $page->getTitre(); ?></h1>
	</div>
</section>

<!-- log category-->
<section class="Blog_Categorie_Container">
	<div class="Center_Blog_Categorie">
		<ul class="page-breadcrumb Blog_Categorie">
			<li>
				<a
					href="<?php echo $siteURL; ?>">
					<?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?>
				</a>
			</li>
			<li><?php echo $page->getTitre(); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Blog Page Section-->
<section class="blog-page-section">
	<div class="container">
		<div class="row">
			<!-- Dynamic content from PHP -->
			<?php echo $page->getTexte(); ?>

			<?php foreach ($posts as $post): ?>
				<!-- News Block -->
				<div class="col-md-4 col-sm-6 col-xs-12 mb-4">
					<div class="">
						<a href="<?php echo $post->getLink(); ?>">
							<img src="<?php echo $siteURL; ?>images/blog/<?php echo $post->getPhoto(); ?>" class="card-img-top" alt="<?php echo $post->getTitre(); ?>">
						</a>
						<div class="">
							<h5 class="card-title"><?php echo $post->getTitre(); ?></h5>
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $post->getCategorie()->getTitre(); ?></h6>
							<p class="card-text"><?php echo $post->getExtrait(); ?></p>
							<p class="card-text"><small class="text-muted"><?php echo normaldate2($post->getDateAdd()); ?></small></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- Styled Pagination -->
		<nav aria-label="Page navigation">
			<ul class="pagination justify-content-center">
				<li class="page-item <?php echo $prevLink ? '' : 'disabled'; ?>">
					<a class="page-link" href="<?php echo $page->getLink() . $prevLink . '/'; ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<?php for ($i = 1; $i <= $nbrPage; $i++): ?>
					<li class="page-item <?php echo ($i == $pageNbr) ? 'active' : ''; ?>">
						<a class="page-link" href="<?php echo $page->getLink() . $i . '/'; ?>"><?php echo $i; ?></a>
					</li>
				<?php endfor; ?>
				<li class="page-item <?php echo $nextLink ? '' : 'disabled'; ?>">
					<a class="page-link" href="<?php echo $page->getLink() . $nextLink . '/'; ?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- End Styled Pagination -->

	</div>
</section>

<!--End Blog Page Section-->