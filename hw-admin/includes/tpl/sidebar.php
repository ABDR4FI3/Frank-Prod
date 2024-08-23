<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li class="menu-title"><span>Main</span></li>
				  <?php
				  $modules = module::findAllPosition("side");
				  foreach ($modules as $module) {
					  $active = isset($_GET['option']) && $_GET['option'] == $module->getIdModule() ? "active" : "";
					  if ($_SESSION['user']->hasDroit('view', $module->getIdModule())) { ?>

				<li class="<?php echo $active; ?>">
					<a href="index.php?option=<?= $module->getIdModule(); ?>"><i class="fa fa-<?= $module->getIcon(); ?>"></i> <span><?= $module->getNom(); ?></span></a>
				</li>
				<?php
					  }
				  }
				?>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->
