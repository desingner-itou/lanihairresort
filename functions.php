<?php

// カスタム投稿タイプの追加

function create_post_type() {

  $options = array(  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  );

  register_post_type( 'staff',  // カスタム投稿名
    array(
      'label' => 'スタッフ',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'show_in_rest' => true, //APIから取得できるようにするか
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
      'taxonomies' => array( 'term_name' ),
    )
  );

  register_post_type( 'style',  // カスタム投稿名
    array(
      'label' => 'スタイル',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'show_in_rest' => true, //APIから取得できるようにするか
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
    )
  );

  register_post_type( 'campaign',  // カスタム投稿名
    array(
      'label' => 'キャンペーン',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'show_in_rest' => true, //APIから取得できるようにするか
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}

$args = array(
  'label' => '役職',
  'public' => true,
  'show_ui' => true,
  'hierarchical' => true,
  'show_in_rest' => true,
);
$obaject_type = array(
  'staff'
);
register_taxonomy('staff',$obaject_type,$args);

add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします
add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を全投稿で共通して使えるように


register_nav_menus();
add_theme_support('post-thumbnails');
// メニューのタイトル下に左部見出しをつける
function description_in_nav_menu($item_output, $item){
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><", $item_output);
}
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

// AdvancedCustomFieldのGooglemap表示
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDsJ-SzT-_l_jXygNh8JoNuTpbgstZyQWs';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// WPのメジャーアップデート、マイナーアップデート自動更新
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );

// プラグインの自動更新
add_filter( 'auto_update_plugin', '__return_true' );


// WPjQuery読み込み拒否
function stop_wp_jq() {
if ( !is_admin() ) {
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3');
}
}
add_action('init', 'stop_wp_jq');

?>

