<?php get_header(); ?>

<body>
<?php get_template_part( 'head', 'nav' ); ?>

<?php
$url = $_SERVER[ 'REQUEST_URI'];
if(strstr($url,'short')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => 'short',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'medium')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => 'medium',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'long')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => 'long',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'5')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => '5',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'5-10')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => '5-10',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'10')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => '10',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'garakutown')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => 'garakutown',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
elseif(strstr($url,'crazysukonbu')):
  $args = array(
    'post_type'   => 'playbook',
    'post_per_page' => 10,
    'tax_query'     => array(
      array(
        'taxonomy' => 'tag',
        'field'    => 'slug',
        'terms'    => 'crazysukonbu',
      ),
    ),
  );
  $wp_query =  new WP_query( $args );
endif;
?>
<?php if( $wp_query->have_posts() ):
       while( $wp_query->have_posts() ):
        $wp_query->the_post(); ?>
  <div class="sa-main">
    <main class="s-mm s-border mt-4">
      <div class="bgc-purple-vp-s sm-overview">
        <h2 class="fs-2 text-center mb-4 pt-4">
          
          <?php
if ( is_tax() ) {
  echo 'オリジナル脚本<br>《' . single_term_title( '', false) . '》';
} else {
  echo 'オリジナル脚本';
}
?>
        </h2>
        <p class="fs-1 text-center pb-2">
          <?php
if ( is_tax() ) {
  echo 'す～す～が過去に上演した「' . single_term_title( '', false) . '」の脚本たち<br>中身を読むことも…！';
} else {
  echo 'す～す～が過去に上演した脚本たち<br>中身を読むことも…！';
}
?>
        </p>
      </div>
      <hr class="s-hr">
      <article id="post-<?php the_ID(); ?>" class="sa-articlep text-center mx-4 my-3">
        <img class="saa-playimage" src="<?php the_field('facesheet'); ?>" alt="">
        <div class="saa-overview">
          <h3><a href="<?php the_permalink(); ?>"class="text-decoration-none" title="<?php the_title_attribute(); ?>">『<?php the_title(); ?>』</a></h3>
            
          <?php the_excerpt(); ?>
          
          <div>
            <h2 class="text-center">詳細</h2>
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

          <span style="text-align: start;">
            <?php
            $terms = get_the_terms( $post->ID, 'tag' );
            foreach ((array)$terms as $term ){
              echo '<a href="http://localhost/play/?'.$term->slug.'" class="s-tag text-decoration-none mr-2">'.$term->name.'</a>';
            }
            ?>
          </span>
        </div>
      </article>
      <hr class="s-hr">
      <?php
        endwhile;
      else:
        ?>
        <p>ページが存在しません。</p>
        <?php
        endif;
        ?>
      <?php wp_reset_postdata(); ?>

      <?php get_footer('page'); ?>