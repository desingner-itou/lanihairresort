<?php
/*
Template Name: カラー -
*/
?>
<?php get_header();?>


<main id="color">

	<article class="campaign-main" style="background-image:url(<?php echo get_template_directory_uri()?>/images/colorinfo_bg.jpg)">
		<div class="campaign-main__inner">
			<header class="campaign-main__header">
				<h2 class="campaign-main__title">Color information</h2>
				<span class="campaign-main__sub">Lani hair resortのカラー剤について</span>
			</header>
			<section class="campaign-main-item">
				<?php the_content() ?>
			</section>
		</div>
		<div class="campaign-main__overlay"></div>
	</article>



	<article class="colors">
		<div class="colors__inner">
			<header class="colors__header">
				<h2 class="colors__title">Color agent</h2>
				<span class="colors__sub">取扱カラー剤</span>
			</header>

			<section class="colors-item colors-item__layout_left" v-for="color in colors">
				<div class="col-sm-60 col-xs-120 colors-item__left">
					<figure class="colors-item__image" v-if="color._embedded['wp:featuredmedia'][0].media_details">
						<img :src="getThumbUrl(color)">
					</figure>
				</div>
				<div class="col-sm-60 col-xs-120 colors-item__right">
					<h3 class="colors-item__title">{{color.title.rendered}}</h3>
					<span class="colors-item__sub" v-if="color.acf.other">{{color.acf.other}}</span>
					<div class="colors-item__description" v-if="color.content.rendered" v-html="color.content.rendered"></div>
					<a :href="color.acf.link" target="_blank" class="intro__allow_link" v-if="color.acf.link">
						<span class="intro__allow_more">Read more</span>
						<span class="intro__allow"></span>
					</a>
				</div>
			</section>
		</div>
	</article>

<script>
	var innerTarget = location.href.split('#')[1];
</script>

</main>

<?php get_footer();?>
