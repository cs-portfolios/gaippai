<?php
if ( ! function_exists( 'bourgeon_setup' ) ) {
    function bourgeon_setup() {

/* アイキャッチ画像の有効化 */
      add_theme_support( 'post-thumbnails' );

/* アイキャッチ画像のサイズ指定 */
      set_post_thumbnail_size( 200, 200, true );
      add_image_size( 'md_thumbnail', 200, 200, true );

/* 投稿フォーマットの有効化 */
add_theme_support( 'post-formats', array( 'aside', 'gallery','image','link','quote','status','video','audio' ) );

/*カスタムメニューの位置を定義します*/
register_nav_menus(
    array(
        'header'  => 'ヘッダーナビ',
        'utility' => 'ユーティリティナビ',
        'global'  => 'グローバルナビ',
        'footer'  => 'フッターナビ',
    )
);

/* カスタム投稿タイプ"Playbook"の作成 */
function bourgeon_create_post_type() {
    register_post_type( 'playbook',
      array(
          'labels' => array(
              'name'          => 'Playbook',
              'singular_name' => 'Playbook',
          ),
          'public'        => true,
          'menu_position' => 5,
          'has_archive'   => true,
          'supports' => array(
              'title',
              'editor',
              'thumbnail',
              'excerpt',
              'custom-fields',
              'post-formats',
          ),
      )
    );
}
add_action( 'init', 'bourgeon_create_post_type',1 );

/* カスタム分類の追加 */
function bourgeon_create_taxonomies() {
    $labels = array(
        'name'          => 'タグ',
        'singular_name' => 'タグ',
    );

    register_taxonomy( 'tag', 'playbook', array( 'playbook' ), 
      array(
          'hierarchical'      => false,
          'labels'            => $labels,
          'show_ui'           => true,
          'show_admin_column' => true,
          'show_in_nav_menus' => true,
      )
    );
}
add_action( 'init', 'bourgeon_create_taxonomies', 1);

/* aタグにclassを追加 */
add_filter( 'walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function
add_class_on_link($item_output,$item){
    return preg_replace('/(<a.*?)/',
    '$1' . " class='text-light text-decoration-none mr-3 py-2 d-md-inline-block' ",
    $item_output);
}

/*終了*/
    }
}
add_action( 'after_setup_theme', 'bourgeon_setup' );

/* [...]を「もっと読む」リンクに変更*/
function bourgeon_new_excerpt_more ( $more ) {
    return '.. <a class="text-decoration-none" href=" ' . get_permalink() . '">もっと読む>></a>';
}
add_filter( 'excerpt_more', 'bourgeon_new_excerpt_more' );

/* 抜粋の文字数を変更 */
function bourgeon_excerpt_length() {
    return 140;
}
add_filter( 'excerpt_mblength', 'bourgeon_excerpt_length' );

/* javascriptの装備 */
if(!is_admin()) {
    function deregister_script(){  //　登録解除の項目
        wp_deregister_script('jquery');
    }
 
    function register_script(){  //　登録の項目
        wp_register_script( 'suesuejq', get_stylesheet_directory_uri() . '/js/suesuejq.js', array( 'jquery' ), '', true);
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1', true );
        }
    function add_script() {  // 装備の項目
        deregister_script();
        register_script();
        wp_enqueue_script('suesuejq');
        wp_enqueue_script('jquery');
    }
    add_action('wp_enqueue_scripts','add_script');
}
