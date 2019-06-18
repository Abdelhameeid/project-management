$(document).ready(function(){ 
     $('.portfolio1 ').hover(function(){
         $(this).find('.portfolio-content').slideDown(300);
    }),
   $('.portfolio1 ').mouseleave(function(){
         $(this).find('.portfolio-content').slideUp(200);
    });
    
    // serv form 
    $('.additem').click(function(){
        $('.serv-form').slideDown(500)
    });
        $('.cancel').click(function(){
        $('.serv-form').slideUp(500)
    });
});

 

   



