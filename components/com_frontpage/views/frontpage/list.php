<!--Main Slider-->
<section class="main-slider">
	<div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
		<div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
			<ul>
				<?php foreach ($slides as $slide): ?>

					<li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-<?php echo $slide->getId(); ?>" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="<?php echo $siteURL; ?>images/slides/<?php echo $slide->getPhoto(); ?>" data-title="Slide Title" data-transition="parallaxvertical">

						<div class="tp-caption frank"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text"
							data-height="['700','700','700','700']"
							data-width="['400','400','400','400']"
							data-whitespace="normal"
							data-hoffset="['15','15','15','15']"
							data-voffset="['60','60','60','60']"
							data-x="['middle','middle','middle','middle']"
							data-y="['middle','middle','middle','middle']"
							data-textalign="['top','top','top','top']"
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<img src="images/frank.png" alt="Frank">
						</div>

						<div class="tp-caption textbox"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text"
							data-height="none"
							data-width="['360','360','360','360']"
							data-whitespace="normal"
							data-hoffset="['15','15','15','15']"
							data-voffset="['60','-60','-70','-50']"
							data-x="['left','left','left','left']"
							data-y="['middle','middle','middle','middle']"
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<span class="name"><strong>Frank</strong>vito</span>
							<span class="title"><small>UHNWI</small><br>Investment Advisor</span>
							<p>Providing Tailored Solution for Every Client, All Under One Roof.</p>
							<a href="" class="btn-gradian">Contact Us</a>
						</div>

						<div class="tp-caption signature"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingtop="[0,0,0,0]"
							data-responsive_offset="on"
							data-type="text"
							data-height="none"
							data-width="['250','250','250','250']"
							data-whitespace="normal"
							data-hoffset="['360','15','15','15']"
							data-voffset="['50','30','20','15']"
							data-x="['middle','middle','middle','middle']"
							data-y="['middle','middle','middle','middle']"
							data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
							<img src="<?php echo $siteURL; ?>images/footer-logo.png" alt="Frank">
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="numbers">
		<ul>
			<li>Award-Winning Strategies</li>
			<li>1,000+ Successful Campaigns Delivered</li>
			<li>98% Client Satisfaction Rate</li>
		</ul>
	</div>
</section>
<!-- End Main Slider -->

<!-- Services Section -->
<section class="service-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="sub-title">Frank <span>vito</span></p>
				<h1 class="big-title">Exclusive Investment Opportunities</h1>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-3">
				<div class="item-service">
					<div class="icon-box"><img src="images/star.png" alt="star"></div>
					<h3>Commercial real estate</h3>
					<p>Bienvenue dans le portefeuille de Frank Vito, où vous pouvez acheter la meilleure propriété commerciale à vendre à Dubaï. Que vous recherchiez un investissement rentable ou l'emplacement idéal pour votre</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item-service">
					<div class="icon-box"><img src="images/star.png" alt="star"></div>
					<h3>Passive Investing</h3>
					<p>Investissez dans un portefeuille diversifié avec des rendements garantis : package combiné de financement du commerce, de crypto et d'immobilier.</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item-service">
					<div class="icon-box"><img src="images/star.png" alt="star"></div>
					<h3>property flipping</h3>
					<p>Frank Vito et son équipe mettront à profit leur expertise inégalée et leurs années d'expérience pour vous aider à investir, rénover et revendre des propriétés à Dubaï de manière rapide et rentable.</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="item-service">
					<div class="icon-box"><img src="images/star.png" alt="star"></div>
					<h3>luxury homes</h3>
					<p>Explorez l'immobilier résidentiel avec les propriétés du marché secondaire les plus prestigieuses de Dubaï. L'opulence incarnée, Dubaï est la propriété idéale pour ceux qui recherchent le luxe. Le marché immobilier</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Services Section -->

<section class="invest-section opportunity py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="imgbox">
					<img src="images/invest.jpg" alt="">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="textbox">
					<p class="sub-title">Frank <span>vito</span></p>
					<h3>Dubai real estate investment opportunities</h3>
					<p>Property investment in the UAE offers a wide range of opportunities for property investors looking to diversify their portfolios. Whether you are considering investment property in Dubai or other emirates, there are plenty of options available to suit your needs. With the guidance of a reputable property investment company based in Dubai, you can make informed decisions to maximize your returns.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="maximiz-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 offset-1">
				<h2 class="xxl-title">Maximize Goal</h2>
				<p>
					<strong>Driven by a clear goal : Maximizing returns on your Investment.</strong><br>
					Frank Vito comprend les nuances du marché immobilier de Dubaï et propose des solutions sur mesure quelle que soit votre expérience en investissement.
				</p>
				<a href="<?php echo $contactPage->getLink(); ?>" class="btn-gradian">find out more</a>
			</div>
		</div>
	</div>
</section>

