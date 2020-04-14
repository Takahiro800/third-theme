<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/openclose.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu_pagetop.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ddmenu_min.js"></script>
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header>
    <div class="inner">
      <h1 id="logo"><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      <p id="tel">TEL:00-0000-0000<span>受付：00:00〜00:00　定休日：水曜日</span></p>
    </div>
  </header>

  <!--PC用（901px以上端末）メニュー-->
  <nav id="menubar" class="nav-fix-pos">
    <ul class="inner">
      <li class="current"><a href="index.html">ホーム<span>Home</span></a></li>
      <li><a href="list_base.html">求人一覧<span>Recruit</span></a>
        <ul class="ddmenu">
          <li><a href="<?php echo get_category_link(2); ?>"><?php echo get_category(2) -> name; ?>（<?php echo get_category(2) -> count; ?>件）</a></li>
          <li><a href="<?php echo get_category_link(3); ?>"><?php echo get_category(3) -> name; ?>（<?php echo get_category(3) -> count; ?>）</a></li>
          <li><a href="<?php echo get_category_link(4); ?>"><?php echo get_category(4) -> name; ?>（<?php echo get_category(4) -> count; ?>件）</a></li>
          <li><a href="<?php echo get_category_link(5); ?>"><?php echo get_category(5) -> name; ?>（<?php echo get_category(5) -> count; ?>件）</a></li>
          <li><a href="<?php echo get_category_link(6); ?>"><?php echo get_category(6) -> name; ?>（<?php echo get_category(6) -> count; ?>件）</a></li>
          <li><a href="<?php echo get_category_link(7); ?>"><?php echo get_category(7) -> name; ?>（<?php echo get_category(7) -> count; ?>件）</a></li>
          <li><a href="<?php echo get_category_link(8); ?>"><?php echo get_category(8) -> name; ?>（<?php echo get_category(8) -> count; ?>件）</a></li>

        </ul>
      </li>
      <?php
      $args = array(
        'menu' => 'global-navigation',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
    </ul>
  </nav>
  <!--小さな端末用（900px以下端末）メニュー-->
  <nav id="menubar-s">
    <ul>
      <li class="current"><a href="index.html">ホーム<span>Home</span></a></li>
      <li><a href="list_base.html">求人一覧<span>Recruit</span></a></li>
      <li><a href="info.html">掲載のご案内<span>Information</span></a></li>
      <li><a href="faq.html">よく頂く質問<span>Faq</span></a></li>
      <li><a href="link.html">リンク<span>Link</span></a></li>
      <li><a href="contact.html">お問い合わせ<span>Contact</span></a></li>
    </ul>
  </nav>

  <!--スライドショー-->
  <aside id="mainimg">
    <img src="images/0.png" alt="" class="slide0">
    <img src="images/1.jpg" alt="" class="slide1">
    <img src="images/2.jpg" alt="" class="slide2">
    <img src="images/3.jpg" alt="" class="slide3">
  </aside>