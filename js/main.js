/* init */
window.onload = function() {

    init_ui();

    var xScrollPosition;
    var yScrollPosition;
    var isScrolling = false;
    var menuPosition = "innerHeight" in window ?
        window.innerHeight :
        document.documentElement.offsetHeight;

    /* listener sur le scroll */

    window.addEventListener("scroll", throttleScroll, false);

    function throttleScroll(e) {
        if (isScrolling == false) {
            window.requestAnimationFrame(function() {
                dealWithScrolling(e);
                isScrolling = false;
            });
        }
        isScrolling = true;
    }

    function dealWithScrolling(e) {

        xScrollPosition = window.scrollX;
        yScrollPosition = window.scrollY;

        if(document.getElementById('homePage_header')){

          /* menu fx */
          if (yScrollPosition >= menuPosition) {
             document.getElementById('homePage_header').classList.add('sticky');
             document.getElementById('homePage_intro').style.marginTop= '14em';
          } else if (yScrollPosition < menuPosition) {
             document.getElementById('homePage_header').classList.remove('sticky');
             document.getElementById('homePage_intro').style.marginTop= "0";
          }
        }


    }




};





function init_ui() {

    // show mobile menu
    document.querySelector('#bt_menu_mobile').addEventListener('click', function(event) {
        document.querySelector("#menu_mobile_container").classList.add('active');
        event.preventDefault();
    });

    //hide mobile menu
    document.querySelector('#bt_close_menu_mobile').addEventListener('click', function(event) {
        document.querySelector("#menu_mobile_container").classList.remove('active');
        event.preventDefault();
    });

    //hide mobile menu
    if(document.querySelector('#bt_vision_equipe')){
      document.querySelector('#bt_vision_equipe').addEventListener('click', function(event) {
        if(  document.querySelector("#equipe_container").classList.contains('active')){
          document.querySelector("#equipe_container").classList.remove('active');
          document.querySelector('#bt_vision_equipe').innerHTML = 'Découvrir toute l’équipe';
        }else{
          document.querySelector("#equipe_container").classList.add('active');
          document.querySelector('#bt_vision_equipe').innerHTML = 'fermer';
        }
          event.preventDefault();
      });
    }

    // bt_contact : scroll to bottom
    var bt_footer = document.querySelectorAll('.bt_footer');
    for( i=0; i < bt_footer.length; i++ ) {
      bt_footer[i].addEventListener('click', function(event) {
          scollToFooter();
          event.preventDefault();
      });
    }


    function scollToFooter(){
      var body = document.body; // Safari
      var html = document.documentElement; // Chrome, Firefox, IE and Opera
      body.scrollTop = body.scrollHeight;
      html.scrollTop = html.scrollHeight;
    }




}


/*     *  jquery area *      */


$(function() {
/*
  var colWidth = Math.round($('.zone_magazine_2cols').innerWidth() / 2)-200;
  $('.masonry').masonry({
    // options
    itemSelector: '.masonry_item',
    columnWidth: 650
  });
  console.log(colWidth);
*/

});
