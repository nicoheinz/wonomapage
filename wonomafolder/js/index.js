$(document).ready(function(){
    
    $('body').scrollspy({ target: '#navbarNav' })
    
    $('.nav-link').click(function(){
    
        $a=$(this).attr('id');
        $("#seccion"+$a).hide().fadeIn(3000);

    
    });

    window.sr = ScrollReveal({ reset: false });
    
    sr.reveal('.seccion', { 
        distance: '50px',
        duration: 2000,
        opacity: 0,
    });


    
});