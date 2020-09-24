<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完全版マハーバラタ</title>
   <meta name="description" content=""> 
    <!--googlefont-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
      <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost:8888/30days.wp/confilm/'; //サンクスページURL
    }, false );
    </script>
   

</head>
<body <?php body_class(); ?>>
    <header>
      <?php if(is_front_page()): ?>
<ul class="global-nav">
            <li><a class="nav-top" href="<?php echo home_url( '/' );?>">トップ</a></li>
            <li><a class="nav-news" href="<?php echo get_page_link( 120 );?>">ニュース</a></li>
            <li><a class="nav-story" href="<?php echo get_page_link( 51 );?>">ストーリー</a></li>
            <li><a class="nav-comic" href="<?php echo get_page_link( 173 );?>">マンガ</a></li>
            <li><a class="nav-comments" href="<?php echo get_page_link( 53 );?>">著名人コメント</a></li>
            <li><a class="nav-cast" href="<?php echo get_page_link( 36 );?>">キャスト</a></li>
            <li><a class="nav-inquiry" href="<?php echo get_page_link( 55 );?>">問い合わせ</a></li>
            <li><a class="nav-reserve" href="<?php echo home_url( '/' );?>">ご予約</a></li>
        </ul><!--global-nav-->
        <section class="top">
          <div class="inner">
              <h1 class="top-title"><img src="<?php echo get_template_directory_uri() ?>/img/top-title.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化"></h1>
            <div class="top-under row row-justify-content-between">
              <p class="col-md-6 top-schedule"><img src="<?php echo get_template_directory_uri() ?>/img/schedule.png" alt="2020年7月4日〜7日 なかのZERO大ホール"></p>
              <p class="col-md-6 top-content">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
                アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                </p>
            </div><!--top-under-->
          </div><!--inner-->
          <div class="inner">
            <button class="btn-ticket" onclick="location.href='<?php echo home_url( '/' );?>'">チケット予約サイトへ</button>
           </div> <!--inner-->
        </section><!--top-->

      </header><!--header-->

      <?php else: ?>

        <header>
        <ul class="global-nav">
        <li><a class="nav-top" href="<?php echo home_url( '/' );?>">トップ</a></li>
            <li><a class="nav-news" href="<?php echo get_page_link( 120 );?>">ニュース</a></li>
            <li><a class="nav-story" href="<?php echo get_page_link( 51 );?>">ストーリー</a></li>
            <li><a class="nav-comic" href="<?php echo get_page_link( 173 );?>">マンガ</a></li>
            <li><a class="nav-comments" href="<?php echo get_page_link( 53 );?>">著名人コメント</a></li>
            <li><a class="nav-cast" href="<?php echo get_page_link( 36 );?>">キャスト</a></li>
            <li><a class="nav-inquiry" href="<?php echo get_page_link( 55 );?>">問い合わせ</a></li>
            <li><a class="nav-reserve" href="<?php echo home_url( '/' );?>">ご予約</a></li>
        </ul><!--global-nav-->
        </header><!--header-->

        <div class="top">
          <div class="inner top-inner row">
              <p class="top-title col-md-8"><img src="<?php echo get_template_directory_uri();?>/img/top-title.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化"></p>
              <p class="col-md-3  top-schedule"><img src="<?php echo get_template_directory_uri();?>/img/schedule.png" alt="2020年7月4日〜7日 なかのZERO大ホール"></p>
          </div><!--inner-->
          <div class="inner btn-inner">
            <button class="btn-ticket" onclick="location.href='<?php echo home_url( '/' );?>'">チケット予約サイトへ</button>
           </div> <!--inner-->
        </div><!--top-->
        

              <!-- breadcrumb -->
            <div class="inner">
                <div class="breadcrumb">
                   <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div><!-- /breadcrumb -->
            </div>

      <?php endif;?>

    