<?php
/*
Template Name: キッズカット -
*/
?>
<?php get_header();?>


<main id="kids">

	<article class="campaign-main" style="background-image:url(<?php echo get_template_directory_uri()?>/images/10.jpg)">
		<div class="campaign-main__inner">
			<header class="campaign-main__header">
				<h2 class="campaign-main__title">About Kids Cut</h2>
				<span class="campaign-main__sub">Lani hair resortのキッズカットについて</span>
			</header>
			<section class="campaign-main-item">
				<?php the_content() ?>
			</section>
		</div>
		<div class="campaign-main__overlay"></div>
	</article>

	<article class="kids">
		<div class="kids__inner">


			<section class="kids-item col-sm-40 col-xs-120" v-for="kid in kids">
				<div class="kids-item__inner">
					<figure class="kids-item__image" v-if="getThumbUrl(kid)">
						<img :src="getThumbUrl(kid)" :alt="kid.title.rendered">
					</figure>
					<h2 class="kids-item__title">{{kid.title.rendered}}</h2>
					<div class="kids-item__description" v-if="kid.content.rendered" v-html="kid.content.rendered"></div>
				</div>
			</section>


		</div>
	</article>

</main>

<script>
	var innerTarget = location.href.split('#')[1];
</script>

<?php get_footer();?>
