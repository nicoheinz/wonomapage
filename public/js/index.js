$(document).ready(function(){
      
    
    $('.nav-link').click(function(){
    
        $a=$(this).attr('id');
        $("#seccion"+$a).hide().fadeIn(3000);

    
    });



    window.sr = ScrollReveal({ reset: true });
    sr.reveal('.img1', { 
        duration: 1000,
        distance: '100%',
        origin: 'left',
    });

    sr.reveal('.img2', { 
        duration: 1000,
        distance: '100%',
        origin: 'right',
    });

    sr.reveal('.img3', { 
        duration: 1000,
        distance: '100%',
        origin: 'bottom',
    });

    sr.reveal('.img4', { 
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
});