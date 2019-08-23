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

    $("#itemargetina").click(function(){
        $(".pricedolar").hide();
        $(".pricepesos").show();
    });

    $("#iteminternacional").click(function(){
        $(".pricepesos").hide();
        $(".pricedolar").show();
    });

    $("#direccion").click(function(){

        $(".twLongform_FieldInput label").addClass("twLongform");
        $(".twLongform_FieldInput label").show();
    });

    $('#direccion').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Direccion';
        $(this).attr('placeholder', placeholder);
    });

    $("#tel").click(function(){

        $(".twLongform_FieldInput label").addClass("twLongform");
        $(".twLongform_FieldInput label").show();
        $(this).attr('value', '+54');
    });

    $('#tel').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Teléfono';
        $(this).attr('placeholder', placeholder);
        $(this).attr('value', '');
    });

    $("#email").click(function(){

        $(".twLongform_FieldInput label").addClass("twLongform");
        $(".twLongform_FieldInput label").show();
    });

    $('#email').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Email';
        $(this).attr('placeholder', placeholder);
    });


    $("#nombreContacto").click(function(){

        $(".twLongform_FieldInput label").addClass("twLongform");
        $(".twLongform_FieldInput label").show();
    });

    $('#nombreContacto').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Nombre Contacto';
        $(this).attr('placeholder', placeholder);
    });



    $("#nomreEstablec").click(function(){

        $(".twLongform_FieldInput label").addClass("twLongform");
        $(".twLongform_FieldInput label").show();
    });

    $('#nomreEstablec').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Nombre de Establecimiento';
        $(this).attr('placeholder', placeholder);
    });

    
    
});