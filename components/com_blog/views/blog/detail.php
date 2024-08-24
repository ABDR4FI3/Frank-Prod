<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/" . $page->getPhoto(); ?>


<!--Page Title-->
<section class="page-title Blog_Banner" style="background-image:url('<?php echo $siteURL . $banner; ?>')">
	<div class="auto-container Bog_Title_Container">
		<h1><?php echo $post->getTitre(); ?></h1>
	</div>
</section>

<!-- log category-->
<section class="Blog_Categorie_Container">
	<div class="Center_Blog_Categorie">
		<ul class="page-breadcrumb Blog_Categorie">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><a href="<?php echo $page->getLink(); ?>"><?php echo $page->getTitre(); ?></a></li>
			<li><?php echo $post->getTitre(); ?></li>
		</ul>
	</div>
</section>

<!--Sidebar Page Container-->
<section class="sidebar-page-container">
	<div class="container">
		<div class="row clearfix">
			<!--Content Side-->
			<div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
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

			<!--Sidebar Side-->
			<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<aside class="sidebar default-sidebar with-border">

					<!--Blog Category Widget-->
					<div class="sidebar-widget sidebar-blog-category">
						<div class="sidebar-title">
							<h2>Catégories</h2>
						</div>
						<ul class="blog-cat-two">
							<?php foreach ($categories as $categorie): ?>
								<li><a href="<?php echo $categorie->getLink(); ?>"><?php echo $categorie->getTitre(); ?><span>(6)</span></a></li>
							<?php endforeach; ?>
						</ul>
					</div>

					<!-- Popular Posts -->
					<div class="sidebar-widget popular-posts">
						<div class="sidebar-title">
							<h2>Dernières actualités</h2>
						</div>

						<div class="widget-content">
							<?php foreach ($recentPosts as $postt): ?>
								<article class="post">
									<figure class="post-thumb">
										<img
										class="Suggested_Blog_Image"
											src="<?php echo $siteURL; ?>
											images/blog/
											<?php echo $postt->getPhoto(); ?>"
											alt="<?php echo $postt->getTitre(); ?>">
										<a class="overlay" href="blog-single.html"></a>
									</figure>
									<div class="post-info">
										<?php echo normaldate2($postt->getDateAdd()); ?>
									</div>
									<div class="text">
										<a
											href="<?php echo $postt->getLink(); ?>"
											<?php echo $postt->getTitre(); ?>
										</a>
									</div>
								</article>
							<?php endforeach; ?>
						</div>
					</div>
				</aside>
			</div>

		</div>
	</div>
</section>
<!--End Sidebar Page Container-->