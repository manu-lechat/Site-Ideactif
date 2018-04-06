<?php include("header.php"); ?>
<script>
document.querySelector("#menu_desktop .a1").classList.add('active');
</script>


<!-- page vision -->

<main class="page_vision ">

  <section class="layout_container layout_intro appear_on_scroll">
    <article>
      <h1 class='title'>Nous générons des émotions</h1>
      <p>
        Les sollicitations perpétuelles, immédiates et distantes des <span class='txt_blue medium'>médias traditionnels </span>manquent d’impact. Il faut échanger avec son public. Il est temps pour les marques et leurs publics de : se rencontrer, dialoguer, vivre, partager. L’expérience vécue lors de<span class='txt_blue medium'> nos événements </span>est un outil stratégique de développement des marques, de
        leur notoriété et de leur image.
      </p>
      <p>
        Nous fabriquons des souvenirs Parce que nous croyons qu’une sollicitation de qualité forge le souvenir, Parce que nous croyons que le souvenir créé une relation durable, Parce que nous croyons qu’une relation durable est un levier de croissance puissant. Nous créons des événements, nous générons des émotions, nous fabriquons des <span class='txt_blue medium'>souvenirs</span> inoubliables.
      </p>
      <p>
        <span class='txt_blue medium'>Nos événements</span> restent gravés dans les esprits pour se convertir en « top of mind », en affinité puis en adhésion Notre stratégie événementielle, avec un concept fort et créatif, fait naître la préférence de marque, <span class='txt_blue medium'>l’engagement</span> et l’intention d’achat.
        <p>
          <p class='center'>
            Nous sommes Idéactif
          </p>
        </p>
      </article>
    </section>


    <section class="layout_container layout_condensed">
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_social.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum facilisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_accompagnment.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum facilisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_digital.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum facilisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_echange.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum facilisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_mediatisation.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum faci clisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
      <article class="article_icone appear_on_scroll">
        <img src="img/vision_icon_partage.png" alt="" class="">
        <h2 class='title'>LOREP IPSUM</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum faci clisis nibh ut facilisis. Maecenas odio elit, posuere rutrum mauris nec, iaculis eleifend lectus.</p>
      </article>
    </section>

    <!-- timeline slider -->
    <section  class="layout_container zone_rangeslider appear_on_scroll">
        <div class="nouislider" id='nouislider'>
          <div id="slider" class="slider">
            <div class="pointer"></div>
          </div>
          <div class="puce_gauche"></div>
          <div class="puce_droite"></div>
          <div class="label1">2000</div>
          <div class="label2">2008</div>
        </div>


    </section>


    <!-- ideactif time story -->
    <section class=" layout_FullWidth zone_time_story appear_on_scroll">
      <?php include('vision_story_slider.php'); ?>
    </section>

    <section class="layout_gris layout_FullWidth appear_on_scroll">
      <section class="layout_container">
      <?php  include('vision_teams_leader_slider.php'); ?>
      </section>
    </section>

    <section class="layout_blue layout_FullWidth vision_zone_blue appear_on_scroll" id="vision_zone_blue">
      <section class="layout_container">
      <?php  include('vision_teams_slider.php'); ?>
      </section>
    </section>

</main>



<?php  include("footer.php"); ?>
