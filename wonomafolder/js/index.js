$(document).ready(function(){
    
    $(".dropdown-menu li a").click(function(){
        $(this).parents(".btn-group").find('.selection').text($(this).text());
        $(this).parents(".btn-group").find('.iconflagone').attr("src",$(this).find("img").attr("src"));
    });

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
        $(".priceinternacional").hide();
        $(".pricebolivares").hide();
        $(".pricechile").hide();
        $(".priceparaguay").hide();
        $(".priceuruguay").hide();
        $(".priceargentina").show();
    });

    $("#itembolivia").click(function(){
        $(".priceinternacional").hide();
        $(".pricechile").hide();
        $(".priceparaguay").hide();
        $(".priceargentina").hide();
        $(".priceuruguay").hide();
        $(".pricebolivares").show();
    });

    $("#itemchile").click(function(){
        $(".priceinternacional").hide();
        $(".priceparaguay").hide();
        $(".priceparaguay").hide();
        $(".priceuruguay").hide();
        $(".pricebolivares").hide();
        $(".priceargentina").hide();
        $(".pricechile").show();
    });

    $("#itemparaguay").click(function(){
        $(".priceinternacional").hide();
        $(".priceparaguay").hide();
        $(".priceuruguay").hide();
        $(".pricebolivares").hide();
        $(".pricechile").hide();
        $(".priceargentina").hide();
        $(".priceparaguay").show();
    });

    $("#itemuruguay").click(function(){
        $(".priceinternacional").hide();
        $(".priceparaguay").hide();
        $(".pricebolivares").hide();
        $(".pricechile").hide();
        $(".priceparaguay").hide();
        $(".priceargentina").hide();
        $(".priceuruguay").show();
    });



    $("#iteminternacional").click(function(){
        $(".priceargentina").hide();
        $(".pricebolivares").hide();
        $(".pricechile").hide();
        $(".priceparaguay").hide();
        $(".priceuruguay").hide();
        $(".priceinternacional").show();
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
        $(this).focus().val('+54');
    
    });

    $('#tel').on('focus blur', function(e) {
        var placeholder = e.type == 'focus' ? '' : 'Teléfono';
        $(this).attr('placeholder', placeholder);
        $(this).val('');
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