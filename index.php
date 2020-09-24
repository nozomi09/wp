<?php 
 /* 
  template name:トップページ
 */
?>

<?php get_header();?>

<main>
        <section class="introduction">
          <div class="introduction-inner inner">
            <h2 class="section-title">INTRODUCTION</h2>
            <h3>なぜ今｢マハーバーラタ｣なのか？</h3>
            <div class="int-content row ">
                <div class="col-md-6 ">
                    <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？</p>
                    <p>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。</p>    
                    <p>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
                </div>
                <div class="col-md-6 ">
                    <p>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。</p>   
                    <p>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。</p>
                    <p>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
                </div>
            </div><!--int-content-->
          </div><!--inner-->
        </section><!--introduction-->

        <div class="video-inner inner  wow fadeIn" date-wow-offset= "50">
          <div class="youtube">
              <iframe width="100%" height="500" src="  
                          <?php
                            $youtube = SCF::get('youtube',47);
                            echo $youtube;
                        ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><!--youtube-->
      </div><!--video-inner-->

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

        <section class="story">
          <div class="inner  wow fadeIn" date-wow-offset= "50">
            <h2 class="section-title">STORY</h2>
            <div class="story-inner">
              
              <div class="story-lead">
                <p>
                   <?php
                      $story_1 = SCF::get('story_1',51);
                      echo $story_1;
                      ?>
                </p>
                <div class="btn-more-story"><button onclick="location.href='<?php echo get_page_link( 51 );?>'" class="btn-more-story">もっと詳しく</button></div>
              </div><!--story-lead-->
           </div><!--story-inner-->
          </div><!--inner-->
        </section><!--story-->

        <section class="comments">
          <div class="inner  wow fadeIn" date-wow-offset= "50">
           <h2 class="section-title">COMMENTS</h2>
           <p class="comments-lead">舞台関係者のみならず各界著名人からコメントが届いています！</p>
           <div class="comments-card">
           <img class="comments-sm" src="<?php echo get_template_directory_uri() ?>/img/comments.jpg" alt="">
             <div class="comments-card-inner">
              
             <?php
                  $cast_top = SCF::get('cm_top',53);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                 <div class="comments-name">
                    <h4><?php echo $fields['cm_top_position']; ?></h4>
                    <p><?php echo $fields['cm_top_name']; ?></p>
                 </div><!--comments-name-->
                 <div class="comment">
                 <?php echo nl2br($fields['cm_top_comment']); ?>
                </div>

                <?php } ?>

               <div class="btn-more-comments">  <button onclick="location.href='<?php echo get_page_link( 53 );?>'" class="btn-more-comments">もっと見る</button></div>
              </div><!--comments-card-inner-->
           </div><!--comments-card-->
          </div><!--inner-->
        </section><!---comments-->

        <section class="cast">
          <div class="background"></div>
          <div class="inner">
            <h2 class="section-title">CAST</h2>
            <div class="cast-items  wow fadeIn" date-wow-offset= "50">
            <div class="cast-card-item" >
                  <div class="cast_img">

                  <?php 
                  $cast_top = SCF::get('cast_top',36);	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top',36);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                  <p class="cast-name"><?php echo $fields['cast_position']; ?>
                  <span><?php echo $fields['cast_name']; ?></span>
                  <?php echo $fields['cast_work']; ?>
                  </p><!--cast-name-->

                  <p class="cast-history">
                  <?php echo nl2br($fields['cast_profile']); ?>
                  </p>
                  <?php } ?>
                </div><!--cast-card-item-->


                <div class="cast-card-item">
                  <div class="cast_img">

                  <?php 
                  $cast_top = SCF::get('cast_top2',36);	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img2'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top2',36);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                  <p class="cast-name"><?php echo $fields['cast_position2']; ?>
                  <span><?php echo $fields['cast_name2']; ?></span>
                  <?php echo $fields['cast_work2']; ?>
                  </p><!--cast-name-->

                  <p class="cast-history">
                  <?php echo nl2br($fields['cast_profile2']); ?>
                  </p>
                  <?php } ?>
                </div><!--cast-card-item-->

                <div class="cast-card-item">
                  <div class="cast_img">

                  <?php 
                  $cast_top = SCF::get('cast_top3',36);	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img3'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top3',36);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                  <p class="cast-name"><?php echo $fields['cast_position3']; ?>
                  <span><?php echo $fields['cast_name3']; ?></span>
                  <?php echo $fields['cast_work3']; ?>
                  </p><!--cast-name-->

                  <p class="cast-history">
                  <?php echo nl2br($fields['cast_profile3']); ?>
                  </p>
                  <?php } ?>
                </div><!--cast-card-item-->
            </div><!--cast-items-->
            <div class="btn-cast-more"><button onclick="location.href='<?php echo get_page_link( 36 );?>'">もっと見る</button></div>
           
          </div><!--inner-->
        </section><!---cast-->
      </main><!--main-->

   <?php get_footer(); ?>