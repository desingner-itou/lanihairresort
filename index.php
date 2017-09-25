<?php
/*
Template Name: トップページ -
*/
?>
<?php get_header();?>

<main id="home">
	
<header class="header">
	<div class="header__logo">
		<img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png">
	</div>
	<div class="haeder__bg"></div>
</header>

<article class="intro">
	<div class="intro__image_left">
		<img src="<?php echo get_template_directory_uri() ?>/images/top-con-1-img-1.png" alt="ラニヘアリゾートのヘッドスパブース写真">
	</div>
	<div class="intro__image_right">
		<img src="<?php echo get_template_directory_uri() ?>/images/top-con-1-img-2.png" alt="ラニヘアリゾートのヘッドスパブース写真">
	</div>
	<div class="intro__description">
		<?php the_content() ?>
		<span class="intro__more">more read</span>
	</div>
</article>

<section class="info">
	<div class="info__imagewrap">
		<img src="<?php echo get_template_directory_uri() ?>/images/top-bn-renew.png" alt="2017.9.2(Sat) 移転リニューアルOPEN">
	</div>
</section>

<article class="news">
	<header class="news__header">
		<h2 class="news__title">
			<img src="<?php echo get_template_directory_uri() ?>/images/top-ttl-ournews.png" alt="OUR NEWS　お知らせ">
		</h2>
	</header>

	<section class="news-items">
		<time class="news-items__date">2017.01.01</time>
		<div class="news-items__description">
			<p>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
		</div>
	</section>

	<section class="news-items">
		<time class="news-items__date">2017.01.01</time>
		<div class="news-items__description">
			<p>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
		</div>
	</section>

	<section class="news-items">
		<time class="news-items__date">2017.01.01</time>
		<div class="news-items__description">
			<p>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
		</div>
	</section>

	<section class="news-items">
		<time class="news-items__date">2017.01.01</time>
		<div class="news-items__description">
			<p>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</p>
		</div>
	</section>
</article>

<article class="menu-banners">
	<div class="menu-banners__inner">

		<div class="col-sm-30 col-xs-120">
			<section class="menu-banners__item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-1.png)">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Campaign</h2>
					<span class="menu-banners__item__sub">キャンペーン</span>
				</div>
				<span class="menu-banners__item__allow"></span>
			</section>
		</div>

		<div class="col-sm-30 col-xs-120">
			<section class="menu-banners__item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-2.png)">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Concept</h2>
					<span class="menu-banners__item__sub">コンセプト</span>
				</div>
				<span class="menu-banners__item__allow"></span>
			</section>
		</div>

		<div class="col-sm-30 col-xs-120">
			<section class="menu-banners__item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-3.png)">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Menu</h2>
					<span class="menu-banners__item__sub">メニュー</span>
				</div>
				<span class="menu-banners__item__allow"></span>
			</section>
		</div>

		<div class="col-sm-30 col-xs-120">
			<section class="menu-banners__item" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/top_imgbn-4.png)">
				<div class="menu-banners__item__header">
					<h2 class="menu-banners__item__title">Salon Info</h2>
					<span class="menu-banners__item__sub">サロン案内</span>
				</div>
				<span class="menu-banners__item__allow"></span>
			</section>
		</div>

	</div>
</article>


<aside class="banners">
	<div class="banners__inner">

		<div class="col-sm-40 col-xs-120">
			<a href="" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-1.png" alt="ホットペッパービューティーでサロン予約">
			</a>
		</div>

		<div class="col-sm-40 col-xs-120">
			<a href="" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-2.png" alt="オンラインサロン予約はこちら">
			</a>
		</div>

		<div class="col-sm-40 col-xs-120">
			<a href="" target="_blank">
				<img src="<?php echo get_template_directory_uri() ?>/images/bn-3.png" alt="お買い物はこちら">
			</a>
		</div>

	</div>
</aside>

</main>

<?php get_footer();?>


