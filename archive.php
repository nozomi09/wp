<?php 
 /* 
  template name:ニュース
 */
?>

<?php get_header(); ?>
   


    <section class="news wow fadeIn" >
        <div class="news-innner inner">


      

            <h2 class="section-title">NEWS</h2>
            
          <div class="news-list list-archive row flex-wrap">
            
         
         <?php
                $wp_query = new WP_Query();
                $my_posts = array(
                  'post_type' => 'post',
                  'posts_per_page'=> '12',
                );
                $wp_query->query( $my_posts );
                if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
              ?>
          <article class="news-item">
            <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
              <div class="news-img">
              <?php
                    if (has_post_thumbnail() ) {
                    // アイキャッチ画像が設定されてれば大サイズで表示
                    the_post_thumbnail('large');
                    } else {
                    // なければnoimage画像をデフォルトで表示
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                    }
                    ?>
              </div><!--news-img-->
              <div class="news-item-content">
                
                <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!--news-date-->
                <p class="news-title"><?php the_title(); //タイトルを表示 ?></p>
              </div><!--news-item-inner-->
            </a><!--news-item-->
         </article><!--news-item-->
            <?php
                endwhile;
                ?>
          </div><!--news-contents-->
          <?php endif; wp_reset_postdata();?>

 
       <?php get_template_part('template-parts/pagenation'); ?>

        </div><!--inner-->
      </section><!--news-->

      


      <?php get_footer(); ?>