// Contact Form

$(".contact-form").submit(function(e) {
  e.preventDefault();
  var name = $("#contact-name").val();
  var email = $("#contact-email").val();
  var subject = $("#contact-subject").val();
  var message = $("#contact-message").val();
  var verification = $("#contact-verification").val();
  var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
  function isValidEmail(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
  };

  if (isValidEmail(email) && (message.length > 1) && (subject.length > 1) && (name.length > 1) && (verification == "81") ) {
    $.ajax({
      type: "POST",
      url: formURL,
      data: dataString,
      success: function() {
        $('.success').fadeIn(5000);
      }
    });
  } else {
    $('.error').fadeIn(5000);
  }

  return false;

});

// Isotope

var $container = $('#portfolio-grid').imagesLoaded( function() {
  $container.isotope({
  });

});



$('#filter a').click(function() {
  var selector = $(this).attr('data-filter');
  $container.isotope({filter: selector});
  return false;
});

$('ul#filter a').click(function() {
    $('ul#filter .current').removeClass('current');
    $(this).parent().addClass('current');
});
