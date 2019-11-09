<?php get_header(); ?>

<body>
  <?php get_template_part( 'head', 'nav' ); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
?> 
    <div class="sa-main">
        <main id="post-<?php the_ID(); ?>" <?php post_class('s-mm s-border mt-4'); ?>>
            <?php
            $color = get_field('color');
            echo '<div class="bgc-'.$color.'-vp-s sm-overview">';
            ?>
                <h2 class="fs-2 text-center mb-4 pt-4">
                    <?php the_title(); ?>
                </h2>
            </div>
            <hr class="s-hr">
            <article class="sa-article mx-4 my-3">
                <div class="s-flame saa-page">
                    <?php
                    if( has_sub_field('playbookview')):
                        for($i =1; $i < 50; $i++){
                            $page = "page" . $i;
                            $bookpage = "bp" . $i;
                            $viewpage = get_sub_field($page);
                            echo '<img id="'.$bookpage.'" class="saa-comic" alt="" src="'.$viewpage.'">';
                        }
                    ?>
                    <?php
                    endif;
                    ?>
                </div>    
            </article>
            <?php endwhile; ?>
            <?php endif;?>
            
            <?php get_footer('page'); ?>