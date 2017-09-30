<?php
/*
Template Name: トップページ -
*/
?>
<?php get_header();?>

<main id="home">
	
<header class="header">
	<div class="header__inner">
		<div class="header__logo">
			<img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png">
		</div>
		<div class="header__catch">
			<p>
				“Lani”とはハワイ語で天国・楽園・・・<br>
				五感で感じる癒し空間と心のこもった接客で至福の時間をお過ごしください。
			</p>
		</div>
		<div class="header__bg"></div>
	</div>
	<?php get_template_part( 'parts', 'glovalnav' ) ?>
</header>



<article class="intro parallax intro__layout_left" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/bg-1.png)">
	<div class="intro__inner parallax__inner">
		<div class="intro__image_left parallax__layer" data-layer="0">
			<img src="<?php echo get_template_directory_uri() ?>/images/top-con-1-img-1.png" alt="ラニヘアリゾートのヘッドスパブース写真">
		</div>
		<div class="intro__image_right parallax__layer" data-layer="1">
			<img src="<?php echo get_template_directory_uri() ?>/images/top-con-1-img-2.png" alt="ラニヘアリゾートのヘッドスパブース写真">
		</div>
		<div class="intro__description parallax__layer" data-layer="2">
			<?php the_content() ?>
			<a href="<?php echo home_url('/') ?>/concept" class="intro__allow_link">
				<span class="intro__allow_more">Read more</span>
				<span class="intro__allow"></span>
			</a>
		</div>
	</div>
</article>

<section class="info">
	<div class="info__imagewrap">
		<a href="<?php echo home_url('/') ?>renewal">
			<img src="<?php echo get_template_directory_uri() ?>/images/top-bn-renew.png" alt="2017.9.2(Sat) 移転リニューアルOPEN">
		</a>
	</div>
</section>

<article class="news">
	<header class="news__header">
		<h2 class="news__title">
			<img src="<?php echo get_template_directory_uri() ?>/images/top-ttl-ournews.png" alt="OUR NEWS　お知らせ">
		</h2>
	</header>

	<section class="news-items">
		<div class="news-items__date"><time>2017.09.01</time></div>
		<div class="news-items__description">
			<p>
				Lani hair resort（ラニ ヘアリゾート）は北堀江から南堀江に移転いたしました。<br>
				これを機に、社員一同気持ちを新たにし、皆様の信頼にお応えできるようさらなる努力をしてまいります。<br>
				今後とも何卒よろしくお願い申し上げます。</p>
		</div>
	</section>
</article>

<article class="menu-banners">
	<div class="menu-banners__inner">

		<div class="col-sm-30 col-xs-60">
			<section class="menu-banners__item">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Campaign</h2>
					<span class="menu-banners__item__sub">キャンペーン</span>
				</div>
				<span class="menu-banners__item__allow"></span>
				<div class="menu-banners__item__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-1.png)">
					<a href="<?php home_url('/') ?>campaign" class="menu-banners__item__link"></a>
				</div>
			</section>
		</div>

		<div class="col-sm-30 col-xs-60">
			<section class="menu-banners__item">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Concept</h2>
					<span class="menu-banners__item__sub">コンセプト</span>
				</div>
				<span class="menu-banners__item__allow"></span>
				<div class="menu-banners__item__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-2.png)">
					<a href="<?php home_url('/') ?>concept" class="menu-banners__item__link"></a>
				</div>
			</section>
		</div>

		<div class="col-sm-30 col-xs-60">
			<section class="menu-banners__item">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Menu</h2>
					<span class="menu-banners__item__sub">メニュー</span>
				</div>
				<span class="menu-banners__item__allow"></span>
				<div class="menu-banners__item__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-3.png)">>
					<a href="<?php home_url('/') ?>menu" class="menu-banners__item__link"></a>
				</div>
			</section>
		</div>

		<div class="col-sm-30 col-xs-60">
			<section class="menu-banners__item">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Salon Info</h2>
					<span class="menu-banners__item__sub">サロン案内</span>
				</div>
				<span class="menu-banners__item__allow"></span>
				<div class="menu-banners__item__bg" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-4.png)">
					<a href="<?php home_url('/') ?>saloninfo" class="menu-banners__item__link"></a>
				</div>
			</section>
		</div>

	</div>
</article>


<aside class="banners">
	<div class="banners__inner">

		<div class="col-sm-40 col-xs-120">
			<a href="https://beauty.hotpepper.jp/CSP/bt/reserve/?storeId=H000218211" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-1.png" alt="ホットペッパービューティーでサロン予約">
			</a>
		</div>

		<div class="col-sm-40 col-xs-120">
			<a href="http://lani.pos-s.net/hp/m/yoyaku/yoyaku_s.php?flow=2&clear=1&shop_cd=1" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-2.png" alt="オンラインサロン予約はこちら">
			</a>
		</div>

		<div class="col-sm-40 col-xs-120">
			<a href="https://fo-fo.jp/lani/" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-3.png" alt="お買い物はこちら">
			</a>
		</div>

	</div>
</aside>

</main>

<?php get_footer();?>


