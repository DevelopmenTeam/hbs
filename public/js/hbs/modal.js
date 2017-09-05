(function ($) {
  var Modal = {
    show: function (event, values) {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      event.preventDefault();
      $.ajax({
        url: "/modal",
        type: "POST",
        data: {id: values[0], type: values[1]},
        success: function (jdata) {
          var data = JSON.parse(jdata);
          if (values[1] == 'service') {
            $('ul li a#title_service span').html(data.name);
            $('.modal div.view img').attr({'src': data.image, 'alt': data.name});
            $('div.modal-body div.md-form p').html(data.description);
          }
          else{
            $('ul li a#name_teammer span').html(data.pro_title +' '+ data.name);
            $('.modal div.avatar img').attr({'src': data.image, 'alt': data.name});
            $('.modal h6.indigo-text').html(data.position);
            $('.modal ul#academic_studies').html('');
            $.each(data.academic_studies, function (k,v) {
              $('.modal ul#academic_studies').append('<li>'+ v +'</li>')
            });
            $('div.modal-body div.md-form p').html(data.experience);
          }
        }, error: function (data) {
          console.log("Error: " + data);
        }
      });
    }
  };

  $('.btn-hbs-services, .btn-hbs-team').on('click', function (event) {
    var values = $(this).prev().val().split(',');
    Modal.show(event, values);
  });
  $('.close-service,.close-teammer').click(function () {
    $('#services_modal, #team_modal').css({'display': 'none'});
  });

})(jQuery);