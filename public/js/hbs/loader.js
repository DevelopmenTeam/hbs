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
    if(scrollTop > ($('div.wow.fadeInDown').height()/2)+
      ($('div.wow.fadeInDown').height()/5)){
      $('a.navbar-brand img').fadeIn('slow')
    }else{
      $('a.navbar-brand img').fadeOut('slow');
    }
  });

  // Material Select Initialization
  $(document).ready(function() {
    $('.mdb-select').material_select();
  });




})(jQuery);