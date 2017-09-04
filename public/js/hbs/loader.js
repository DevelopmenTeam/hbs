(function ($) {
  new WOW().init();

  var $headerColor = $('header nav.navbar');
  var $letterColor = $('header nav.navbar a');
  $headerColor.addClass('navbar--color');
  $letterColor.css({'color':'white'});
  // $headerColor.css({'border-bottom': '1px solid rgba(240, 248, 255, 0.35)'});



  /**
   * ScrollTop Navbar
   */

  $(window).scroll(function() {
    var scrollTop = $('body').scrollTop();
    console.log(scrollTop);
    if (scrollTop > 56) {
      $headerColor.css({'background':'white'});
      // $headerColor.css({'border-bottom': '1px solid rgba(240, 248, 255, 0.35);'});
      $letterColor.css({'color':'#004c99'});
      $headerColor.removeClass('navbar--color');
    } else {
      $headerColor.css({'background':'transparent'});
      $headerColor.addClass('navbar--color');
      $letterColor.css({'color':'white'});
    }
  });


  $('.btn-hbs-services').click(function () {
    $('#modal_sercices').addClass('show');
    $('#modal_sercices').addClass('fadeIn');
    $('#modal_sercices').css({'display':'block'});
  });

  $('.close-service').click(function () {
    $('#modal_sercices').removeClass('show');
    $('#modal_sercices').css({'display':'none'});
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