<?php
include("header.php");
?>


<main class="page_recherche ">


  <section class="layout_container center">
    <h2 class="title">De quoi avez-vous besoin aujourd’hui ?</h2>

    <div class="encart_recherche">
        <div class="input_border">
      <div id="algolia-search-box">
        <a href="recherche.php" class="send"></a>
      <input autocapitalize="off" autocomplete="off" autocorrect="off" placeholder="Rechercher pour..." role="textbox" spellcheck="false" type="search" value="" class="ais-search-box--input input_rechercher"></div>
        </div>

        <!--<div class="zone_tags">
          <span class="title">Les plus recherchés :</span>

            <a href="#">Corporate</a>
            <a href="#">Event</a>
            <a href="#">Interface</a>
        </div>-->
    </div>

    <p class="fs_20 info_results"></p><div id="algolia-stats"><div><div class="ais-root ais-stats"><div class="ais-body ais-stats--body"><div>

18 results
<span class="ais-stats--time">found in 1ms</span></div></div></div></div></div><p></p>
</section>



<section id="algolia-hits" class="mozaique_operations layout_container infinite_scroll"><div class="ais-hits"><div class="ais-hits--item">
		<a href="http://www.ideactest.com/passe-present-et-futur-les-trois-temps-de-levenement/" class="operation_item appear_on_scroll appear" id="post-100">

				<img src="http://www.ideactest.com/wp-content/uploads/2018/04/article-lévénement-1-150x150.jpg" alt="" class="bg_img">


			<div class="txt_container">
				<h3 class="title">Passé présent et futur, les trois temps de l’événement</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/ubisoft-rocksmith/" class="operation_item appear_on_scroll appear" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/04/rock-smith-768x256.png" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">UBISOFT - ROCKSMITH</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/nikon-2/" class="operation_item appear_on_scroll appear" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/559685_10151760174044321_895376119_n-768x468.png" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">NIKON</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/judo-tour-littoral-mazda/" class="operation_item appear_on_scroll appear" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/2_Fecamp-768x574.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">JUDO TOUR LITTORAL MAZDA</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/motul/" class="operation_item appear_on_scroll" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/DSC_1052-768x512.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">MOTUL</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/epcr/" class="operation_item appear_on_scroll" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/LNR-Confluence-6-768x507.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">EPCR</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/laire-de-vacances/" class="operation_item appear_on_scroll" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/IMG_1703-768x576.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">IDENTICAR</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/fox-snoopy/" class="operation_item appear_on_scroll" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/snoppy-photo1-768x768.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">FOX / SNOOPY</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/nos-operations/lacoste/" class="operation_item appear_on_scroll" id="post-100">


				<img src="http://www.ideactest.com/wp-content/uploads/2018/03/lacoste2.jpg" alt="" class="bg_img">

			<div class="txt_container">
				<h3 class="title">LACOSTE</h3>
			</div>
		</a>
	</div><div class="ais-hits--item">
		<a href="http://www.ideactest.com/evenementiel-et-numerique-quel-outils-pour-ameliorer-les-interactions-avant-pendant-et-apres-levenement/" class="operation_item appear_on_scroll" id="post-100">

				<img src="http://www.ideactest.com/wp-content/uploads/2018/02/Prestation-Evenementiel-150x150.jpg" alt="" class="bg_img">


			<div class="txt_container">
				<h3 class="title">Événementiel et numérique, quel outils pour améliorer les interactions avant, pendant et après l’événement&nbsp;?</h3>
			</div>
		</a>
	</div></div></section>


  <section class="layout_container">

    <div class="bullets_loader">
      <img src="img/3bullets_loader_blue.svg" class="blue" alt="">
      <img src="img/3bullets_loader_yellow.svg" class="yellow" alt="">
      <img src="img/3bullets_loader_red.svg" class="red" alt="">
      </div>

  </section>


</main>


<?php include("footer.php"); ?>
