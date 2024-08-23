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

<!--Blog Page Section-->
<section class="blog-page-section">
	<div class="auto-container">

		<div class="row clearfix">
			<?php echo $page->getTexte(); ?>
			
			<?php foreach ($posts as $post): ?>
			<!--News Block-->
			<div class="news-block style-two col-md-4 col-sm-6 col-xs-12">
				<div class="inner-box">
					<div class="image">
						<a href="<?php echo $post->getLink(); ?>"><img src="<?php echo $siteURL; ?>images/blog/<?php echo $post->getPhoto(); ?>" alt="<?php echo $post->getTitre(); ?>" /></a>
					</div>
					<div class="lower-content">
						<div class="category"><?php echo $post->getCategorie()->getTitre();?></div>
						<div class="lower-box">
							<div class="post-date"><?php echo normaldate2($post->getDateAdd());?></div>
							<h3><a href="<?php echo $post->getLink(); ?>"><?php echo $post->getTitre(); ?></a></h3>
							<div class="post-info"><?php echo $post->getExtrait(); ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<!--Styled Pagination-->
		<ul class="styled-pagination text-center">
			<li class="prev"><a href="<?php echo $page->getLink().$prevLink.'/'; ?>"><span class="fa fa-angle-left"></span></a></li>
			<?php
			for($i = 1 ; $i <= $nbrPage ; $i++){
			$current = ($i == $pageNbr) ? 'active' : '';
			?>
			<li><a href="<?php echo $page->getLink().$i.'/'; ?>" class="<?php echo $current; ?>"><?php echo $i; ?></a></li>
			<?php } ?>
			<li class="next"><a href="<?php echo $page->getLink().$nextLink.'/'; ?>"><span class="fa fa-angle-right"></span></a></li>
		</ul>                
		<!--End Styled Pagination-->            

	</div>
</section>
<!--End Blog Page Section-->