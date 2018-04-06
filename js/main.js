/* init */
window.onload = function() {

    // init global nav
    if(document.querySelector('.header')){
      init_ui();
    }
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

    init_ContentScrollFx();
};



/* scrolling functions */

function init_ContentScrollFx() {

    console.log('init_ContentScrollFx()');
    var apear_items = document.querySelectorAll(".appear_on_scroll");
    var isScrolling = false;

    var menuPosition = "innerHeight" in window ?
        window.innerHeight :
        document.documentElement.offsetHeight;

    window.addEventListener("scroll", throttleScroll, false);  

    function throttleScroll(e) {
        console.log("scrolling");
        if (isScrolling == false) {
            window.requestAnimationFrame(function() {
                scrolling(e);
                updateHeader(e);
                isScrolling = false;
            });
        }
        isScrolling = true;
    }

    function scrolling(e) {
        for (var n = 0; n < apear_items.length; n++) {
            var apear_item = apear_items[n];
            if (isPartiallyVisible(apear_item)) {
                apear_item.classList.add("appear");
            } else {
                apear_item.classList.remove("appear");
            }
        }
    }

    function updateHeader(e) {

              if(!document.getElementById('homePage_header')){

                // hide logo
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.querySelector('.header').classList.add('condensed');
                } else {
                  document.querySelector('.header').classList.remove('condensed');
                }
              }


    }

    function isPartiallyVisible(el) {

        var elementBoundary = el.getBoundingClientRect();
        var top = elementBoundary.top;
        var bottom = elementBoundary.bottom;
        var height = elementBoundary.height;
        return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }

    throttleScroll();
}


function init_homePage(){


    // bt_gotop : scroll to top
    var fleche_container = document.querySelector('.fleche_container');
    fleche_container.addEventListener('click', function(event) {
        scrollToMenu();
        event.preventDefault();
    });


    function scrollToMenu(){
      console.log('scrollToMenu()');
      var body = document.body; // Safari
      var html = document.documentElement; // Chrome, Firefox, IE and Opera
      body.scrollTop = window.innerHeight;
      html.scrollTop = window.innerHeight;
    }


    // scroll story
    var firstScroll = false;
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
             document.querySelector('.header').classList.add('condensed');
             document.getElementById('homePage_intro').style.paddingTop= '24em';
             document.getElementById('homeStart').classList.add('hidden');
          } else if (yScrollPosition < menuPosition) {
             document.getElementById('homePage_header').classList.remove('sticky');
             document.querySelector('.header').classList.remove('condensed');
             document.getElementById('homePage_intro').style.marginTop= "0";
             document.getElementById('homeStart').classList.remove('hidden');
          }
        }


    }
}


function config_UiSlider(){
  /* init story timeline slider */
  var swiper_timeline = new Swiper('#swiper_timeline', {
      slidesPerView: 'auto',
      grabcursor:true,
      centeredSlides:true,
      spaceBetween: 800,
      effect:'coverflow',
      coverflowEffect: {
        rotate: 0,
        slideShadows: false,
      },
      speed:1000
    });


  /* init range cursor slider by noUiSlider.js */
  var slider = document.getElementById('slider');

  /* get slide list */
  var slides = $('#swiper_timeline .story_item');

  /* generate dates list */
  var dates = $.map(slides, function(slide) {
    return parseInt($(slide).attr('data-value'), 10);
  });

  /* generate dates range */
  var dates_range = dates.reduce(function(acc, date, index, dates) {
    var length = dates.length;

    if (index === 0) {
      acc["min"] = date;
    } else if (index === length - 1) {
      acc["max"] = date;
    } else {
      acc[`${index/(length - 1)*100}%`] = date
    }

    return acc
  }, {});


  noUiSlider.create(slider, {
  	start: dates_range["min"],
    connect: true,
    format: wNumb({
      decimals: 0
    }),
    tooltips: true,
  	range: dates_range
  });

  slider.noUiSlider.on('update', function(range){
    var date = parseInt(range[0], 10);
    swiper_timeline.slideTo(dates.indexOf(date));
  });
}



