(function ($) {
  var Email = {
    sendEmail: function (event, values) {
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
      event.preventDefault();
      $.ajax({
        url:'/sendemail',
        type:'POST',
        data:{
          name:values.name,
          email:values.email,
          subject:values.subject,
          message:values.message
        },
        success: function (jdata) {
          var data = JSON.parse(jdata);
         // alert(data.result);
        },
        error: function (jdata) {
          var data = JSON.parse(jdata);
         // alert(data.result);
        }
      });
    }
  };

  $('.btn-contact-email').on('click', function (event) {
    var values = {
      name:$('#contact-name').val(),
      email:$('#contact-email').val(),
      subject:$('#contact-subject').val(),
      message:$('#contact-message').val()
    };
    if((values.email != '') && (values.message != '')){
      Email.sendEmail(event, values);
    }
  });

})(jQuery);