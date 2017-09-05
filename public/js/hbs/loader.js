(function ($) {
  new WOW().init();

  var $headerColor = $('header nav.navbar');
  var $letterColor = $('header nav.navbar a');
  $headerColor.addClass('navbar--color');
  $letterColor.css({'color':'white'});

  /**
   * ScrollTop Navbar
   */

  $(window).scroll(function() {
    var scrollTop = $('body').scrollTop();
    if (scrollTop > 56) {
      $headerColor.css({'background':'white'});
      $letterColor.css({'color':'#004c99'});
      $headerColor.removeClass('navbar--color');
    } else {
      $headerColor.css({'background':'transparent'});
      $headerColor.addClass('navbar--color');
      $letterColor.css({'color':'white'});
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