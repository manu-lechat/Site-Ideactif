<?php
include("header.php");
?>


<main class="page_recherche ">

  <section class="layout_container center">
    <h2 class="title">De quoi avez-vous besoin aujourd’hui ?</h2>

    <div class="encart_recherche">
        <div class="input_border">
      <form class="" action="index.html" method="post">

          <input id="rechercher" type="text" value="Test" class="input_rechercher" />
          <a href="recherche.php" class="send"></a>

      </form>
        </div>

        <div class="zone_tags">
          <span class="title">Les plus recherchés :</span>

            <a href="#">Corporate</a>
            <a href="#">Event</a>
            <a href="#">Interface</a>
        </div>
    </div>

    <p class="fs_20 info_results">21 résultats pour la recherche « test ».</p>



  </section>

      <?php include('mosaique_operations.php'); ?>

  <section class="layout_container">

    <div class="bullets_loader">
      <img src="img/3bullets_loader_blue.svg" class="blue" alt="">
      <img src="img/3bullets_loader_yellow.svg" class="yellow" alt="">
      <img src="img/3bullets_loader_red.svg" class="red" alt="">
      </div>

  </section>


</main>


<?php include("footer.php"); ?>
