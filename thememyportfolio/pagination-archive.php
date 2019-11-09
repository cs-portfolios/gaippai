<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php
  if( $wp_query->max_num_pages > 1 ) :
?>
        <div class="navigation">
<?php
  endif;
  if ( ( ! get_query_var( 'paged' ) && 1 == $wp_query->max_num_pages ) || ( get_query_var( 'paged' ) < $wp_query->max_num_pages ) ) :
?>
            <div class="alignleft"><?php next_posts_link( '&laquo; 前へ' ); ?></div>
<?php
  endif;
  if ( get_query_var( 'paged' ) ) :
?>
            <div class="alignright">?<?php previous_posts_link( '次へ &raquo;' ); ?></div>
<?php
  endif;
?>
        </div>