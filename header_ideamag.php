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
    
    <div class="zone_cookies">
      <p class="txt">Nous utilisons des cookies.</p>
      <a href="#" class="txt cookies_infos">En savoir plus</a>
      <a href="#" class="cookies_ok">J’accepte</a>
    </div>

    <?php include ('modales.php'); ?>
