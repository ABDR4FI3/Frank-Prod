<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/" . $page->getPhoto(); ?>


<!--Page Title-->
<section
	class="page-title Blog_Banner" style="background-image:url('<?php echo $siteURL . $banner; ?>')">
	<div class="auto-container Bog_Title_Container">
		<h1><?php echo $post->getTitre(); ?></h1>
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
			<li>
				<a
					href="<?php echo $page->getLink(); ?>">
					<?php echo $page->getTitre(); ?>
				</a>
			</li>
			<li>
				<?php echo $post->getTitre(); ?>
			</li>
		</ul>
	</div>
</section>

<!--Sidebar Page Container-->
<section class="sidebar-page-container">
	<div class="container">
		<div class="row clearfix">
			<!--Content Side-->
			<div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<!--Our Classic-->
				<div class="blog-single">
					<div class="inner-box">
						<div class="image">
							<img
								class="Blog_Detail_Image"
								src="<?php echo $siteURL; ?>
								images/blog/
								<?php echo $post->getPhoto(); ?>"
								alt="<?php echo $post->getTitre(); ?>" />
						</div>
						<div class="lower-content">
							<div class="category">
								<?php echo $post->getCategorie()->getTitre(); ?>
							</div>
							<div class="upper-box">
								<div class="post-date">
									<?php echo normaldate2($post->getDateAdd()); ?>
								</div>
								<h2>
									<?php echo $post->getTitre(); ?>
								</h2>
								<div class="post-info">
									<span class="theme_color">Par :</span>
									<?php echo $config->getNom(); ?>
								</div>
							</div>
							<div class="text">
								<?php echo $post->getTexte(); ?>
							</div>
							<!--post-share-options-->
							<div class="post-share-options">
								<div class="post-share-inner clearfix">
									<ul class="pull-left info-links clearfix">
										<li><a href="#"><span class="fa fa-heart"></span></a>18</li>
										<li><a href="#"><span class="fa fa-comments"></span></a>6</li>
									</ul>
									<div class="pull-right tags"><span>Tags: </span><a href="#">idea</a>, <a href="#">services</a>, <a href="#">Growth</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Sidebar Page Container-->