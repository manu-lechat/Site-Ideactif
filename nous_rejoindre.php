<?php include("header.php"); ?>

<script>
document.querySelector("#menu_desktop .a4").classList.add('active');
</script>

<main class="page_nous_rejoindre">

    <section class="layout_container_100vh topscreen">

      <!-- zone recherche -->
      <div class="zone_recherche layout_intro appear_on_scroll">
        <h1 class="title">Je recherche un poste de</h1>
        <div class="selectZone" id="selectZone">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <ul class="listing">
                      <li><a href="#" id="open_selectZone">-- Choisissez --</a> </li>
                      <li><a href="#" class="show_annonce">  Chef de projet</a> </li>
                      <li><a href="#" class="show_annonce">Responsable Marketing</a> </li>
                      <li><a href="#" class="show_annonce">  Lead Developer</a> </li>
                      <li><a href="#" class="show_annonce">  Business Owner</a> </li>
                      <li><a href="#" class="show_annonce">  Community Manager</a> </li>
                    </ul>
                  </div>
              </div>
              <div class="swiper-scrollbar" id="nousRejoindreScrollbar"></div>
          </div>
        </div>
      </div>

      <!-- bubbles -->
      <div class="buble_container buble_trio_container appear_on_scroll">
          <img src="img/buble_blue.svg" alt="" class="buble_blue">
          <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
          <img src="img/buble_pink.svg" alt="" class="buble_pink">
      </div>
      <div class="buble_container buble_pink_container">
          <img src="img/buble_pink.svg" alt="" class="buble_pink">
      </div>
      <div class="buble_container buble_yellow_container">
          <img src="img/buble_yellow.svg" alt="" class="buble_yellow">
      </div>
    </section>

    <section id="zone_annonce appear_on_scroll">

      <section class="layout_FullWidth zone_titre">
        <section class="layout_container">
          <div class="img_container">
            <img src="img/tmp/illus_poste.jpg">
          </div>
          <h3 class="title">STAGIAIRE ASSISTANT(E) DE COMMUNICATION / COMMUNITY MANAGER</h3>
          <span class="separator"></span>
        </section>
      </section>

      <section class="layout_container appear_on_scroll">
        <article class="zone_annonce">
          <h3>Mission</h3>
          <p>
          Animation des réseaux sociaux (Facebook, Twitter, Linkedin ...)<br>
          Gestion et suivi des sites web<br>
          Suivi des chiffres clefs et des campagnes Adwords et Display en cours<br>
          Assistanat RP<br>
          Créations graphiques (Illustrator, Photoshop) et montage vidéos (Adobe Premier)<br>
          Collaboration à l'organisation d'événements internes
          </p>
          <h3>Profil recherché</h3>
          <p>Très organisé(e)
          Autonome & flexible<br>
          Dynamique<br>
          A l’écoute et motivé(e) par le travail d’équipe<br>
          La connaissance de Wordpress est un plus <br>
          La maîtrise du pack Adobe (Photoshop, Indesign, Premier...) est un gros plus :)
          </p>
          <h3>Durée du contrat</h3>
          <p>Stage de 6 mois conventionné obligatoirement<br>
          Pas de contrat de professionnalisation ni d'alternance
          </p>
          <h3>Niveau d'étude</h3>
          <p>  	BAC + 3 min.<br>
          Formation Communication / Ecole de commerce / Universités
          </p>
        </article>
      </section>

      <section class="layout_gris layout_FullWidth appear_on_scroll">
        <section class="layout_container">
          <div class="zone_contact">
            <h3 class="title">Contact</h3>
            <span class="separator"></span>


            <p class="name">Christelle SOREIL</p>
            <p  class="coordonnees">
            Tél : 01 56 33 47 80<br>
            christelle.soreil@ideactif.fr
            </p>
          </div>

          <div class="zone_decompte">
            <h3 class="title">Temps restant</h3>
            <span class="decompte" id="decompte">2j : 3h : 21min</span>
            <a href="#" class="bt_rounded bt_white_pink">Je postule</a>
          </div>

        </section>
      </section>

    </section>

</main>


<?php include("footer.php"); ?>
