<?php
/*
Template Name: メニュー -
*/
?>
<?php get_header();?>

<main id="menus">
	<article class="salonmenu">

		<section :id="'menu'+index" class="salonmenu-item salonmenu-item__left" v-for="(menu,index) in menus">
			<div class="salonmenu-item__inner">
				<header class="salonmenu-item__header">
					<h2 class="salonmenu-item__title">{{menu.slug}}</h2>
					<span class="salonmenu-item__sub">{{menu.title.rendered}}</span>
				</header>

				<div v-if="menu.acf.menu_title || menu.acf.menu_description">
					<div class="salonmenu-item__description" v-if="menu.acf.menu_title">
						<h3 class="salonmenu-item__subtitle" v-html="menu.acf.menu_title"></h3>
						<div class="menu-item__text" v-if="menu.acf.menu_description" v-html="menu.acf.menu_description"></div>
					</div>
					<div class="salonmenu-item__wrap">
						<div class="salonmenu-item__table" v-if="menu.acf.menu_table" v-html="menu.acf.menu_table"></div>
						<!--<div class="salonmenu-item__table" v-if="menu.acf.menu_table2" v-html="menu.acf.menu_table2"></div>-->
						<small>※すべて税抜表示です</small>
					</div>
				</div>

				<div class="salonmenu-item__other" v-else>
					<div class="col-sm-60 col-xs-120">
						<div class="salonmenu-item__wrap">
							<div class="salonmenu-item__table" v-html="menu.acf.menu_table"></div>
						</div>
					</div>
					<div class="col-sm-60 col-xs-120">
						<div class="salonmenu-item__wrap">
							<div class="salonmenu-item__table" v-if="menu.acf.menu_table2" v-html="menu.acf.menu_table2"></div>
						</div>
					</div>
				</div>
			</div>

		</section>

	</article>





	<article class="tokuten-sub" style="background-image:url(<?php echo get_template_directory_uri()?>/images/IMG_0542.JPG)">

		<header class="tokuten-sub__header">
			<h2 class="tokuten-sub__title">Total Support</h2>
			<span class="tokuten-sub__sub">年間トータルサポートシステム</span>
			<div class="tokuten-sub__description">
				<p>Laniは、お客様のライフスタイルのパートナーとなり、ずっと通えるサロンを目指します。</p>
				<p>また、Laniをご愛顧いただけるお客様に、よりお得なサービス・サポートを考えております。</p>
			</div>
		</header>

		<div class="tokuten-sub__inner">

			<div class="col-sm-30 col-xs-120 tokuten-sub-item__wrap">
				<section class="tokuten-sub-item">
					<div class="tokuten-sub-item__inner">
						<h3 class="tokuten-sub-item__title">メンバーズカード</h3>
						<span class="tokuten-sub-item__tips">特典1</span>
						<div class="tokuten-sub-item__description">
							<p>ポイントカード制のメンバーズカードで、<b>ポイントを貯めて20%OFF</b>！！</p>
							<!-- <p><b>スマホ版ポイントカードZeetle対応で、さらに便利でさらにお得。</b></p> -->
						</div>
					</div>
				</section>
			</div>

			<div class="col-sm-30 col-xs-120 tokuten-sub-item__wrap">
				<section class="tokuten-sub-item">
					<div class="tokuten-sub-item__inner">
						<h3 class="tokuten-sub-item__title">お得なチケット</h3>
						<span class="tokuten-sub-item__tips">特典2</span>
						<div class="tokuten-sub-item__description">
							<p>キレイを持続していただくために、お得な<b>メンテナンストリートメントチケット</b>を毎回お渡しいたします。</p>
						</div>
					</div>
				</section>
			</div>

			<div class="col-sm-30 col-xs-120 tokuten-sub-item__wrap">
				<section class="tokuten-sub-item">
					<div class="tokuten-sub-item__inner">
						<h3 class="tokuten-sub-item__title">次回特典</h3>
						<span class="tokuten-sub-item__tips">特典3</span>
						<div class="tokuten-sub-item__description">
							<p>60日以内の次回来店は<b>施術料金を10％OFF</b>にしております。</p>
							<!-- <p>来店日より50日以内の次回来店は、<b>施術料金を10％OFF！60日以内</b>の次回来店は<b>8％OFF</b>にしております。</p> -->
							<p>定期的なご来店でお得にキレイになりますよ♪</p>
						</div>
					</div>
				</section>
			</div>

			<div class="col-sm-30 col-xs-120 tokuten-sub-item__wrap">
				<section class="tokuten-sub-item">
					<div class="tokuten-sub-item__inner">
						<h3 class="tokuten-sub-item__title">スタイリスト変更歓迎</h3>
						<span class="tokuten-sub-item__tips">特典4</span>
						<div class="tokuten-sub-item__description">
							<p>Laniでは、常にお客様の今以上を作り出すよう、どのスタイリストも素敵なヘアスタイルをご提供できると自負しておりますが、よりフィーリングの合うスタイリスト探しをお手伝いします。</p>
							<p>いつでも<b>スタイリスト変更大歓迎</b>です。</p>
						</div>
					</div>
				</section>
			</div>

		</div>
		<div class="tokuten-sub__overlay"></div>
	</article>




	<article class="system">
			<section class="system-item col-sm-60 col-xs-120" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/system1.jpg);">
				<div class="system-item__inner system-item__inner__layout_left">
					<h3 class="system-item__title">14th warranty</h3>
					<span class="system-item__sub">14日間の安心保証</span>
					<div class="system-item__description">
						<p>私たちはこだわりの技術と自信、そしてなによりも強い責任感を持って、お客様を担当させていただいております。</p>
						<p>しかし、それでも初めてのご来店で慣れない空間の中、初対面の私共と限られた時間の中でのコミュニケーション・・・</p>
						<p>お望みのスタイルに仕上がらずに「もう少し切りたい」「思ってた色と違う」など、お手数ですがもう一度ご来店ください。</p>
						<p><b>14日以内のご連絡であれば、何度でも無料で手直し</b>させていただきます。</p>
						<p>もちろんそのような事がないよう、しっかりカウンセリングいたしますので、ご安心ください。</p>
					</div>
				</div>
				<div class="system__overlay"></div>
			</section>

			<section class="system-item col-sm-60 col-xs-120" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/6.JPG);">
				<div class="system-item__inner system-item__inner__layout_right">
					<h3 class="system-item__title">Introduction system</h3>
					<span class="system-item__sub">紹介システム</span>
					<div class="system-item__description">
						<p>Laniでは、お客様の大切なお友達、ご家族をもっと可愛くしたい！パートナーでありたい！</p>
						<p>そんな想いで紹介カードをお配りしています。</p>
						<p>Laniが責任を持って大切な方を担当いたします。</p>
					</div>
					<div class="system-item__excerpt">
						<h4 class="system-item__excerpt__title">紹介でのご来店特典</h4>
						<p>
								技術料金
							<span class="system-item__excerpt__price_main">30%OFF</span><br>
								<!-- ＋
								ご紹介者様も
							<span class="system-item__excerpt__price_main">次回30%OFF</span><br> -->
							<small>（エクステ・セットは除きます。他の割引との併用はできません。）</small>
						</p>
					</div>
				</div>
				<div class="system__overlay"></div>
			</section>

	</article>


</main>

<script>
	var innerTarget = location.href.split('#')[1];
</script>
<?php get_footer();?>
