<?php if(! is_front_page()): ?>
        </div>
      </div>
    </main>
   </div>
  </div>
<?php endif; ?>

<footer>
        <section class="schedule">
          <div class="inner">
           
             <div class="schedule-inner">
              <h2 class="section-title">SCHEDULE</h2>
                  <div class="schedule-info">
                  <?php
                  $cast_top = SCF::get('schedule1',92);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                    <p><?php echo $fields['sc_date1']; ?> <?php echo $fields['sc_time1']; ?>　<?php echo $fields['sc_place1']; ?></p>
                    <a href=""><?php echo $fields['sc_link1']; ?></a>
                  <?php } ?>
                  </div><!---schedule-info-->

                  <div class="schedule-info">
                  <?php
                  $cast_top = SCF::get('schedule2',92);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                    <p><?php echo $fields['sc_date2']; ?> <?php echo $fields['sc_time2']; ?>　<?php echo $fields['sc_place2']; ?></p>
                    <a href=""><?php echo $fields['sc_link2']; ?></a>
                  <?php } ?>
                  </div><!---schedule-info-->
                  
                <div class="schedule-info">
                  <?php
                  $cast_top = SCF::get('schedule3',92);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                    <p><?php echo $fields['sc_date3']; ?> <?php echo $fields['sc_time3']; ?>　<?php echo $fields['sc_place3']; ?></p>
                    <a href=""><?php echo $fields['sc_link3']; ?></a>
                  <?php } ?>
                </div><!---schedule-info-->

                <div class="schedule-info">
                  <?php
                  $cast_top = SCF::get('schedule4',92);
                  foreach ($cast_top as $fields ) {
                  ?>
                  
                    <p><?php echo $fields['sc_date4']; ?> <?php echo $fields['sc_time4']; ?>　<?php echo $fields['sc_place4']; ?></p>
                    <a href=""><?php echo $fields['sc_link4']; ?></a>
                  <?php } ?>
                </div><!---schedule-info-->

              </div><!--schedule-inner-->
          </div><!--inner-->
        <div class="btn-schedule">
          <button class="btn-contact"  onclick="location.href='<?php echo get_page_link( 55 );?>'">お問い合わせはこちら</button>
          <button class="btn-ticket-s" onclick="location.href='<?php echo home_url( '/' );?>'">チケット予約サイトへ</button>
        </div><!--btn-achedule-->
        </section><!---schedule-->
        <div class="copy-right">
          <p>Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
        </div>
    </footer><!--footer-->
  
    
    <?php wp_footer();?>
      <!--wow.js-->
      <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
    <script>new WOW().init();</script>

  
    
</body>
</html>