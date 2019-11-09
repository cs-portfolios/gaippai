<?php get_header(); ?>

<body>
  <?php get_template_part( 'head', 'nav' ); ?>

<?php if ( have_posts() ) : ?>
  <div class="sa-main">
    <main class="s-mm s-border mt-4">
    <?php if ( is_category('oshirase') ) {
      echo '<div class="sm-overview bgc-red-vp-s">';
    } elseif ( is_category('susulog') ) {
      echo '<div class="sm-overview bgc-green-vp-s">';
    } elseif ( is_category('susumeru') ) {
      echo '<div class="sm-overview bgc-pink-vp-s">';
    } elseif ( is_category('gallery') ) {
      echo '<div class="sm-overview bgc-blue-vp-s">';
    } else {
      echo '<div class="sm-overview bgc-red-vp-s">';
    }
    ?>
      <h2 class="fs-2 text-center mb-4 pt-4">
<?php
if ( is_category() ) {
  echo '' . single_cat_title( '', false ) . '';
} elseif ( is_tag() ) {
  echo '' . single_tag_title( '', false ) . '';
} elseif ( is_day() ) {
  echo '' . get_the_date( 'Y年n月j日' ) . '';  
} elseif ( is_month() ) {
  echo '' . get_the_date( 'Y年n月' ) . '';
} elseif ( is_year() ) {
  echo '' . get_the_date( 'Y年' ) . '';
} else {
  echo '';
}
?>
      </h2>
      
      <p class="fs-1 text-center pb-2">
      <?php if ( is_category('oshirase') ) {
      echo 'す～す～が関わる公演、イベントその他諸々のお知らせです。';
    } elseif ( is_category('susulog') ) {
      echo '日常の些末をちょこちょこお届け。<br>週一更新';
    } elseif ( is_category('susumeru') ) {
      echo 'おススメしたい作品を時々勧めます。<br>舞台、映画、エトセトラエトセトラ…';
    } elseif ( is_category('gallery') ) {
      echo '撮った写真や書いたイラスト。<br>脚本の設定資料なんかも。';
    } else {
      echo '';
    }
    ?>
      </p>
      </div>
      <hr class="s-hr">
<?php
  while ( have_posts() ) :
    the_post();
    ?>

<?php get_template_part( "content", "blog" ); ?>

<?php endwhile; ?>

<?php else : ?>
  <div class="sa-main">
    <main class="s-mm s-border mt-4">
      <div class="bgc-red-vp-s sm-overview">
        <h2 class="text-center mb-4 pt-4">No page</h2>
      </div>
      <article class="sa-article mx-4 my-3">
        <p>記事が見つかりませんでした</p>
      </article>
      <hr class="s-hr">
<?php endif; ?>

<?php get_footer('page'); ?>