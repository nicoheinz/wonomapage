$(document).ready(function(){
      
    $('.nav-link').click(function(){
    
        $a=$(this).attr('id');
        $("#seccion"+$a).hide().fadeIn(4000);
    });

});