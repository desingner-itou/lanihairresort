<?php

// カスタム投稿タイプの追加

// function create_post_type() {

//   $options = [  // supports のパラメータを設定する配列（初期値だと title と editor のみ投稿画面で使える）
//     'title',  // 記事タイトル
//     'editor',  // 記事本文
//     'thumbnail',  // アイキャッチ画像
//     'revisions'  // リビジョン
//   ];

//   register_post_type( 'term_name',  // カスタム投稿名
//     array(
//       'label' => 'カスタム投稿名',  // 管理画面の左メニューに表示されるテキスト
//       'public' => true,  // 投稿タイプをパブリックにするか否か
//       'has_archive' => true,  // アーカイブを有効にするか否か
//       'show_in_rest' => true, //APIから取得できるようにするか
//       'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
//       'supports' => $options,  // 投稿画面でどのmoduleを使うか的な設定
//       'taxonomies' => array( 'term_name' ),
//     )
//   );
// }

// $args = array(
//   'label' => 'タクソノミー名',
//   'public' => true,
//   'show_ui' => true,
//   'hierarchical' => true,
//   'show_in_rest' => true,
// );
// $obaject_type = array(
//   'term_name'
// );
// register_taxonomy('term_name',$obaject_type,$args);

// add_action( 'init', 'create_post_type' ); // アクションに上記関数をフックします
// add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を全投稿で共通して使えるように


register_nav_menus();


// AdvancedCustomFieldのGooglemap表示
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyDsJ-SzT-_l_jXygNh8JoNuTpbgstZyQWs';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


?>