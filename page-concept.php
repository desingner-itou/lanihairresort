<?php
/*
Template Name: コンセプト -
*/
?>
<?php get_header();?>

<main id="home">

<article class="intro parallax intro__layout_left intro__sub">
	<section class="intro__inner parallax__inner">
		<div class="intro__image_left parallax__layer" data-layer="0">
			<img src="<?php the_field('concept1_img_left') ?>">
		</div>
		<div class="intro__image_right parallax__layer" data-layer="1">
			<img src="<?php the_field('concept1_img_right') ?>">
		</div>
		<div class="intro__description parallax__layer" data-layer="2">
			<?php the_field('concept1') ?>
		</div>
	</section>
</article>

<article class="intro parallax intro__layout_right intro__sub2">
	<section class="intro__inner parallax__inner">
		<div class="intro__image_left parallax__layer" data-layer="0">
			<img src="<?php the_field('concept2_img_left') ?>">
		</div>
		<div class="intro__image_right parallax__layer" data-layer="1">
			<img src="<?php the_field('concept2_img_right') ?>">
		</div>
		<div class="intro__description parallax__layer" data-layer="2">
			<?php the_field('concept2') ?>
		</div>
	</section>
</article>


</main>

<?php get_footer();?>


