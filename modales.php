<!-- modale -->
<section class="modale_container" id="modale_container">

    <!-- modale recherche -->
    <section class="modale modale_recherche" id="modale_recherche">
      <!-- <form class="" action="index.html" method="post">
        <div class="input_border">
          <input id="rechercher" type="text" value="rechercher un contenu..." class="input_rechercher" />
          <a href="recherche.php" class="send"></a>
        </div>
      </form> -->
      <form class="" action="index.html" method="post">
        <div class="input_border">

				<label>
					<span class="screen-reader-text">Rechercher&nbsp;:</span>
					<input type="search" class="search-field" placeholder="Recherche…" value="" name="s">
				</label>
				<input type="submit" class="search-submit" value="Rechercher">

        </div></form>
      
    </section>


  <!-- modale contact -->
  <section class="modale modale_contact" id="modale_contact">
    <form class="" action="index.html" method="post">
      <div>
        <h2 class='title'>Formulaire de contact</h2>
      </div>
      <div class="col_alf">
        <label for="Nom">Nom</label>
        <input id="Nom" type="text" />
      </div>
      <div class="col_alf">
        <label for="Prenom">Prénom</label>
        <input id="Prenom" type="text"  />
      </div>
      <div>
        <label for="Email">Email</label>
        <input id="Email" type="text"  />
      </div>
      <div>
        <label for="Objet">Objet</label>
        <select name="Objet" id="Objet">
         <option value="2">Premier contact</option>
         <option value="3">Offre d'emploi</option>
        </select>
      </div>
      <div>
        <label for="Objet">message</label>
        <textarea id="message" name="message" style="height:8em"></textarea>
      </div>
      <div>
        <a href="" class="bt_rounded bt_blue_white">Contactez-nous</a>
      </div>
    </form>
  </section>





  <!-- modale bg -->
  <section class="modale_bg" id="modale_bg"></section>

  <!-- bouton close modale  -->
  <a href="" class="bt_close" id="bt_close_modale">
    <div class="bg"></div>
    <div class='line1 line'></div>
    <div class='line2 line'></div>
  </a>

</section>
