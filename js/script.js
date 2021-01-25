$(document).ready(function () {
    /* For the sticky navigation */
    $(".section-about").waypoint(
      function (direction) {
        if (direction == "down") {
          $("nav").removeClass("hidden");
          $("nav").addClass("sticky");
        } else {
          $("nav").addClass("hidden");
          $("nav").removeClass("sticky");
        }
      },
      {
        offset: "60px;",
      }
    );
  
    //Mobile Responsive
    $(".mobile-nav-icon").click(function () {
      var nav = $(".js-main-nav");
      var icon = $(".mobile-nav-icon i");
  
      if (icon.hasClass("ion-navicon-round")) {
        icon.addClass("ion-close-round");
        icon.removeClass("ion-navicon-round");
      } else {
        icon.addClass("ion-navicon-round");
        icon.removeClass("ion-close-round");
      }
      nav.slideToggle(200);
    });
  
    $(".past").click(function () {
      $(".upCarousel div:first").removeClass("show");
      $(".pastCarousel div:first").removeClass("hide");
      $(".pastCarousel div:first").addClass("show");
      $(".upCarousel div:first").addClass("hide");
      $(".past h3").addClass("borderdown");
      $(".up h3").removeClass("borderdown");
    });
  
    $(".up").click(function () {
      $(".pastCarousel div:first").removeClass("show");
      $(".pastCarousel div:first").addClass("hide");
      $(".upCarousel div:first").removeClass("hide");
      $(".upCarousel div:first").addClass("show");
      $(".up h3").addClass("borderdown");
      $(".past h3").removeClass("borderdown");
    });
  });

  const toggelButton = document.querySelector('button');

  toggelButton.addEventListener("click",()=>{
  
    document.querySelector('.navigation__icon').classList.toggle('active');
  
    const nav = document.querySelector('nav');
    if(toggelButton.getAttribute('aria-expanded') == "false"){
      const nav = document.querySelector('nav');
      if(!nav.classList.contains('sticky')){
        nav.style.backgroundColor = "rgba(0,0,0,1)";
      }
    }
    else if(!nav.classList.contains('sticky')){
      nav.style.backgroundColor = "transparent";
  
    }
    
  });