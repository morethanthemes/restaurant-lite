jQuery(document).ready(function($) {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $(".to-top").addClass("show");
    } else {
      $(".to-top").removeClass("show");
    }
  });

  $(".to-top").click(function() {
    $("body,html").animate({scrollTop:0},800);
  });
});
