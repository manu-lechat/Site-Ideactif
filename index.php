<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/rangeslider_custom.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>


    <section class="menu_mobile_container" id="menu_mobile_container">
      <a href="" class="bt_close" id="bt_close_menu_mobile">
        <div class='line1'></div>
        <div class='line2'></div>
      </a>
      <a href="" class="bt_search">
        <img src="img/icon_search.svg" alt="">
      </a>
      <ul class="menu_mobile">
        <li><a href="vision.php" class="active">NOTRE VISION</a></li>
        <li><a href="operations.php">NOS OPÉRATIONS</a></li>
        <li><a href="ideamag.php">NOTRE MAG</a></li>
        <li><a href="nous_rejoindre.php">NOUS REJOINDRE</a></li>
        <li><a href="contact.php">CONTACTEZ-NOUS</a></li>
        <li></li>
      </ul>
    </section>



  <main class="homePage debugmode">

    <!-- homepage topscreen -->
    <section class="layout_container_100vh_100vw topscreen">
      <div class="zone_logo">
        <img src="img/home_topscreen_logo.svg" alt="" class="logo">
        <div class="buble_container buble_trio_logo">
            <img src="img/buble_blue.svg" alt="" class="buble_blue">
            <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
            <img src="img/buble_pink.svg" alt="" class="buble_pink">
        </div>
      </div>
      <div class="buble_container buble_trio_bg">
          <img src="img/buble_blue.svg" alt="" class="buble_blue">
          <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
          <img src="img/buble_pink.svg" alt="" class="buble_pink">
      </div>
      <div class="buble_container buble_trio_hd">
          <img src="img/buble_blue.svg" alt="" class="buble_blue">
          <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
          <img src="img/buble_pink.svg" alt="" class="buble_pink">
      </div>
      <div class="bg_topscreen">
        <img src="img/bg_home_topscreen.svg" alt="" class="">
      </div>
      <img src="img/home_topscreen_fleche.svg" alt="" class="home_topscreen_fleche">
    </section>

    <!-- header -->
    <header class="header_container" id="homePage_header">
      <section class="layout_container header">
        <a href="index.php" class="logo"><img src="img/logo.svg"  alt="Ideactif"></a>
        <ul class="menu_desktop" id="menu_desktop">
          <li><a href="vision.php" class="a1">NOTRE VISION</a></li>
          <li><a href="operations.php"  class="a2" >NOS OPÉRATIONS</a></li>
          <li><a href="ideamag.php"  class="a3">NOTRE MAG</a></li>
          <li><a href="nous_rejoindre.php"  class="a4">NOUS REJOINDRE</a></li>
          <li><a href="#" class="a5 bt_footer">CONTACTEZ-NOUS</a></li>
          <li><a href="recherche.php"><img src="img/icon_search.svg" alt=""></a></li>
        </ul>
        <a class="icon_burger" id="bt_menu_mobile">
          <div class='line1'></div>
          <div class='line2'></div>
          <div class='line3'></div>
        </a>
      </section>
    </header>

    <!-- intro -->
    <section class="layout_intro layout_container" id="homePage_intro">
      <div class="zone_logo">
        <div class="buble_container buble_trio_logo">
            <img src="img/buble_blue.svg" alt="" class="buble_blue">
            <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
            <img src="img/buble_pink.svg" alt="" class="buble_pink">
        </div>
        <img src="img/home_topscreen_logo.svg" alt="" class="logo">
      </div>
      <div class="zone_txt">
        <h2 class="title">Nous générons des émotions</h2>
        <p class="center"> Les sollicitations perpétuelles, immédiates et distantes des médias traditionnels manquent d’impact. Il faut échanger avec son public. Il est temps pour les marques et leurs publics de : se rencontrer, dialoguer, vivre, partager.</p>
        <a href="vision.php" class="bt_rounded bt_yellow_white">Voir plus</a>
      </div>
      <div class="bg_topscreen">
        <img src="img/bg_home_topscreen.svg" alt="" class="">
      </div>
    </section>

    <!-- mosaique operations -->
    <?php include('mosaique_operations.php'); ?>

    <section class="layout_container zone_text_pink">
      <p><span class="txt_pink bold">25M</span> de personnes touchées en <span class="txt_pink bold">25 ans !</span></p>
      <a href="operations.php" class="bt_rounded bt_pink_white">Voir plus</a>
    </section>

    <!-- story -->
    <section class="layout_container zone_story">
      <div class="img_container">
        <img src="img/tmp/story.jpg" alt="">
      </div>
      <div class="zone_color">
        <h2 class="title">Tour de France Cycliste : Arnaud Peyroles <br>d’Ideactif</h2>
        <h3 class="subtitle">23 janvier 2017</h3>
        <span class="separator"></span>
        <p>
          Depuis 2001, l’agence Idéactif est indissociable du Tour de France Cycliste dont elle conseille plusieurs marques partenaires. Son P.-D.G, Arnaud Peyroles, revient sur cette longue collaboration avec le 3e événem…
        </p>
        <a href="" class="bt_rounded bt_blue_white">Lire plus</a>
      </div>
    </section>

    <!-- newsletter -->
    <section class="layout_container zone_newsletter">
      <div class="zone_txt">
        <h3 class="fs_36 bold">NEWSLETTER</h3>
        <p class="fs_36">8000 abonnés et vous ?</p>
      </div>
        <div class="input_border">
        <input type="text" name="" value="Inscrivez vous à la newsletter">
        <a href="" class="send"></a>
      </div>
    </section>

    <!-- social huge -->
    <section class="layout_container zone_social_huge">


      <a href="https://www.facebook.com/Ideactif" class="fb social_huge" target="_blank">

        <p class="accroche"><span class="huge">15k</span><br> J’aime</p>
        <p class="signature">/ideactif</p>
        <img src="img/social_huge_fb.svg" class="mask" alt="">
         <div class="buble_container buble_trio_container">
             <img src="img/buble_blue.svg" alt="" class="buble_blue">
             <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
             <img src="img/buble_pink.svg" alt="" class="buble_pink">
         </div>
      </a>
      <a href="https://www.instagram.com/agence_ideactif/" class="insta social_huge" target="_blank">
        <p class="accroche"><span class="huge">10k</span><br> followers</p>
        <p class="signature">@ideactif</p>

        <img src="img/social_huge_insta.svg" class="mask" alt="">
         <div class="buble_container buble_trio_container">
             <img src="img/buble_blue.svg" alt="" class="buble_blue">
             <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
             <img src="img/buble_pink.svg" alt="" class="buble_pink">
         </div>
      </a>
    </section>

  </main>

<?php include("footer.php"); ?>
