
<?php 
 /* 
  template name:お問い合わせ後
 */
?>


<?php get_header();?>
          
    


    <main>
        <section class="inquiry">
            <div class="inquiry-inner inner">
              <h2 class="section-title">INQUIRY</h2>
                 
              <div class="form-after">
                  <p>お問い合わせありがとうございました。</p>
                  <p>メッセージは正常に送信されました。</p>
              </div>
            </div><!--inquiry-inner-->
        </section>

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

               <div class="news-item2 inner">
                
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
            <div class="inner">
              <button class="btn-news" onclick="location.href='<?php echo get_page_link( 120 );?>'">ニュース一覧へ</button>
            </div>
          </div>
          </div><!--inner-->
        </section><!--news-->
    </main>

<?php get_footer();?>