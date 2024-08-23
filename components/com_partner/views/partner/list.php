<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url('<?php echo $siteURL.$banner; ?>')">
	<div class="auto-container">
		<h1>Nos références</h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><a href="<?php echo $page->getLink(); ?>"><?php echo $page->getTitre(); ?></a></li>
			
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix  mx-auto">
		<!-- <div class="lower-section">
		<div class="auto-container "> -->

			<div class="row">
			<?php foreach($partners as $partner): ?> 
				<div class="col-sm-3 ">
				<div class="card " style="width: 18rem; ">
				<img  class="card-img-top" src="<?php echo $siteURL; ?>images/partner/<?php echo $partner->getPhoto(); ?>" alt="">
             <div class="card-body text-center">
                  <h5 class="card-title"> <?php echo $partner->getTitre(); ?></h5>
   
                </div>
               </div>
				</div>
				<?php endforeach; ?>
				
			</div>
			
		<!-- </div>
	</div> -->

		
	

		</div>
	</div>
</div>