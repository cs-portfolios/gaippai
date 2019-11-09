<article id="post-<?php the_ID(); ?>" class="sa-article mx-4 my-3">
  <img class="saa-comic" src="<?php the_field('image'); ?>" alt="">     
  <div class="saa-detail">
    <?php the_content(); ?>
  </div>
  <?php get_template_part( "meta", "post" ); ?>
</article>
    <hr class="s-hr">