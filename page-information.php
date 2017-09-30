<?php
/*
Template Name: 会社概要 -
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
				Information
			</p>
		</div>
		<div class="header__bg"></div>
	</div>
	<?php get_template_part( 'parts', 'glovalnav' ) ?>
</header>

<main>
	<div class="information">
		<div class="information__inner">
			<div class="table">
				<div class="table__th">所在地</div>
				<div class="table__td">
					〒550-0015<br>
					大阪市西南堀江1丁目23-7ネイビー南堀江4F
				</div>
			</div>
			<div class="table">
				<div class="table__th">営業時間</div>
				<div class="table__td">
					平日　11:00～20：00<br>
					土曜　10:00～19：00<br>
					日曜・祝日　10:00～18：30
				</div>
			</div>
			<div class="table">
				<div class="table__th">定休日</div>
				<div class="table__td">月曜・第2火曜</div>
			</div>
			<div class="information__description">
				<p>四ツ橋駅6番出口を上がり、四ツ橋筋沿いに右に真っ直ぐ進みファミリーマートの角を右に曲がり直進するとと右手にネイビー色のビルがございますので四階までエレベーターで上がって頂くと当店になります。</p>
				<p>心斎橋駅OPAから出て、日航ホテルの間の道を左折。スタバの交差点を渡り四ツ橋筋沿いに左折ファミマの角を右折し直進すると右手にネイビー色のビルがございます四階までエレベーターで上がると当店になります。</p>
			</div>
		</div>
	</div>
</main>

<?php get_footer();?>
