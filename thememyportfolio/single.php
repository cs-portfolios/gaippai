<!-- Get header -->
<?php get_header(); ?>

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
?>
    <main class="container">
<article id="post-<?php the_ID(); ?>" class="row mb-5">
  <div class="col-md-7">
          <h3 class="text-center my-5"><?php the_title(); ?></h3>

      <?php the_content(); ?>

      <?php get_template_part( "meta", "post" ); ?>

  </div>
</article>
   <?php endwhile;?>
   <?php endif;?>

        <hr>

<nav id="nav-below">
    <ul class="row justify-content-between list-unstyled">
        <?php previous_post_link( '<li>%link</li>', '&laquo; %title' ); ?>
        <?php next_post_link( '<li>%link</li>', '%title &laquo;' ); ?>
    </ul>
</nav>

        <hr>

        <!-- /END THE FEATURETTES -->

    </main>

    <!-- Get footer -->
    <?php get_footer(); ?>