function init_page_vision(){


  config_UiSlider();

  /* init story timeline slider */
  var swiper_timeline = new Swiper('#swiper_timeline', {
      slidesPerView: 'auto',
      grabcursor:true,
      centeredSlides:true,
      preventClicks:true,
      spaceBetween: 800,
      effect:'coverflow',
      coverflowEffect: {
        rotate: 0,
        slideShadows: false,
      },
      speed:1000
    });
  swiper_timeline.slideTo(8);
  swiper_timeline.on('slideChange', function () {
    var slider = document.getElementById('slider');
    var sliderRangeTo = swiper_timeline.activeIndex + 1992;
    console.log(sliderRangeTo);
    slider.noUiSlider.set(sliderRangeTo);
  });



  /* init team sliders */
  setTimeout(function(){
  var team_leader_swiper = new Swiper('#team_leader_swiper', {
      slidesPerView: 'auto',
      spaceBetween: 100,
      autoplay: {
        delay: 5000,
      },
      speed:400,
      centeredSlides:true,
      grabcursor:true,
      loop:true,
      navigation: {
        nextEl: '#team_leader_swiper_next',
        prevEl: '#team_leader_swiper_prev',
      }
    });
  /*var team_swiper = new Swiper('#team_swiper', {
      slidesPerView: 'auto',
      spaceBetween: 600,
      centeredSlides:true,
      speed:800,
      grabcursor:true,
      threshold:20,
      loop:true,
      navigation: {
        nextEl: '#team_swiper_next',
        prevEl: '#team_swiper_prev',
      },
    });
    team_swiper.controller.control = team_leader_swiper;
    team_leader_swiper.controller.control = team_swiper;*/

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


    // lien rechercher : modale
    var bt_recherche = document.querySelectorAll('.bt_recherche');
    for( i=0; i < bt_recherche.length; i++ ) {
      bt_recherche[i].addEventListener('click', function(event) {
        document.querySelector("#modale_container").classList.add('active');
        document.querySelector("#modale_bg").classList.add('active');
        document.querySelector("#modale_bg").classList.add('white');
        document.querySelector("#modale_recherche").classList.add('modale_active');
        document.body.classList.add('modalOpen');
        document.querySelector("#modale_container").focus();
        event.preventDefault();
      });
    }

    // lien partenaires : modale
    var bt_partenaires = document.querySelectorAll('.bt_partenaires');
    for( i=0; i < bt_partenaires.length; i++ ) {
      bt_partenaires[i].addEventListener('click', function(event) {
        document.querySelector("#modale_container").classList.add('active');
        document.querySelector("#modale_bg").classList.add('active');
        document.querySelector("#modale_partenaires").classList.add('modale_active');
        document.body.classList.add('modalOpen');
        document.querySelector("#modale_container").focus();
        event.preventDefault();
      });
    }

    // bt_contact : modale
    var bt_contact = document.querySelectorAll('.bt_contact');
    for( i=0; i < bt_contact.length; i++ ) {
      bt_contact[i].addEventListener('click', function(event) {
        document.querySelector("#modale_container").classList.add('active');
        document.querySelector("#modale_bg").classList.add('active');
        document.querySelector("#modale_contact").classList.add('modale_active');
        document.body.classList.add('modalOpen');
        document.querySelector("#modale_container").focus();
        event.preventDefault();
      });
    }

    // bt_close_modale
    var bt_close_modale = document.querySelector('#bt_close_modale');
    bt_close_modale.addEventListener('click', function(event) {
      close_modale();
      event.preventDefault();
    });

    // modale_bg
    document.getElementById("modale_bg").addEventListener('click', function(event) {
      close_modale();
      event.preventDefault();
    });

    function close_modale(){
      document.querySelector("#modale_container").classList.remove('active');
      document.querySelector("#modale_bg").classList.remove('active');
      var active = document.querySelectorAll('.modale_active');
      for( i=0; i < active.length; i++ ) {
        active[i].classList.remove('modale_active');
      }
      document.body.classList.remove('modalOpen');

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
