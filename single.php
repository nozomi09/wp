<?php get_header();?>

   
<?php get_template_part('template-parts/top'); ?>
          
        <main id="primary">

        <?php if ( function_exists( 'bcn_display' ) ) : ?>
            <?php endif; ?>

            <?php
            if ( have_posts() ) :
            while ( have_posts() ) :
            the_post();
            ?>

            <article class="news">
                <div class="news-inner inner">
  
                <h2 class="section-title">NEWS</h2>

                <div class="news-content-inner">
                    <div class="news-header">
                    <div class="news-content-img">
                    <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
                        </div><!--news-content-img-->

                    <div class="news-meta">
                        <p class="news-date"><time class="entry-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y/n/j' ); ?></time>
                        <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?></p>
                            <?php endif; ?>
                        <h1 class="news-title"><?php the_title(); ?></h1>
                    </div><!--news-meta-->
                    </div><!--news-header-->
                    <div class="content-inner">
                       <?php
                        //本文の表示
                        the_content(); ?>
                        <?php
                        //改ページを有効にするための記述
                        wp_link_pages(
                        array(
                        'before' => '<nav class="entry-links">',
                        'after' => '</nav>',
                        'link_before' => '',
                        'link_after' => '',
                        'next_or_number' => 'number',
                        'separator' => '',
                        )
                        );
                        ?>
                    </div><!--content-inner-->
                </div><!--news-content-inner-->
            </div><!--inner-->
            </article><!--news-->  
            
            <?php
            endwhile;
            endif;
            ?>

            <div class="news-pagenation inner">
                  <div class="preview-left">
                  <time class="entry-published" style="font-weight:400;" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
                    <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?></p>
                    <?php endif; ?>
                    <p></p>
                    <?php previous_post_link('<strong>%link</strong>'); ?>
                  </div>
                  <div class="preview-right">
                    <time class="entry-published" style="font-weight:400;" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
                    <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?></p>
                    <?php endif; ?>
                    <p></p>
                    <?php next_post_link('<strong>%link</strong>'); ?>
                  </div>
            </div><!--news-pagenation-->
     
      </main>  

      <?php
        //記事があればentriesブロック以下を表示
        if (have_posts() ) : ?>

      <section class="news">

          
        <div class="news-inner inner">
            <h2 class="section-title">NEWS</h2>
          <div class="news-list row flex-wrap  wow fadeIn" date-wow-offset= "50">
          

          <?php query_posts('posts_per_page=3'); ?> 
              <?php
                  //記事数ぶんループ
                  while ( have_posts() ) :
                  the_post(); ?>  

              <article class="news-item">
                  <a href="<?php the_permalink();?>" class="news-post">
                  <div class="news-item-inner">
                      <div class="news-img" >
                      <?php
                          if (has_post_thumbnail() ) {
                          // アイキャッチ画像が設定されてれば大サイズで表示
                          the_post_thumbnail('small');
                          } else {
                          // なければnoimage画像をデフォルトで表示
                          echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                          }
                          ?>
                      </div>
                      <div class="news-item-content">
                  
                          <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?>
                          </time><!-- /news-date -->
                          <p class="news-title"><?php the_title(); //タイトルを表示 ?></p><!--news-title-->     
                      </div><!--news-item-content-->
                    </div><!--news-item-inner-->
                  </a>
              </article><!--news-item-->
                  <?php
                      endwhile;
                      ?>
              
                      <?php endif; ?>

            <div class="news-item2 ">
              
                    <?php query_posts('showposts=2&offset=3'); ?>
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <article class="news-item-under">
                  <a href="<?php the_permalink();?>" class="news-post">
                  <div class="news-item-inner">
                      <div class="news-img" >
                      <?php
                          if (has_post_thumbnail() ) {
                          // アイキャッチ画像が設定されてれば大サイズで表示
                          the_post_thumbnail('small');
                          } else {
                          // なければnoimage画像をデフォルトで表示
                          echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                          }
                          ?>
                      </div>
                      <div class="news-item-content">
                  
                          <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?>
                          </time><!-- /news-date -->
                          <p class="news-title"><?php the_title(); //タイトルを表示 ?></p><!--news-title-->     
                      </div><!--news-item-content-->
                    </div><!--news-item-inner-->
                  </a>
              </article><!--news-item-under-->   

                    <?php endwhile; else: ?>
                    <?php endif; ?>
        </div><!--news-item2-->
                                
          
          <div class="btn-news"> 
              <button class="btn-news" onclick="location.href='<?php echo get_page_link( 120 );?>'">ニュース一覧へ</button>
          </div>
        </div><!--inner-->
      </section><!--news-->
            

    <?php get_footer();?>