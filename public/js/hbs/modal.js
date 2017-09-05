(function ($) {
  var Modal = {
    show: function (event, serviceID) {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      event.preventDefault();
      $.ajax({
        url: "/modal",
        type: "POST",
        data: {serviceID: serviceID},
        success: function (data) {
          window.location = '/modal-show/'+data;
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

})(jQuery);