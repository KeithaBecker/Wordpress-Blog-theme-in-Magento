
//add animation to header of blog page

$(window).scroll(function() {
  if ($(document).scrollTop() > 100) {
    $('#header').addClass('sticky');
  } else {
    $('#header').removeClass('sticky');
  }
});
