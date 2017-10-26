<?php
/*
Template Name: 会社概要 -
*/
?>
<?php get_header();?>


<main id="information">
	<section class="information">
		<div class="information__overlay"></div>
		<div class="information__inner table__normal">
			<h2 class="information__title">lani hair resort</h2>
			<?php //echo do_shortcode( '[table id=74 /]' ) ?>
			<?php echo do_shortcode( '[table id=84 /]' ) ?>
		</div>
	</section>
	<section class="madori">
		<div class="madori__inner">
			<h2 class="madori__title">madori</h2>
			<div class="madori__pins pins">
				<div class="pins__wrap">
					<img src="<?php echo get_template_directory_uri() ?>/images/madori.png" alt="lani hair resortの間取り図">
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0561.jpg')" class="pins__wating"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0500.jpg')" class="pins__cut"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0363.jpg')" class="pins__kids1"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0361.jpg')" class="pins__kids2"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0368.jpg')" class="pins__kids3"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0579.jpg')" class="pins__counter"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0518.jpg')" class="pins__color"></div>
					<div @click="modalOn('<?php echo get_template_directory_uri() ?>/images/pins/re-dsc_0389.jpg')" class="pins__private"></div>
				</div>
				<div class="pins__modal">
					<div class="pins__modal_inner">
						<img src="<?php echo get_template_directory_uri() ?>/images/madori.png" class="pins__modal_image">
						<span class="pins__modal_close" @click="modalOn()"></span>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer();?>
