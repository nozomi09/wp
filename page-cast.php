<?php 
 /* 
  template name:キャスト
 */
?>

<?php get_header();?>

    <main>
        <section class="cast">
            <div class="background"></div>
            <div class="inner">
              <h2 class="section-title">CAST</h2>
              <div class="cast-items wow fadeIn" date-wow-offset="50">
                
                <div class="cast-card-item">
                  <div class="cast_img">

                  <?php 
                  $cast_top = SCF::get('cast_top');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top');
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
                  $cast_top = SCF::get('cast_top2');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img2'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top2');
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
                  $cast_top = SCF::get('cast_top3');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_img3'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                  </div>

                  <?php
                  $cast_top = SCF::get('cast_top3');
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
            </div><!--inner-->
          </section><!---cast-->

          <div class="cast-list-inner inner wow fadeIn" date-wow-offset="50">
          <dl class="cast-list">
                <dt>  <?php 
                  $cast_top = SCF::get('cast_list');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_list_img'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                </dt>

                     <dd>
                     <?php
                            $cast_top = SCF::get('cast_list');
                            foreach ($cast_top as $fields ) {
                            ?>
                         <h3><span><?php echo $fields['cast_list_position']; ?></span><?php echo $fields['cast_list_name']; ?><span><?php echo $fields['cast_list_work']; ?></span></h3>

                         <p><?php echo nl2br($fields['cast_list_profile']); ?></p>
                     </dd>
                      <?php } ?>
             </dl><!--cast-list-->

            <dl class="cast-list">
                <dt>  <?php 
                  $cast_top = SCF::get('cast_list2');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_list_img2'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                </dt>

                     <dd>
                     <?php
                            $cast_top = SCF::get('cast_list2');
                            foreach ($cast_top as $fields ) {
                            ?>
                         <h3><span><?php echo $fields['cast_list_position2']; ?></span><?php echo $fields['cast_list_name2']; ?><span><?php echo $fields['cast_list_work2']; ?></span></h3>

                         <p><?php echo nl2br($fields['cast_list_profile2']); ?></p>
                     </dd>
                      <?php } ?>
             </dl><!--cast-list-->

             <dl class="cast-list">
                <dt>  <?php 
                  $cast_top = SCF::get('cast_list3');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_list_img3'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                </dt>

                     <dd>
                     <?php
                            $cast_top = SCF::get('cast_list3');
                            foreach ($cast_top as $fields ) {
                            ?>
                         <h3><span><?php echo $fields['cast_list_position3']; ?></span><?php echo $fields['cast_list_name3']; ?><span><?php echo $fields['cast_list_work3']; ?></span></h3>

                         <p><?php echo nl2br($fields['cast_list_profile3']); ?></p>
                     </dd>
                      <?php } ?>
             </dl><!--cast-list-->

             <dl class="cast-list">
                <dt>  <?php 
                  $cast_top = SCF::get('cast_list4');	
                  foreach ($cast_top as $fields ) {
                      $imgurl = wp_get_attachment_image_src($fields['cast_list_img4'] , 'full');
                  ?>
                  <img src="<?php echo $imgurl[0]; ?>" width="<?php echo $imgurl[1]; ?>" height="<?php echo $imgurl[2]; ?>" >
                  <?php } ?>
                </dt>

                     <dd>
                     <?php
                            $cast_top = SCF::get('cast_list4');
                            foreach ($cast_top as $fields ) {
                            ?>
                         <h3><span><?php echo $fields['cast_list_position4']; ?></span><?php echo $fields['cast_list_name4']; ?><span><?php echo $fields['cast_list_work4']; ?></span></h3>

                         <p><?php echo nl2br($fields['cast_list_profile4']); ?></p>
                     </dd>
                      <?php } ?>
             </dl><!--cast-list-->
          </div><!--cast-list-inner-->

          <div class="cast-list-2">
              <div class=" cast-list-2-inner inner wow fadeIn" date-wow-offset="50">
              
              <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position']; ?></span><?php echo $fields['cast_under_name']; ?><span><?php echo $fields['cast_under_work']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under2');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position2']; ?></span><?php echo $fields['cast_under_name2']; ?><span><?php echo $fields['cast_under_work2']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                   <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under3');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position3']; ?></span><?php echo $fields['cast_under_name3']; ?><span><?php echo $fields['cast_under_work3']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position']; ?></span><?php echo $fields['cast_under_name']; ?><span><?php echo $fields['cast_under_work']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under2');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position2']; ?></span><?php echo $fields['cast_under_name2']; ?><span><?php echo $fields['cast_under_work2']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                   <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under3');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position3']; ?></span><?php echo $fields['cast_under_name3']; ?><span><?php echo $fields['cast_under_work3']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position']; ?></span><?php echo $fields['cast_under_name']; ?><span><?php echo $fields['cast_under_work']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under2');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position2']; ?></span><?php echo $fields['cast_under_name2']; ?><span><?php echo $fields['cast_under_work2']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                   <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under3');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position3']; ?></span><?php echo $fields['cast_under_name3']; ?><span><?php echo $fields['cast_under_work3']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position']; ?></span><?php echo $fields['cast_under_name']; ?><span><?php echo $fields['cast_under_work']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under2');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position2']; ?></span><?php echo $fields['cast_under_name2']; ?><span><?php echo $fields['cast_under_work2']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->

                   <div class="cast-list-name">
                <?php
                            $cast_top = SCF::get('cast_under3');
                            foreach ($cast_top as $fields ) {
                            ?>
                    <h3><span><?php echo $fields['cast_under_position3']; ?></span><?php echo $fields['cast_under_name3']; ?><span><?php echo $fields['cast_under_work3']; ?></span></h3>
                    <?php } ?>
                </div><!--cast-list-name-->


              </div><!--cast-list-inner-->
          </div><!--cast-list-2-->
          
    </main>

  <?php get_footer();?>