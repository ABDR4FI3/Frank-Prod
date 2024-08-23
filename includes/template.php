<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<?php
	$config = new config($db, $_SESSION['lang']);
	$title = $config->getTitre();
	$description = $config->getDescription();
	$shareImage = $siteURL . 'images/config/' .  $config->getLogo();
	$canonical = $siteURL;

	// Seo
	$option = isset($_GET['option']) ? $_GET['option'] : 'com_frontpage';
	$urls = module::findAllUrl();
	//array_push($urls, "com_contact");
	foreach ($urls as $url) {
		$class = substr($url->getIdModule(), 4, strlen($url->getIdModule()));
		if ($option == $url->getIdModule()) {
			if ($option == "com_page") {
				if (isset($_GET['id']) && !empty($_GET['id'])) {
					$id = intval($_GET['id']);
					if (method_exists($class, "find")) {
						$p = $class::find($id, $_SESSION["lang"]);
					} else {
						$p = new $class($id, $db, $_SESSION['lang']);
					}
					$title = $p->getSeoTitre();
					$description = substr($p->getSeoDescription(), 0, 200);
					break;
				}
			} else {
				if (isset($_GET['id']) && !empty($_GET['id'])) {
					if (isset($_GET['task']) && $_GET['task'] == 'showDetails') {
						$id = intval($_GET['id']);
						if (method_exists($class, "find")) {
							$p = $class::find($id, $_SESSION["lang"]);
						} else {
							$p = new $class($id, $db, $_SESSION['lang']);
						}
						$title = (method_exists($class, "getSeoTitre")) ? $p->getSeoTitre() : "";
						$description = (method_exists($class, "getSeoDescription")) ? substr($p->getSeoDescription(), 0, 200) : "";
						//$shareImage = $siteURL . 'images/produits/' . $p->getPhoto();
						$canonical = $p->getLink();
						break;
					} else if (!isset($_GET['task'])) {
						$id = intval($_GET['id']);
						$p = new page($id, $db, $_SESSION["lang"]);
						if (!is_null($p)) {
							$title = $p->getSeoTitre();
							$description = $p->getSeoDescription() ?? '';
							//* Use an empty string if getSeoDescription() returns null
							$description = substr($description, 0, 200);
							break;
						}
					} else {
						$task = $_GET["task"];
						$p = getComponent($option . "&task=" . $task);
						if (!is_null($p)) {
							$title = $p->getSeoTitre();
							$description = substr($p->getSeoDescription(), 0, 200);
							break;
						}
					}
				} else {
					$p = getComponent($option);
					if (!is_null($p)) {
						$title = $p->getSeoTitre();
						$description = substr($p->getSeoDescription(), 0, 200);
						break;
					}
				}
			}
		}
	}

	if ($title == "") {
		$title = $config->getTitre();
	}
	if ($description == "") {
		$description = $config->getDescription();
	}
	?>
	<title><?= $title; ?></title>
	<!-- Stylesheets -->
	<link href="<?php echo $siteURL; ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $siteURL; ?>plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
	<link href="<?php echo $siteURL; ?>plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
	<link href="<?php echo $siteURL; ?>plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
	<link href="<?php echo $siteURL; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo $siteURL; ?>css/responsive.css" rel="stylesheet">

	<!--Color Themes-->
	<link id="theme-color-file" href="<?php echo $siteURL; ?>css/color-themes/default-theme.css" rel="stylesheet">

	<link rel="shortcut icon" href="<?php echo $siteURL; ?>images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo $siteURL; ?>images/favicon.png" type="image/x-icon">
	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

		<!-- Main Header / Header Style Two-->
		<header class="main-header header-style-two">

			<!-- Main Box -->
			<div class="main-box">
				<div class="container">
					<div class="outer-container clearfix">
						<!--Logo Box-->
						<div class="logo-box">
							<div class="logo"><a href="<?php echo $siteURL; ?>"><img src="<?php echo $siteURL; ?>images/footer-logo.png" alt="<?php echo $config->getNom(); ?>"></a></div>
						</div>

						<!--Nav Outer-->
						<div class="nav-outer clearfix">

							<!-- Main Menu -->
							<nav class="main-menu">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix">
									<ul class="navigation clearfix">
										<?php
										$menuTop = menu::find(1);
										$menuTop->getMenu($_SESSION['lang']);
										?>
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->
						</div>
						<!--Nav Outer End-->

					</div>
				</div>
			</div>

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="container">

					<div class="outer-container clearfix">
						<!--Logo Box-->
						<div class="logo-box pull-left">
							<div class="logo"><a href="<?php echo $siteURL; ?>"><img src="<?php echo $siteURL; ?>images/footer-logo.png" alt="<?php echo $config->getNom(); ?>"></a></div>
						</div>

						<!--Nav Outer-->
						<div class="nav-outer clearfix">
							<!-- Main Menu -->
							<nav class="main-menu">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix">
									<ul class="navigation clearfix">
										<?php
										$menuTop = menu::find(1);
										$menuTop->getMenu($_SESSION['lang']);
										?>
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->

						</div>
						<!--Nav Outer End-->

					</div>

				</div>
			</div>
			<!--End Sticky Header-->

		</header>
		<!--End Main Header -->

		<?= $page_content; ?>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="footer-logo">
							<img src="images/footer-logo.png" alt="">
						</div>
						<h5>Contact</h5>
						<ul class="contact-info">
							<li><?php echo $config->getTel(); ?></li>
							<li><?php echo $config->getEmail(); ?></li>
							<li><?php echo $config->getAdresse(); ?></li>
						</ul>
						<hr>
						<ul class="footer-menu">
							<?php
							$menuTop = menu::find(2);
							$menuTop->getMenu($_SESSION['lang']);
							?>
						</ul>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<!--End pagewrapper-->

	<script>
		var siteURL = '<?php echo $siteURL; ?>';
		var SUCCES_ENVOI = '<?= $lang['SUCCES_ENVOI'][$_SESSION['lang']]; ?>';
		var CHAMPS_OBLIG = '<?= $lang['CHAMPS_OBLIG'][$_SESSION['lang']]; ?>';
		var EMAIL_EXISTE = '<?= $lang['EMAIL_EXISTE'][$_SESSION['lang']]; ?>';
		var ERREUR_EXEC = '<?= $lang['ERREUR_EXEC'][$_SESSION['lang']]; ?>';

		var AJOUT_SELECTION = '<?= $lang['ENREGISTRER'][$_SESSION['lang']]; ?>';
		var SUPP_SELECTION = '<?= $lang['SUPP_SELECTION'][$_SESSION['lang']]; ?>';
		var SELECTION_VIDEE = '<?= $lang['SELECTION_VIDEE'][$_SESSION['lang']]; ?>';
		var ENVOI_SELECTION = '<?= $lang['ENVOI_SELECTION'][$_SESSION['lang']]; ?>';

		var BIEN_INDISPO = '<?= $lang['BIEN_INDISPO'][$_SESSION['lang']]; ?>';
		var TT_BIEN_CHARGE = '<?= $lang['TT_BIEN_CHARGE'][$_SESSION['lang']]; ?>';
		var PASS_INCORRECT = '<?= $lang['PASS_INCORRECT'][$_SESSION['lang']]; ?>';
		var SUCCESS_EXCLU = '<?= $lang['SUCCESS_EXCLU'][$_SESSION['lang']]; ?>';
	</script>

	<script src="<?php echo $siteURL; ?>js/jquery.js"></script>
	<!--Revolution Slider-->
	<script src="<?php echo $siteURL; ?>css/owl.carousel.min.css"></script>
	<script src="<?php echo $siteURL; ?>css/owl.theme.default.min.css"></script>


	<script src="<?php echo $siteURL; ?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="<?php echo $siteURL; ?>plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>



	<script src="<?php echo $siteURL; ?>js/owl.carousel.min.js"></script>

	
	<script src="<?php echo $siteURL; ?>js/main-slider-script.js"></script>

	<script src="<?php echo $siteURL; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $siteURL; ?>js/jquery.fancybox.js"></script>
	<script src="<?php echo $siteURL; ?>js/jquery-ui.js"></script>
	<script src="<?php echo $siteURL; ?>js/owl.js"></script>
	<script src="<?php echo $siteURL; ?>js/mixitup.js"></script>
	<script src="<?php echo $siteURL; ?>js/wow.js"></script>
	<script src="<?php echo $siteURL; ?>js/appear.js"></script>
	<script src="<?php echo $siteURL; ?>js/jquery.form.js"></script>


	<script src="<?php echo $siteURL; ?>js/script.js"></script>

</body>

</html>