<?php
/*
Template Name: キャンペーン -
*/
?>
<?php get_header();?>



<main id="campaigns">

	<article class="campaign-main" style="background-image:url(<?php echo get_template_directory_uri()?>/images/2.JPG)">
		<div class="campaign-main__inner">

			<header class="campaign-main__header">
				<h2 class="campaign-main__title">Campaign</h2>
				<span class="campaign-main__sub">キャンペーン</span>
			</header>

			<section class="campaign-main-item">
				<?php the_content() ?>
			</section>

		</div>
		<div class="campaign-main__overlay"></div>
	</article>


	<article class="campaign-sub">
		<div class="campaign-sub__inner">

			<section class="campaign-sub-item col-sm-60 col-xs-120" v-for="campaign in campaigns">
				<div class="campaign-sub-item__inner">
					<figure class="campaign-sub-item__image col-sm-50 col-xs-120" v-if="getThumbUrl(campaign)">
						<img :src="getThumbUrl(campaign)">
					</figure>
					<div class="col-sm-70 col-xs-120">
						<h3 class="campaign-sub-item__title">{{campaign.title.rendered}}</h3>
						<div class="campaign-sub-item__description" v-if="campaign.content.rendered" v-html="campaign.content.rendered"></div>
						<div class="campaign-sub-item__price" v-if="campaign.acf.price_after">
							{{campaign.acf.price_before}}円 → 
							<span class="campaign-sub-item__price_main" v-if="campaign.acf.price_after">{{campaign.acf.price_after}}</span>（税抜き）
						</div>
						<div class="campaign-sub-item__small" v-if="campaign.acf.excerpt"><small>{{campaign.acf.excerpt}}</small></div>
					</div>
				</div>
			</section>


		</div>
		<div class="campaign-sub__overlay"></div>
	</article>

</main>

<?php get_footer();?>
