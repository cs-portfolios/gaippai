<?php get_header(); ?>

<body>
<?php get_template_part( 'head', 'nav' ); ?>

<?php
if ( have_posts() ) :
?>
  <div class="sa-main">
    <main class="s-mm s-border mt-4">
      <div class="bgc-purple-vp-s sm-overview">
        <h2 class="fs-2 text-center mb-4 pt-4">
          <?php
          if ( is_category() ) {
            echo 'オリジナル脚本 《' . single_cat_title( '', false ) . '》';
          } elseif ( is_tag() ) {
            echo 'オリジナル脚本 《' . single_tag_title( '', false ) . '》';
          } else {
            echo 'オリジナル脚本';
          }
          ?>
        </h2>
        <p class="fs-1 text-center pb-2">
          <?php
          if ( is_category() ) {
            echo 'す～す～が過去に上演した「' . single_cat_title( '', false ) . '」の脚本たち<br>中身を読むことも…！';
          } elseif ( is_tag() ) {
            echo 'す～す～が過去に上演した「' . single_tag_title( '', false ) . '」の脚本たち<br>中身を読むことも…！';
          } else {
            echo 'す～す～が過去に上演した脚本たち<br>中身を読むことも…！';
          }
          ?>
        </p>
      </div> 
      <hr class="s-hr">
      <?php
      while ( have_posts() ):
        the_post();
      ?>
      <article id="post-<?php the_ID(); ?>" class="sa-articlep text-center mx-4 my-3">
        <img class="saa-playimage" src="<?php the_field('facesheet'); ?>"/>
        <div class="saa-overview">
          <h3><a href="<?php the_permalink(); ?>" class="text-decoration-none" title="<?php the_title_attribute(); ?>">『<?php the_title(); ?>』</a></h3>
          
          <?php the_excerpt(); ?>

          <div>
            <h4 class="text-center">詳細</h4>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">登場人物（男：女）</th>
                  <th scope="col">所要時間</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php the_field( 'charactor' ) ?></td>
                  <td><?php the_field( 'time' ) ?></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div>
            <h4>上演記録</h4>
            <p><?php the_field('playlog')?></p>
          </div>
          
          <span style="text-align: start;">
            <?php
            $terms = get_the_terms( $post->ID, 'tag' );
            foreach ($terms as $term ){
              echo '<a href="http://localhost/play/?'.$term->slug.'" class="s-tag text-decoration-none mr-2">'.$term->name.'</a>';
            }
            ?>
          </span>
        </div>
      </article>
      <hr class="s-hr">

      <?php endwhile; ?>

      <?php endif; ?>
        
      <?php get_footer('page'); ?>