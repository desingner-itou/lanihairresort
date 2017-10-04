<?php
/*
Template Name: スタッフ一覧 -
*/
?>
<?php get_header();?>

<main id="staffs">

	<article class="staff">
		<div class="staff__inner">
			<header class="staff__header">
				<h2 class="staff__title">Stylist</h2>
				<span class="staff__sub">スタイリスト</span>
			</header>

			<section class="staff-item staff-item__layout_left" v-for="staff in stylist">
				<div class="col-sm-60 col-xs-120 staff-item__left">
					<figure class="staff-item__image">
						<img :src="staff.acf.staff_pct">
					</figure>
				</div>
				<div class="col-sm-60 col-xs-120 staff-item__right">
					<h3 class="staff-item__title">{{staff.title.rendered}}</h3>
					<span class="staff-item__sub">{{staff.acf.staff_en}}</span>
					<span class="staff-item__yakushoku">{{staff.acf.staff_job.name}}</span>
					<div class="staff-item__description" v-html="staff.acf.staff_description"></div>
				</div>
			</section>

		</div>
	</article>

	<article class="staff">
		<div class="staff__inner">
			<header class="staff__header">
				<h2 class="staff__title">Assistant</h2>
				<span class="staff__sub">アシスタント</span>
			</header>

			<section class="staff-item staff-item__layout_left" v-for="staff in assistant">
				<div class="col-sm-60 col-xs-120 staff-item__left">
					<figure class="staff-item__image">
						<img :src="staff.acf.staff_pct">
					</figure>
				</div>
				<div class="col-sm-60 col-xs-120 staff-item__right">
					<h3 class="staff-item__title">{{staff.title.rendered}}</h3>
					<span class="staff-item__sub">{{staff.acf.staff_en}}</span>
					<span class="staff-item__yakushoku">{{staff.acf.staff_job.name}}</span>
					<div class="staff-item__description" v-html="staff.acf.staff_description">
					</div>
				</div>
			</section>

		</div>
	</article>

</main>

<?php get_footer();?>
