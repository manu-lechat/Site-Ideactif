<?php
include("header.php");
?>
<script>
document.querySelector("#menu_desktop .a2").classList.add('active');
</script>

<main class="page_operations debugmode">

  <section class="menu_tag layout_container center">
    <h2 class="title">Nous avons à notre actif 583 projets !</h2>
    <div class="tag_container">
      <a href="#" class="active">Corporate</a>
      <a href="#">Sport</a>
      <a href="#">Marques</a>
      <a href="#">Lifestyle</a>
      <a href="#">Société</a>
      <a href="#">Culture</a>
      <a href="#">Musique</a>
    </div>
  </section>

      <?php include('mosaique_operations.php'); ?>

  <section class="layout_container bullets_container">
    <img src="img/bullets.svg" alt="">
  </section>


</main>


<?php include("footer.php"); ?>
