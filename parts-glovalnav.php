
<div class="gnav">
	<div class="gnav__inner">
<!-- 		<a class="navbar-brand" href="<?php echo home_url() ?>">
			<img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png" alt="Grand Fusion Incのロゴマーク">
		</a> -->
		<nav class="navbar navbar-default" id="gloval">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
					<span class="sr-only">メニュー</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<?php
				wp_nav_menu(
					array(
						'menu' => 'global',
						'container_id' => 'gnavi',
						'container_class' => 'collapse navbar-collapse',
						'items_wrap'      => '<ul class="nav navbar-nav">%3$s</ul>',
						// 'echo' => false
					)
				);
			?>
			<div class="gnav__contact">
				<a href="http://lani.pos-s.net/hp/m/yoyaku/yoyaku_s.php?flow=2&clear=1&shop_cd=1" target="_blank">
					<img src="<?php echo get_template_directory_uri() ?>/images/nav_bn.png" alt="オンライン予約はこちら">
				</a>
			</div>
		
		</nav>
	</div>
</div>