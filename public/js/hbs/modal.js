(function ($) {
  var Modal = {
    show: function (event, serviceID) {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      event.preventDefault();
      $.ajax({
        url: "/modal",
        type: "POST",
        data: {serviceID: serviceID},
        success: function (jdata) {
          var data = JSON.parse(jdata);
            $('ul li a#title_service span').html(data.name);
            $('.modal div.view img').attr({'src': data.image, 'alt': data.name});
            $('div.modal-body div.md-form p').html(data.description);
        }, error: function (data) {
          console.log("Error: " + data);
        }
      });
    }
  };

  $('.btn-hbs-services').on('click', function (event) {
    var serviceID = $(this).prev().val();
    Modal.show(event, serviceID);
  });
  $('.close-service').click(function () {
    $('#services_modal').css({'display':'none'});
  });

})(jQuery);