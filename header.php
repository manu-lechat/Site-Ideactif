<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>ideactif</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

        <!-- header -->
  <header class="header_container">
    <section class="layout_container header">
      <a href="index.php" class="logo"><img src="img/logo.svg"  alt="Ideactif"></a>
      <ul class="menu_desktop" id="menu_desktop">
        <li><a href="vision.php" class="a1">NOTRE VISION</a></li>
        <li><a href="operations.php"  class="a2" >NOS OPÉRATIONS</a></li>
        <li><a href="ideamag.php"  class="a3">NOTRE MAG</a></li>
        <li><a href="nous_rejoindre.php"  class="a4">NOUS REJOINDRE</a></li>
        <li><a href="#" class="bt_contact bt_footer">CONTACTEZ-NOUS</a></li>
        <li><a href="#" class="bt_recherche"><img src="img/icon_search.svg" alt=""></a></li>
      </ul>
      <a class="icon_burger" id="bt_menu_mobile">
        <div class='line1'></div>
        <div class='line2'></div>
        <div class='line3'></div>
      </a>
    </section>
  </header>

  <section class="menu_mobile_container" id="menu_mobile_container">
    <a href="" class="bt_close" id="bt_close_menu_mobile">
      <div class='line1'></div>
      <div class='line2'></div>
    </a>
    <a href="" class="bt_search">
      <img class="bt_recherche" src="img/icon_search.svg" alt="">
    </a>
    <ul class="menu_mobile">
      <li><a href="vision.php" class="active">NOTRE VISION</a></li>
      <li><a href="operations.php">NOS OPÉRATIONS</a></li>
      <li><a href="ideamag.php">NOTRE MAG</a></li>
      <li><a href="nous_rejoindre.php">NOUS REJOINDRE</a></li>
      <li><a href="#" class="bt_contact">CONTACTEZ-NOUS</a></li>
    </ul>
  </section>

  <!-- <div class="zone_cookies">
    <p class="txt">Nous utilisons des cookies.</p>
    <a href="#" class="txt cookies_infos">En savoir plus</a>
    <a href="#" class="cookies_ok">J’accepte</a>
  </div> -->

<div id="catapult-cookie-bar" class="rounded-corners drop-shadow">
  <h3></h3>
  <span class="ctcc-left-side">Nous utilisons des cookies
    <a class="ctcc-more-info-link" tabindex="0" target="_blank" href="http://localhost/~benoit/idactif/cookie-policy/">En savoir plus</a>
  </span>
  <span class="ctcc-right-side">
    <button class="" id="catapultCookie" tabindex="0" onclick="catapultAcceptCookies();">J'accepte</button>
  </span>
</div>





<?php include ('modales.php'); ?>
