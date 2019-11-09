<?php get_header(); ?>

<body>
    <?php get_template_part( 'head', 'nav' ); ?>
    <main class="container si-main s-border mt-4">
        <div class="bgc-yellow-vp-s sm-overview">
            <h2 class="fs-2 text-center mb-4 pt-4">自己紹介</h2>
            <p class="fs-1 text-center pb-2">はじめまして！脚本・演出家す～す～です。<br>"日常を彩る"作品作りを目標に活動しています。</p>
        </div>
        <hr class="s-hr">
    
        <div class="si-content py-4">
            <dl class="col-12 col-lg-4 text-center">
    			<dt>本名</dt><dd><?php the_field('name'); ?></dd>
    			<dt>大学</dt><dd><?php the_field('collage'); ?></dd>
    			<dt>趣味</dt><dd><?php the_field('hobby'); ?></dd>
    		</dl>
            <div class="sic-image col-12 col-md-4">
                <?php if ( has_post_thumbnail() ) :
                    the_post_thumbnail(
                        array( 150, 150 )
                    );
                    else : ?>
                    <img class="s-suesueimage" src="<?php echo get_template_directory_uri(); ?>/images/suesue.png" alt="noimage">
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-4">
                <dl class="text-center">
    	        	<dt>メールアドレス</dt><dd><?php the_field('mailadress'); ?></dd>
    	        	<dt>Twitter</dt><dd><?php the_field('twitter'); ?></dd>
    	        	<dt>Facebook</dt><dd><a href="<?php the_field('facebook'); ?>" class="text-decoration-none"><?php the_field('facebook'); ?></a></dd>
    	        </dl>
            </div>
        </div>
        
<?php get_footer('page'); ?>