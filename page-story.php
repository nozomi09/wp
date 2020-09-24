<?php 
 /* 
  template name:ストーリー
 */
?>

<?php get_template_part('template-parts/story-top'); ?>
          
    
                <h2 class="section-title wow fadeIn" date-wow-offset="50">STORY</h2>
                <div class="inner story-1-inner" >
                  <div class="story-1 wow fadeIn" date-wow-offset="50">
                    <?php
                    $story_1 = SCF::get('story_1');
                    echo $story_1;
                    ?>
                  </div><!--story-1-->
                </div><!--story-1-inner-->
          </div><!--top-->
            
          <div class="background-st-2">
            <div class="inner story-2-inner" >
             <div class="story-2 wow fadeIn" date-wow-offset="50">
                  <?php
                    $story_2 = SCF::get('story_2');
                    echo $story_2;
                    ?>
             </div><!--story-2-->
            </div><!--story-2-inner-->
          </div><!--background-st-2-->
          <div class="background-st-3">
             <div class="inner story-3-inner" >
                <div class="story-3 wow fadeIn" date-wow-offset="50">
                <?php
                    $story_3 = SCF::get('story_3');
                    echo $story_3;
                    ?>
                </div><!--story-3-->
            </div><!--story-3-inner-->
          </div><!--background-st-3-->
        
          <div class="background-st-4">
            <div class="inner story-4-inner" >
                <div class="story-4 wow fadeIn" date-wow-offset="50">
                <?php
                    $story_4 = SCF::get('story_4');
                    echo $story_4;
                    ?>
                </div><!--story-4-->
            </div><!--story-4-inner-->
          </div><!--background-st-4-->
   
       
       
        
       </main><!--story-container-->

       
       <?php get_footer();?>