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
    console.log(scrollTop);
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


  $('.btn-hbs-services').click(function () {
    var key = $(this).prev().val();
    $.ajax({
      url: "/",
      type:"POST",
      beforeSend: function (xhr)
      {
        var token = $('meta[name="csrf_token"]').attr('content');
        if (token)
        {
          return xhr.setRequestHeader('X-CSRF-TOKEN', token);
        }
      },
      data: { key: key },
      success:function(data) {
        alert(data);
      },
      error:function(xhr, status, error){
        alert(xhr.responseText);
      }
    });
    // alert($(this).prev().val());
    $('#services_modal').addClass('show');
    $('#services_modal').addClass('fadeIn');
    $('#services_modal').css({'display':'block'});
  });

  $('.close-service').click(function () {
    $('#services_modal').removeClass('show');
    $('#services_modal').css({'display':'none'});
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