<?php 
 /* 
  template name:コメント
 */
?>


<?php get_header();?>

    <main>
        <section class="comments">
            <div class="inner">
             <h2 class="section-title">COMMENTS</h2>
             <p class="comments-lead">舞台関係者のみならず各界著名人からコメントが届いています！</p>
             <div class="comments-card">
             <img class="comments-sm" src="<?php echo get_template_directory_uri() ?>/img/comments.jpg" alt="">

               <div class="comments-card-inner">

               <?php
                  $cast_top = SCF::get('cm_top');
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
                </div><!--comments-card-inner-->
             </div><!--comments-card-->

            </div><!--inner-->
          </section><!---comments-->
        <div class="inner comment-list-inner  wow fadeIn" date-wow-offset="50">
            <dd class="comment-content">

            <?php
                  $cast_top = SCF::get('cm_list');
                  foreach ($cast_top as $fields ) {
                  ?>
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
            </dd>

              <dd class="comment-content">  
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
              </dd>
            
               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
               </dd>

               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
               </dd>

               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
               </dd>

               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
               </dd>

               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
               </dd>

                <dd class="comment-content">
                  <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                  <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
                </dd>

               <dd class="comment-content">
                <h3><?php echo $fields['cm_list_name']; ?><span><?php echo $fields['cm_list_work']; ?></span></h3>
                <p> <?php echo nl2br($fields['cm_list_comment']); ?></p>
                </dd>
            <?php } ?>
        </div><!--inner-->

    </main>

   
    <?php get_footer();?>