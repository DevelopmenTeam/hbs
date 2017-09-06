(function ($) {
  new WOW().init();

  var $headerColor = $('header nav.navbar');
  var $letterColor = $('header nav.navbar a');
  $('a.navbar-brand img').hide();
  $headerColor.addClass('navbar--color');
  $letterColor.css({'color':'white'});

  /**
   * ScrollTop Navbar
   */

  $(window).scroll(function() {
    // console.log($('div.wow.fadeInDown img').offset().top);
    var scrollTop = $('body').scrollTop();
    // console.log(scrollTop);
    if (scrollTop > 56) {
      $headerColor.css({'background':'white'});
      $letterColor.css({'color':'#004c99'});
      $headerColor.removeClass('navbar--color');
    } else {
      $headerColor.css({'background':'transparent'});
      $headerColor.addClass('navbar--color');
      $letterColor.css({'color':'white'});
    }
    if(scrollTop > ($('div.wow.fadeInDown').height()/2)){
      $('a.navbar-brand img').fadeIn('slow')
    }else{
      $('a.navbar-brand img').fadeOut('slow');
    }
  });

  // Material Select Initialization
  $(document).ready(function() {
    $('.mdb-select').material_select();
  });

  var vid = document.getElementById("bgvid");
  var pauseButton = document.querySelector("#polina button");

  if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }

  function vidFade() {
    vid.classList.add("stopfade");
  }

  vid.addEventListener('ended', function()
  {
    vid.pause();
    vidFade();
  });


  pauseButton.addEventListener("click", function() {
    vid.classList.toggle("stopfade");
    if (vid.paused) {
      vid.play();
      pauseButton.innerHTML = "Pause";
    } else {
      vid.pause();
      pauseButton.innerHTML = "Paused";
    }
  })

})(jQuery);