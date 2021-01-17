$(document).ready(function(){


    $(window).scroll(function(){
    if($(this).scrollTop() > 140 && $(this).width()>688){
      $('#navTitle').fadeIn();
    } else{
      $('#navTitle').fadeOut();
    }
  });

  

  
});
