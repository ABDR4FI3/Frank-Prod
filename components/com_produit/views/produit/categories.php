<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<!--Page Title-->
<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $siteURL.$banner; ?>)">
    	<div class="auto-container">
        	<h1><?php echo $page->getTitre(); ?></h1>
            <ul class="page-breadcrumb">
            <li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><a href="<?php echo $page->getLink(); ?>"><?php echo $page->getTitre(); ?></a></li>
		
            </ul>
        </div>
    </section>
    <!--End Page Title-->
</section>
<style>
    .Divimg{
        position: relative;
        height: 250px;
    }
    .img1{
     position: relative;
     width: 100%;
     height: 100%;
     object-fit: cover;
     display: block;
    }

</style>


<!--Gallery Modern Section-->
<section class="gallery-modern-section">
    	<div class="auto-container">
            <div class="row clearfix">
            <?php foreach ($categories as $categorie): ?>
                 <!-- Project Block Two-->
                <div class="project-block-two col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image Divimg">
                            <img class="img1" src="<?php echo $siteURL; ?>images/categories/<?php echo $categorie->getPhoto(); ?>" alt="<?php echo $categorie->getTitre(); ?>"  />
                            <div class="overlay-box">
                                <div class="content">
                                    <a  href="images/gallery/project-42.jpg" class="search-btn lightbox-image"  ></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h2><a href="<?php echo $categorie->getLink(); ?>"><?php echo $categorie->getTitre(); ?></a></h2>
                            <a href="<?php echo $categorie->getLink(); ?>" class="detail">Découvrir</a>
                        </div>
                    </div>
                </div>
                
                <?php endforeach ?>

            <div>
        </div>
</section> 