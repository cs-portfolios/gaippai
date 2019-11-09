    <div class="s-meta">
      <span>
        <?php
      $categories = get_the_category();
      foreach( $categories as $category ):?>
          <a href="<?php echo get_category_link( $category->term_id );?>" class="s-tag text-decoration-none mr-2">
              <?php echo $category->name; ?>
            </a>
            <?php endforeach; ?>
      </span>
      <span class="font-weight-light"><?php the_time( get_option( 'date_format' ) ); ?></span>
    </div>  