<?php $banner = $page->getPhoto() == "" ? "images/banner.jpg" : "images/pages/".$page->getPhoto(); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url('<?php echo $siteURL.$banner; ?>')">
         <div class="auto-container">
        	<h1><?php echo $produit->getTitre() ?></h1>
            <ul class="page-breadcrumb">
            	<li><a href="<?php echo $siteURL; ?>"><?php echo $lang["ACCUEIL"][$_SESSION['lang']]; ?></a></li>
                <li><a href="<?php echo $categorie->getLink(); ?>"><?php echo $categorie->getTitre() ?></a></li>
				<li><?php echo $produit->getTitre();?></li>

            </ul>
        </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				  <!--Content Side-->
				  <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                	<!--Shop Single-->
                    <div class="shop-single">
                        <div class="product-details">

								 <!--Basic Details-->
								 <div class="basic-details">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <figure class="image-box"><a href="<?php echo $siteURL; ?>images/produit/<?php echo $produit->getPhoto(); ?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $siteURL; ?>images/produit/<?php echo $produit->getPhoto(); ?>" alt=""></a></figure>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="details-header">
                                            <h4><?php echo $produit->getTitre()?></h4>
                                            <!--<div class="item-price"><?php echo $produit->getPrix()?>Dhs</div>-->
                                        </div>

                                        <div class="text">
                                            <?php echo $produit->getDescription() ?>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <!--Basic Details-->

							
					
						</div>
                	</div>
                </div>

				 <!--Sidebar Side-->
				 <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar with-border">
						
                        <!-- Search -->
                        <!--<div class="sidebar-widget search-box style-two">
                        	<form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>-->
						
                        <!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title style-two">
                                <h2>Categories</h2>
                            </div>
                            <ul class="blog-cat-three">
							<?php foreach ($categories as $categorie): ?>
							<li><a href="<?php echo $categorie->getLink(); ?>"><?php echo $categorie->getTitre(); ?></a></li>
							<?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <!-- Price Filters -->
                        <!-- <div class="sidebar-widget price-filters rangeslider-widget">
                        	<div class="sidebar-title style-two">
                                <h2>Filter By Price</h2>
                            </div>
                            <div class="range-slider-one clearfix">
                                <div class="price-range-slider"></div>
                                <div class="clearfix">
                                	<div class="pull-left">
                                    	<a href="#" class="theme-btn btn-style-one">Filtter</a>
                                    </div>
                                    <div class="pull-right">
										<div class="title">Price:</div>
                                        <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
									</div>
                                </div>
                            </div>
                        </div> -->
                        
                        <!-- Top Related Posts -->
                        
                        
                        <!-- Popular Tags -->
                        <!-- <div class="sidebar-widget popular-tags style-two">
                            <div class="sidebar-title style-two"><h2>Tag Cloud</h2></div>
                            <a href="#">Idea</a>
                            <a href="#">Finance</a>
                            <a href="#">Experts</a>
                            <a href="#">Marketing</a>
                            <a href="#">Services</a>
                            <a href="#">Tips</a>
                            <a href="#">Growth</a>
                            <a href="#">Wealth</a>
                        </div> -->
                        
                    </aside>
                </div>

			
					
		</div>
	</div>
</div>
<!--End Sidebar Page Container-->