<?php get_header(); ?>

<body>
  <nav class="s-navigation">
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/daihon.png" alt=""></a>
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/osirase.png" alt=""></a>
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kangeki.png" alt=""></a>
    <a class="sn-logo">
      <img class="snl-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sitelogo.png" alt="">
    </a>
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/me-ru.png" alt=""></a>
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/huransupan.png" alt=""></a>
    <a class="sn-block"><img class="snb-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tagu.png" alt=""></a>
  </nav>

<?php
if ( have_posts() ) :
?>
    <main class="container s-mm s-border mt-4">
      <div class="bgc-red-vp-s sm-overview">
        <h2 class="fs-2 text-center mb-4 pt-4">すすログ</h2>
        <p class="fs-1 text-center pb-2">
        活動報告、HP更新のお知らせ、エトセトラ、エトセトラ…<br>
        公私ないまぜブログです
        </p>
      </div>
      <hr class="s-hr">

<?php
  while ( have_posts() ) :
    the_post();
?>
<?php get_template_part( "content","blog" );?>

<?php endwhile; ?>

<?php get_template_part( "pagination", "archive" ); ?>

<?php else : ?>
  <p>記事が見つかりませんでした</p>
<?php endif; ?>
        <!-- /END THE FEATURETTES -->


        <?php get_footer('page'); ?>