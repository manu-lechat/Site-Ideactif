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
    <link rel="stylesheet" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!-- header -->
    <header class="header_container" id="homePage_header">
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
        <img src="img/icon_search.svg" class="bt_recherche" alt="">
      </a>
      <ul class="menu_mobile">
        <li><a href="vision.php" class="active">NOTRE VISION</a></li>
        <li><a href="operations.php">NOS OPÉRATIONS</a></li>
        <li><a href="ideamag.php">NOTRE MAG</a></li>
        <li><a href="nous_rejoindre.php">NOUS REJOINDRE</a></li>
        <li><a href="#" class="bt_contact">CONTACTEZ-NOUS</a></li>
        <li></li>
      </ul>
    </section>

    <div class="zone_cookies">
      <p class="txt">Nous utilisons des cookies.</p>
      <a href="#" class="txt cookies_infos">En savoir plus</a>
      <a href="#" class="cookies_ok">J’accepte</a>
    </div>

    <?php include ('modales.php'); ?>





      <!-- homepage topscreen -->
      <section id="homeStart" class="layout_container_100vh_100vw homeStart">

        <div class="zone_logo">
          <div class="buble_container buble_trio_logo">
              <img src="img/buble_blue.svg" alt="" class="buble_blue">
              <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
              <img src="img/buble_pink.svg" alt="" class="buble_pink">
          </div>
          <img src="img/home_topscreen_logo.svg" alt="" class="logo">
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
      </section>


    <div id="fullpage">
    	<div class="section active fullpage_slide" id="section0">
        <!-- slide fullpage -->

        <a class="fleche_container" href="#" id="home_fleche_start">
        <img src="img/home_topscreen_fleche.svg" alt="" class="home_topscreen_fleche">
        </a>

        <!-- /slide fullpage -->
      </div>




    	<div class="section fullpage_slide" id="section1">
        <!-- slide fullpage -->



        <main class="homePage" id="homePage">



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
              <h1>Nous générons des émotions</h1>
              <p>Les sollicitations perpétuelles, immédiates et distantes des médias traditionnels manquent d’impact. Il faut échanger avec son public.</p>
              <p><a class="bt_rounded bt_yellow_white" href="http://www.ideactest.com/notre-vision/">Voir plus</a></p>
            </div>
            <div class="bg_topscreen">
              <img src="img/bg_home_topscreen.svg" alt="" class="">
            </div>
          </section>

          <!-- mosaique operations -->
          <?php include('mosaique_operations.php'); ?>

          <section class="layout_container zone_text_pink appear_on_scroll " >
            <p><span class="txt_pink bold">25M</span> de personnes touchées en <span class="txt_pink bold">25 ans !</span></p>
            <a href="operations.php" class="bt_rounded bt_pink_white">Voir plus</a>
          </section>

          <!-- story -->
          <section class="layout_container zone_story appear_on_scroll appear">
          			<div class="img_container">
          			<img src="http://www.ideactest.com/wp-content/themes/idactif/img/tmp/story.jpg" alt="">
          		</div>
          		<div class="zone_color">
          			<h2 class="title">Hello world!</h2>
                <h3 class="subtitle">23 janvier 2017</h3>
          			<span class="separator"></span>
          			<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
                <a href="" class="bt_rounded bt_blue_white">Lire plus</a>
          		</div>
          	</section>


          <!-- newsletter -->

          <section class="layout_container zone_newsletter appear_on_scroll appear">
            <div class="zone_txt">
              <h3 class="fs_36 bold">NEWSLETTER</h3>
              <p class="fs_36">8000 abonnés et vous ?</p>
            </iv>
            <div class="input_border"><h2 class="widget-title"> </h2>
            <form id="sib_signup_form_1" method="post" class="sib_signup_form">
      				<!-- <div class="sib_loader" style="display:none;">
                <img src="http://localhost/~benoit/idactif/wp-includes//images/spinner.gif" alt="loader">
              </div> -->
      				<input type="hidden" name="sib_form_action" value="subscribe_form_submit">
      				<input type="hidden" name="sib_form_id" value="1">
      				<div class="sib_signup_box_inside_1">
      					<div style="" class="sib_msg_disp">
      					</div>
      					<input type="email" name="email" required="required" placeholder="Inscrivez vous à la newsletter">
                <input type="submit" class="send" value="">
              </div>
      			</form>
      			</div>
          </section>

          <!-- social huge -->
          <section class="layout_container zone_social_huge appear_on_scroll">


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

        <!-- /slide fullpage -->
      </div>
    </div>
