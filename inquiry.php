

<?php 
 /* 
  template name:お問い合わせ
 */
?>

<?php get_header();?>

   

    <main>
        <section class="inquiry">
            <div class="inquiry-inner inner">
              <h2 class="section-title">INQUIRY</h2>
                 
            

                        <div class="form">
                                <p class="form-suvtitle">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。</p>
                                <p class="form-suvtitle">公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
                                            お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
                                    <?php echo do_shortcode('[contact-form-7 id="164" title="お問い合わせ"]'); ?>
                        </div>
                  
            </div><!--inquiry-inner-->
        </section>
    </main>

     <?php get_footer();?>