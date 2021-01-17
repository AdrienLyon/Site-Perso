$(document).ready(function(){


  $("#downBtn").click(function(){
    $('html ,body').animate({scrollTop : $('#downLink').offset().top},2500);
  });


});
