<?php
/*
Template Name: スタイル -
*/
?>
<?php get_header();?>

<header class="header">
	<div class="header__inner  header__sub">
		<div class="header__logo">
			<img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png">
		</div>
		<div class="header__catch">
			<p>
				Gallery
			</p>
		</div>
		<div class="header__bg"></div>
	</div>
	<?php get_template_part( 'parts', 'glovalnav' ) ?>
</header>

<main id="styles">

	<article class="style">
		<div class="style__inner">

			<section class="style-item col-lg-15 col-md-20 col-sm-40 col-xs-60" v-for="style in styles">
				<figure class="style-item__image">
					<img :src="getThumbUrl(style)">
				</figure>
				<div class="style-item__overlay">
					<div class="style-item__overlay_inner">
						<span class="style-item__stylist">stylist : {{style.acf.style_staff.post_title}}</span>
						<h3 class="style-item__stylename">{{style.title.rendered}}</h3>
					</div>
				</div>
			</section>

		</div>
	</article>

</main>

<?php get_footer();?>
