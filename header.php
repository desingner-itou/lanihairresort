<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width initial-scale=1" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css" type="text/css" />
  <?php wp_head(); ?>
</head>
<body>

<?php
	$class=$text=null;
	if(is_front_page()){
		$text="“Lani”とはハワイ語で天国・楽園・・・<br>五感で感じる癒し空間と心のこもった接客で至福の時間をお過ごしください。";
	}else{
		$page = get_post(get_the_id());
		$class=" header__sub";
		$text=$page->post_name;
	}
?>

<header class="header">
	<div class="header__inner<?php echo $class ?>">
		<div class="header__logo">
			<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/header-logo.png"></a>
		</div>
		<div class="header__catch">
			<p><?php echo $text ?></p>
		</div>
		<div class="header__bg"></div>
	</div>
	<?php get_template_part( 'parts', 'glovalnav' ) ?>
</header>