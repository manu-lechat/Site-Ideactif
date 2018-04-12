<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!-- header -->
    <header class="header_mag_container">
      <section class="layout_container header">
        <a href="ideamag.php" class="logo"><img src="img/logoWhite.svg"  alt="Ideactif"></a>
        <ul class="menu_desktop" id="menu_desktop">
          <li><a href="#" class="a1">ART</a></li>
          <li><a href="#"  class="a2" >TECHNOLOGIE</a></li>
          <li><a href="#"  class="a3">CRÉATION</a></li>
          <li><a href="#"  class="a4">DESIGN</a></li>
          <li><a href="#"  class="a5">MUSIQUE</a></li>
          <li><a href="#"  class="bt_recherche"><img src="img/iconWhite_search.svg" alt=""></a></li>
        </ul>
        <a class="icon_burger" id="bt_menu_mobile">
          <div class='line1'></div>
          <div class='line2'></div>
          <div class='line3'></div>
        </a>
      </section>
    </header>

    <section class="menu_mobile_container menu_mobile_container menu_mobile_mag_container" id="menu_mobile_container">
      <a href="" class="bt_close" id="bt_close_menu_mobile">
        <div class='line1'></div>
        <div class='line2'></div>
      </a>
      <a href="" class="bt_search">
        <img  class="bt_recherche" src="img/iconWhite_search.svg" alt="">
      </a>
      <ul class="menu_mobile">
        <li><a href="#" class="a1">ART</a></li>
        <li><a href="#"  class="a2" >TECHNOLOGIE</a></li>
        <li><a href="#"  class="a3">CRÉATION</a></li>
        <li><a href="#"  class="a4">DESIGN</a></li>
        <li><a href="#"  class="a5">MUSIQUE</a></li>
        <li></li>
      </ul>
    </section>

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
