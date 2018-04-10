<?php
include("header.php");
?>
<script>
document.querySelector("#menu_desktop .a2").classList.add('active');
</script>

<main class="page_operations">

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

  <section class="layout_container">

    <div class="bullets_loader">
      <img src="img/3bullets_loader_blue.svg" class="blue" alt="">
      <img src="img/3bullets_loader_yellow.svg" class="yellow" alt="">
      <img src="img/3bullets_loader_red.svg" class="red" alt="">
    </div>

    <a href="#" class="bt_up_center bt_gotop"></a>

  </section>


</main>


<?php include("footer.php"); ?>
