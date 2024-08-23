<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url('<?php echo $siteURL.$banner; ?>')">
	<div class="auto-container">
		<h1><?php echo $categorie->getTitre(); ?></h1>
		<ul class="page-breadcrumb">
			<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
			<li><a href="<?php echo $page->getLink(); ?>"><?php echo $page->getTitre(); ?></a></li>
			<li><?php echo $categorie->getTitre(); ?></li>
		</ul>
	</div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix">
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

			<!--Content Side-->
			<div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 ">
				<!---->
				
				<!--Shop Single-->
			   <div class="shop-section">
				
				   <?php
 					 $cat =categorie::findParentG($categorie->getId());
                     if (!empty($cat)) { 

                     foreach ($cat as $categorie){
						 ?>

						 <!--Services Block-->
				   <div class="services-block col-lg-4 col-md-6 col-sm-6 col-xs-12  " >
                	  <div class="inner-box">
                    	  <div class="image Divimg">
                        	  <a href="<?php echo $categorie->getLink(); ?>"><img class="img1" src="<?php echo $siteURL; ?>images/categories/<?php echo $categorie->getPhoto(); ?>" alt="<?php echo $categorie->getTitre(); ?>"  /></a>
                              <div class="category"><?php echo $categorie->getTitre(); ?></div>
                          </div>
                          <div class="lower-content">
                        	<div class="upper-box">
                            	<div class="text"><?php echo $categorie->getTitre(); ?>.</div>
                            </div>
                            <div class="lower-box">
                            	<a href="<?php echo $categorie->getLink(); ?>" class="read-more">Découvrir</a>
                            </div>
                          </div>
                      </div>
                  </div>
					
					
				  <?php
						}
						}
						if($produits){
					?>
				   
					<div class="clearfix"></div>
					<!--Sort By-->
					<!--<div class="items-sorting ">
						<div class="row ">
							<div class="results-column col-md-6 col-sm-6 col-xs-12">
								<h4>Affichage des résultats <?php echo $currentPage; ?>-9 sur <?php sizeof($allProduct); ?></h4>
							</div>
							<div class="select-column pull-right col-md-4 col-sm-4 col-xs-12">
								<div class="form-group">
									<select name="sort-by">
										<option>Default Sorting</option>
										<option>By Order</option>
										<option>By Price</option>
									</select>
								</div>
							</div>
						</div>
					</div>-->

					<div class="row ">
						<?php foreach ($produits as $produit): ?>
						<!--Shop Item-->
						<div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="inner-box">
								<div class="image-box">
									<div class="image">
										<img src="<?php echo $siteURL; ?>images/produit/<?php echo $produit->getPhoto(); ?>" alt="<?php echo $produit->getTitre(); ?>" />
										<div class="overlay-box">
											<ul class="cart-option">
												<li><a href="<?php echo $produit->getLink(); ?>"><span class="fa fa-eye"></span></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="lower-content">
									<div class="price-box">
										<h3><a href="<?php echo $produit->getLink(); ?>"><?php echo $produit->getTitre(); ?></a></h3>
										<!--<div class="price"><?php echo $produit->getPrix(); ?> Dhs</div>-->
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>

					<!--Styled Pagination--
					<ul class="styled-pagination text-center">
						<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>                
					<!--End Styled Pagination-->
					<?php };?>

				</div>
			</div>

			<!--Sidebar Side-->
			<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<aside class="sidebar default-sidebar with-border">

					<!-- Search -->
					<div class="sidebar-widget search-box style-two">
						<form method="post" action="contact.html">
							<div class="form-group">
								<input type="search" name="search-field" value="" placeholder="Search..." required>
								<button type="submit"><span class="icon fa fa-search"></span></button>
							</div>
						</form>
					</div>

					<!--Blog Category Widget-->
					<div class="sidebar-widget sidebar-blog-category">
						<div class="sidebar-title style-two">
							<h2>Catégories</h2>
						</div>
						<ul class="blog-cat-three">
							<?php foreach ($categories as $categorie): ?>
							<li><a href="<?php echo $categorie->getLink(); ?>"><?php echo $categorie->getTitre(); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>

					

					<!-- Top Related Posts -->
					<div class="sidebar-widget related-posts">
						<div class="sidebar-title style-two">
							<h2>Ajouté récemment</h2>
						</div>
						<?php 
						 $produits = produit::findAll($_SESSION["lang"],false,false,true);
						 foreach ($produits as $produit) :		
						?>
						<div class="post border-1">
							<figure class="post-thumb"><a href="<?php echo $produit->getLink(); ?>"><img src="<?php echo $siteURL; ?>images/produit/<?php echo $produit->getPhoto(); ?>" alt="<?php echo $produit->getTitre(); ?>"  ></a></figure>
							<h4><a href="<?php echo $produit->getLink(); ?>"><?php echo $produit->getTitre()?></a></h4>
							<!--<div class="price"><?php echo $produit->getPrix()?>Dhs</div>
							
							<div class="rating"></div>-->
						</div>
						<?php endforeach ;?>
						
					</div>

					
					

				</aside>
			</div>

		</div>
	</div>
</div>