<section class="why-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<div class="imgbox">
					<img src="<?php echo $siteURL; ?>images/pages/<?php echo $whyFrank->getPhoto(); ?>" alt="<?php echo $whyFrank->getTitre(); ?>">
				</div>
			</div>
			<div class="col-sm-5">
				<div class="textbox">
					<h4><?php echo $whyFrank->getTitre(); ?></h4>
					<?php echo $whyFrank->getTexte(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="invest-section book-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 column-text">
				<div class="textbox">
					<p class="sub-title">Frank <span>vito</span></p>
					<h3>Book a 1-1 <br>consultation</h3>
					<p>Get a personalized expert advice and guidance tailored to your unique needs.</p>
					<a href="<?php echo $contactPage->getLink(); ?>" class="btn-gradian">Book now</a>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="imgbox">
					<img src="images/consultation.jpeg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="management-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>The Perfect Place to Manage Your Property</h3>
				<p>Work with the best suite of property management tools on the market.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-5 offset-1">
				<div class="item-management">
					<h4>Advertise Your Rental</h4>
					<p>Connect with more than 75 million renters looking for new homes using our comprehensive marketing platform. List Your Property.</p>
					<a href="#" class="btn-gradian">Find out more</a>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="item-management">
					<h4>Advertise Your Rental</h4>
					<p>Connect with more than 75 million renters looking for new homes using our comprehensive marketing platform. List Your Property.</p>
					<a href="#" class="btn-gradian">Find out more</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="invest-guide-section py-5">
	<div class="container mb-5">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="xxl-title">Investing Guides</h2>
				<p>Our articles, guides, and videos help you through the process, start to finish.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid pt-4 g-0">
		<div class="row item-guide g-0">
			<div class="col-sm-6">
				<div class="textbox">
					<h3>Top 10 Villa Contracting Companies in Dubai</h3>
					<p>Dubai, often referred to as the “City of Dreams,” is popular for its luxurious lifestyle, innovation, and architectural marvels. Somewhere…</p>
					<span class="date">May 31, 2024</span>
					<a href="#0" class="btn-more"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="imgbox">
					<img src="images/guide1.jpg" alt="">
				</div>
			</div>
		</div>

		<div class="row item-guide g-0">
			<div class="col-sm-6">
				<div class="textbox">
					<h3>A Comprehensive Guide to the Top 5 Schools in Business Bay</h3>
					<p>Business Bay, Dubai's thriving commercial and residential hub, has become a magnet for professionals, entrepreneurs, and families seeking a dynamic…</p>
					<span class="date">May 31, 2024</span>
					<a href="#0" class="btn-more"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="imgbox">
					<img src="images/guide2.jpg" alt="">
				</div>
			</div>
		</div>

		<div class="row item-guide g-0">
			<div class="col-sm-6">
				<div class="textbox">
					<h3>The Top 10 Bars in Downtown Dubai</h3>
					<p>Dubai, often referred to as the City of Gold, is renowned for its stunning skyline, extravagant lifestyle, and boundless opportunities.…</p>
					<span class="date">May 31, 2024</span>
					<a href="#0" class="btn-more"><i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="imgbox">
					<img src="images/guide3.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5 pt-5">
		<a href="#" class="btn-gradian">Find more articles</a>
	</div>
</section>

<section class="video-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="video-box">
					<img src="images/video-cover.jpg" alt="cover">
					<a href="#0" class="btn-play"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- testimonial section -->
<section class="testimonial-section py-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-12">
				<p class="sub-title">testimonials</p>
				<h2 class="big-title">What Our Clients Say</h2>
				<p>Our articles, guides, and videos help you through the process, start to finish.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="item-testimonial">
					<div class="top">
						<i class="fa fa-quote-left"></i>
						<span class="rating"><i class="fa fa-star"></i> (4.8/5)</span>
					</div>
					<div class="textbox">
						<p>"Working with Frank Vito has been an exceptional experience. His in-depth knowledge, meticulous attention to detail, and personalized approach have significantly impacted my financial success. Frank's strategic insights and unwavering support have been invaluable. I highly recommend his services to anyone seeking expert financial advice. Thank you, Frank, for your commitment and outstanding expertise!"</p>
					</div>
					<div class="bottom">
						<div class="name">Anna</div>
						<div class="avatar">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="item-testimonial">
					<div class="top">
						<i class="fa fa-quote-left"></i>
						<span class="rating"><i class="fa fa-star"></i> (4.8/5)</span>
					</div>
					<div class="textbox">
						<p>"Working with Frank Vito has been an exceptional experience. His in-depth knowledge, meticulous attention to detail, and personalized approach have significantly impacted my financial success. Frank's strategic insights and unwavering support have been invaluable. I highly recommend his services to anyone seeking expert financial advice. Thank you, Frank, for your commitment and outstanding expertise!"</p>
					</div>
					<div class="bottom">
						<div class="name">Anna</div>
						<div class="avatar">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End testimonial section -->

<!-- testimonial section -->
<section class="newsletter-section py-5 mt-4">
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-8 offset-2">
				<p class="sub-title">Frank<span>vito</span></p>
				<h2 class="big-title">Be The First to Know About New Project Launches in Dubai</h2>

				<div class="formbox">
					<form>
						<input type="email" name="email" placeholder="type your mail to receive the newsleter">
						<button type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>