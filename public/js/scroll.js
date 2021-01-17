$(document).ready(function(){

  $(window).scroll(function(){
    if($(this).scrollTop() > 140){
      $('#stickyHeader').fadeIn();
    } else{
      $('#stickyHeader').hide();
    }
  });
});  


