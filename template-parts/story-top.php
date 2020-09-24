<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <!--googlefont-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
      <!--wow.js-->
      <script>new WOW().init();</script>
    <?php wp_head(); ?>

</head>
<body>
     <header>
        <ul class="global-nav">
        <li><a class="nav-top" href="<?php echo home_url( '/' );?>">トップ</a></li>
            <li><a class="nav-news" href="<?php echo get_page_link( 120 );?>">ニュース</a></li>
            <li><a class="nav-story" href="<?php echo get_page_link( 51 );?>">ストーリー</a></li>
            <li><a class="nav-comic" href="<?php echo get_page_link( 173 );?>">マンガ</a></li>
            <li><a class="nav-comments" href="<?php echo get_page_link( 53 );?>">著者名コメント</a></li>
            <li><a class="nav-cast" href="<?php echo get_page_link( 36 );?>">キャスト</a></li>
            <li><a class="nav-inquiry" href="<?php echo get_page_link( 55 );?>">問い合わせ</a></li>
            <li><a class="nav-reserve" href="">ご予約</a></li>
        </ul><!--global-nav-->
    </header>

      <main class="story-container">
          <div class="top story-top">
                <div class="inner top-inner row">
                    <p class="top-title col-md-8"><img src="<?php echo get_template_directory_uri() ?>/img/top-title.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化"></p>
                    <p class="col-md-3  top-schedule"><img src="<?php echo get_template_directory_uri() ?>/img/schedule.png" alt="2020年7月4日〜7日 なかのZERO大ホール"></p>
                    <div class="inner btn-inner">
                        <button class="btn-ticket">チケット予約サイトへ</button>
                    </div> <!--inner-->
                </div> <!--top-inner-->


              <!-- breadcrumb -->
            <div class="inner">
                <div class="breadcrumb story-breadcrumb">
                   <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                </div><!-- /breadcrumb -->
            </div>