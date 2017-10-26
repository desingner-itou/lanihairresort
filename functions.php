<?php


/*----------------------------------------------------------
  initial
----------------------------------------------------------*/

register_nav_menus();// メニュー機能init
add_theme_support('post-thumbnails');// サムネイル機能init
add_theme_support( 'post-thumbnails' );// アイキャッチ機能init


/*----------------------------------------------------------
  bagfix
----------------------------------------------------------*/

// AdvancedCustomFieldのGooglemap表示
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDsJ-SzT-_l_jXygNh8JoNuTpbgstZyQWs';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/*----------------------------------------------------------
  updates
----------------------------------------------------------*/

// WPのメジャーアップデート、マイナーアップデート自動更新
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );

// プラグインの自動更新
add_filter( 'auto_update_plugin', '__return_true' );



/*----------------------------------------------------------
  headclean
----------------------------------------------------------*/

// WPjQuery読み込み拒否
function stop_wp_jq() {
if ( !is_admin() ) {  wp_deregister_script('jquery'); }
}
add_action('init', 'stop_wp_jq');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );// WPの絵文字機能読み込み拒否
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // WPの絵文字機能読み込み拒否
remove_action( 'wp_head', 'feed_links', 2 ); //サイト全体のフィード
remove_action( 'wp_head', 'feed_links_extra', 3 ); //その他のフィード
remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discoveryリンク
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writerリンク
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後の記事リンク
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //ショートリンク
remove_action( 'wp_head', 'rel_canonical' ); //canonical属性
remove_action( 'wp_head', 'wp_generator' ); //WPバージョン




/*----------------------------------------------------------
  custom post type
----------------------------------------------------------*/

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

  // register_post_type( 'style',  // カスタム投稿名
  //   array(
  //     'label' => 'スタイル',  // 管理画面の左メニューに表示されるテキスト
  //     'public' => true,  // 投稿タイプをパブリックにするか否か
  //     'has_archive' => true,  // アーカイブを有効にするか否か
  //     'show_in_rest' => true, //APIから取得できるようにするか
  //     'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
  //     'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
  //   )
  // );

  register_post_type( 'menu',  // カスタム投稿名
    array(
      'label' => 'メニュー',  // 管理画面の左メニューに表示されるテキスト
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

  register_post_type( 'item',  // カスタム投稿名
    array(
      'label' => 'カラー剤',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'show_in_rest' => true, //APIから取得できるようにするか
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
    )
  );

  register_post_type( 'kids',  // カスタム投稿名
    array(
      'label' => 'キッズ特徴',  // 管理画面の左メニューに表示されるテキスト
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



/*----------------------------------------------------------
  others
----------------------------------------------------------*/

// メニューのタイトル下に左部見出しをつける
function description_in_nav_menu($item_output, $item){
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><", $item_output);
}
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);


?>

