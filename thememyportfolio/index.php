<!-- Get header -->
<?php get_header(); ?>

<?php
if ( have_posts() ) :
?>
    <main class="container">

      <h2 class="text-center my-4">ブログ</h2>

      <hr>

<?php
  while ( have_posts() ) :
    the_post();
?>
<?php get_template_part( "content","blog" );?>

<?php endwhile; ?>

<?php get_template_part( "pagination", "archive" ); ?>

<?php endif; ?>
        <!-- /END THE FEATURETTES -->
    </main>

    <!-- Get footer -->
    <?php get_footer(); ?>