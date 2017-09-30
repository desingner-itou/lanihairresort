<?php
/*
Template Name: リニューアルオープン -
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
				Renewal
			</p>
		</div>
		<div class="header__bg"></div>
	</div>
	<?php get_template_part( 'parts', 'glovalnav' ) ?>
</header>

<main>
	<div class="renewal" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/4.JPG);">
		<div class="renewal__inner">
			<div class="col-xs-120">
				<div class="renewal__date">2017.09.02 Sat.</div>
				<h2 class="renewal__main">
					LANI HAIR RESORT<br>
					RENEWAL OPEN!!
				</h2>
				<div class="renewal__description">
					<p>四ツ橋駅6番出口 徒歩5分</p>
					<p>Lani hair resortがリニューアルオープン</p>
				</div>
			</div>
		</div>
		<div class="renewal__overlay"></div>
	</div>

	<div id="map2"></div>

	<div class="renewalinfo">
		<div class="renewalinfo__inner">
				<div class="col-sm-60 col-xs-120 renewalinfo__left">
					<figure class="renewalinfo__image">
						<img src="<?php echo get_template_directory_uri() ?>/images/3.JPG">
					</figure>
				</div>
				<div class="col-sm-60 col-xs-120 renewalinfo__right">
					<div class="renewalinfo__header">
						<h3 class="renewalinfo__title">
							Lani hair resort<br>
							RENEWAL OPEN
						</h3>
						<span class="renewalinfo__sub">移転リニューアルオープン</span>
					</div>
					<div class="renewalinfo__description">
						<p>四ツ橋駅6番出口徒歩5分、Lani hair resortが移転してリニューアルオープン！</p>
						<p>Hawaii好きにはたまらない!!大人気サロン-Lani hair resort-がますますオシャレになってリニューアル☆日頃の喧騒を忘れ、<br>
							ゆったり時間を過ごせる寛ぎの空間は満足度◎トレンドをキャッチした似合わせStyleが得意♪</p>
					</div>
				</div>
		</div>
	</div>

	<div class="renewal" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/2.JPG);">
		<div class="renewal__inner"><div class="renewal__date">new lani hair was born...</div></div>
		<div class="renewal__overlay"></div>
	</div>

</main>

<?php get_footer();?>
