<?php
/*
Template Name: スタイル -
*/
?>
<?php get_header();?>


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
