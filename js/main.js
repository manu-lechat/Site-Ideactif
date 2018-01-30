/* init */
window.onload = function() {

    init_ui();

    // init page nous-rejoindre
    if(document.querySelector('.homePage')){
      init_homePage();
    }
    // init page nous-rejoindre
    if(document.querySelector('.page_nous_rejoindre')){
      init_nous_rejoindre();
    }

    // init page vision
    if(document.querySelector('.page_vision')){
      init_page_vision();
    }

    // init page vision
    if(document.querySelector('.page_ideamag')){
      init_page_ideamag();
    }





};

function init_homePage(){


    // scroll story
    var xScrollPosition;
    var yScrollPosition;
    var isScrolling = false;
    var menuPosition = "innerHeight" in window ?
        window.innerHeight :
        document.documentElement.offsetHeight;

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
}

function init_page_vision(){

  /* init story timeline slider */
  var swiper_timeline = new Swiper('#swiper_timeline', {
      slidesPerView: 'auto',
      speed:1000
    });
  swiper_timeline.slideTo(8);
  swiper_timeline.on('slideChange', function () {
    var slider = document.getElementById('slider');
    var sliderRangeTo = swiper_timeline.activeIndex + 1992;
    console.log(sliderRangeTo);
    slider.noUiSlider.set(sliderRangeTo);
  });

  /* init range cursor slider by noUiSlider.js */
  var slider = document.getElementById('slider');
  var slideTo = 0;
  noUiSlider.create(slider, {
  	start: [ 2000 ],
  	connect: true,
    step: .1,
    format: wNumb({
    			decimals: 0
    		}),
	   tooltips: true,
  	range: {
  		'min': 1992,
  		'max': 2020
  	}
  });
  slider.noUiSlider.on('end', function(){
    slideTo = Math.round(slider.noUiSlider.get()-1992);
    var mySwiper = document.querySelector('#swiper_timeline').swiper
    mySwiper.slideTo(slideTo);
	   console.log(slideTo);
  });

  /* init team sliders */
  setTimeout(function(){
  var team_leader_swiper = new Swiper('#team_leader_swiper', {
      slidesPerView: 1,
      spaceBetween: 100,
      speed:400,
      loop:true
    });
  var team_swiper = new Swiper('#team_swiper', {
      slidesPerView: 1,
      spaceBetween: 200,
      speed:800,
      threshold:20,
      loop:true,
      navigation: {
        nextEl: '#team_swiper_next',
        prevEl: '#team_swiper_prev',
      },
    });
    team_swiper.controller.control = team_leader_swiper;
    team_leader_swiper.controller.control = team_swiper;

  }, 500);


    //hide mobile menu
    if(document.querySelector('.bt_vision_equipe')){

        var bt_vision_equipe = document.querySelectorAll(".bt_vision_equipe");
        for( i=0; i < bt_vision_equipe.length; i++ ) {
          bt_vision_equipe[i].addEventListener('click', function(event) {
            if(  document.querySelector("#vision_zone_blue").classList.contains('active')){
              document.querySelector("#vision_zone_blue").classList.remove('active');
              for( i=0; i < bt_vision_equipe.length; i++ ) {
                bt_vision_equipe[i].innerHTML = 'Découvrir toute l’équipe';
              }
            }else{
              document.querySelector("#vision_zone_blue").classList.add('active');       
              for( i=0; i < bt_vision_equipe.length; i++ ) {
                bt_vision_equipe[i].innerHTML = 'fermer';
              }
            }
            event.preventDefault();
          });
        }
    }
}

function init_page_ideamag(){

  setTimeout(function(){

    var elem = document.querySelector('.masonry');
    var msnry = new Masonry( elem, {
      // options
      itemSelector: '.masonry_item',
      columnWidth: '.grid-sizer',
    });
    elem.classList.add('active');
  }, 500);


}


function init_nous_rejoindre(){

  // show select menu
  document.querySelector('#open_selectZone').addEventListener('click', function(event) {
    if( document.querySelector("#selectZone").classList.contains('open')){
      document.querySelector("#selectZone").classList.remove('open');
      var mySwiper = document.querySelector('.page_nous_rejoindre #selectZone .swiper-container').swiper
      mySwiper.destroy();
    }else{
      document.querySelector("#selectZone").classList.add('open');
      setTimeout(function(){
        var swiper = new Swiper('.page_nous_rejoindre #selectZone .swiper-container', {

            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            mousewheel: true,
            scrollbar: {
              el: '#nousRejoindreScrollbar',
            }
          });
      }, 350);
    }
    event.preventDefault();
  });

  // affichage de la zone annonce
  var bt_showAnnone = document.querySelectorAll(".show_annonce");
  for( i=0; i < bt_showAnnone.length; i++ ) {
    bt_showAnnone[i].addEventListener('click', function(event) {
        // affichage de la zone annonce
        document.querySelector("#zone_annonce").classList.add('open');
        // scrool à l'annonce
        var scrollTo = Math.round(document.querySelector(".layout_container_100vh").clientHeight - document.querySelector(".header_container").scrollHeight);
        document.body.scrollTop = scrollTo;
        document.documentElement.scrollTop = scrollTo;
        event.preventDefault();
    });
  }



}


function init_ui() {

    // show mobile menu
    document.querySelector('#bt_menu_mobile').addEventListener('click', function(event) {
        document.querySelector("#menu_mobile_container").classList.add('active');
        document.querySelector("#bt_menu_mobile").classList.add('hide');
        document.body.classList.add('modalOpen');
        event.preventDefault();
    });

    //hide mobile menu
    document.querySelector('#bt_close_menu_mobile').addEventListener('click', function(event) {
        document.querySelector("#menu_mobile_container").classList.remove('active');
        document.querySelector("#bt_menu_mobile").classList.remove('hide');
        document.body.classList.remove('modalOpen');
        event.preventDefault();
    });


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

    // bt_gotop : scroll to top
    var bt_gotop = document.querySelectorAll('.bt_gotop');
    for( i=0; i < bt_gotop.length; i++ ) {
      bt_gotop[i].addEventListener('click', function(event) {
          scollToTop();
          event.preventDefault();
      });
    }

    function scollToTop(){
      var body = document.body; // Safari
      var html = document.documentElement; // Chrome, Firefox, IE and Opera
      body.scrollTop = 0;
      html.scrollTop = 0;
    }

}