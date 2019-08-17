$(document).ready(function(){
    
    $('body').scrollspy({ target: '#navbarNav' })
    
    $('.nav-link').click(function(){
    
        $a=$(this).attr('id');
        $("#seccion"+$a).hide().fadeIn(3000);

    
    });

    window.sr = ScrollReveal({ reset: true });
    
    sr.reveal('.im1', { 
        duration: 1000,
        distance: '100%',
        origin: 'left',
    });

    sr.reveal('.im2', { 
        duration: 1000,
        distance: '100%',
        origin: 'right',
    });

    sr.reveal('.im3', { 
        duration: 1000,
        distance: '100%',
        origin: 'bottom',
    });

    sr.reveal('.im4', { 
        duration: 1000,
        distance: '100%',
        origin: 'left',
    });

    sr.reveal('.im5', { 
        duration: 1000,
        distance: '100%',
        origin: 'right',
    });


    sr.reveal('.price-left', { 
        duration: 2000,
        distance: '100%',
        origin: 'left',
    });

    sr.reveal('.price-center', { 
        duration: 1000,
        distance: '100%',
        origin: 'bottom',
    });

    sr.reveal('.price-right', { 
        duration: 2000,
        distance: '100%',
        origin: 'right',
    });

    sr.reveal('.bottom-show', { 
        duration: 2000,
        distance: '80%',
        origin: 'bottom',
    });

    sr.reveal('.left-show', { 
        duration: 2000,
        distance: '80%',
        origin: 'left',
    });

    sr.reveal('.right-show', { 
        duration: 2000,
        distance: '80%',
        origin: 'right',
    });

    sr.reveal('.top-show', { 
        duration: 2000,
        distance: '80%',
        origin: 'top',
    });
    
    
});