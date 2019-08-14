@extends('layout.app')


@section('content')

<style>
    .cont{
        position: relative;
        text-align: center;
        color: white;
        margin-bottom: 5em;
    }

    .centered{
        position: absolute;
        top: 50%;
        left: 30%;
    }

    .btns-orange{
        background-color: orangered;
        margin-top: 3em;
    }
    .btns-white{
        background-color:white;
        color:orangered;
        border: 1px solid orangered;
    }

    .wono{
        color: #C62026;
    }
    .soft{
        color: #000000;

    }

    .wono,.soft{
        display: inline-block;
    }
    .wonocontainer{
        margin-left: 5em;
    }

    .content-request{
        padding-left: 10em !important;
        padding-right: 10em !important;
        padding-top: 3em;
    }

    .content-request h5{
        padding-bottom: 2em;
    }

    hr {
    border: 0; 
    border-top: 1px solid black; 
    }

    html {
        scroll-behavior: smooth;
    }

    /*#seccion1,#seccion2,#seccion3,#seccion4*/
    .seccion{
        margin-bottom:11em;
        margin-top: 10em;
    }
    .margintitle{
        margin-top: 2em;
    }


</style>


<div class="container-fluid cont">

    <!---INICIO-->
    <div class="row">
        <div class="wonocontainer">
            <h4 class="wono">WONOMA</h4>
            <h4 class="soft"> SOFT</h4>
        </div>
        
    </div>
    <div class="row">
            <div class="col-md-12" id="uno">
                    <img src="{{ asset('img/img1.png')}}" alt="placeholder 960" class=" float-left img-responsive im6" style="width: 100%">
                    <div class="centered">
                        <h1>INNOVACIÓN PARA TU SALÓN</h1>
                        <h5>DIGITALIZA Y  GESTIONA TU NEGOCIO.ATRAE Y FIDELIZA MÁS CLIENTES</h5>
                        <a href="#" class="btn btn-primary btns-orange">Solicitar Demo</a>
                    </div>
                    
            </div>
    </div>
</div>    
    

<!--PRIMERA SECCION-->

<div class="container-fluid seccion" id="seccion1">
    <div class="row">
        <div class="col-md-12 text-center margintitle left-show">
            <h4 class="wono">WONOMA</h4>
            <h4 class="soft"> Soft potencia a los mejores salones de belleza,</h4>
            <h4>empleando la última tecnología digital.</h4>
            <hr style="width: 60%">
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <img class="im1" src="{{ asset('img/img2.png')}}">
        </div>

    </div>
    <div class="bottom-show">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 style="margin-top: 1em">¿ Aún dependes de tu teléfono y de tu agenda de papel?</h2>
            </div>
        </div>
        
        <div class="content-request">
            <div class="row">
                    <div class="col-md-6 text-center">
                        <h5>GESTIONA  TU NEGOCIO ONLINE</h5>
                    </div>
                    <div class="col-md-6 text-center">
                        <h5>RESERVAS LAS 24HS</h5>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6 text-center">
                            <h5>MULTICANALIDAD</h5>
                        </div>
                        <div class="col-md-6 text-center">
                            <h5>ATRAE A MÁS CLIENTES </h5>
                        </div>
            </div>
        </div>
    </div>

</div>


<!--SEGUNDA SECCION-->
<div class="container-fluid seccion" id="seccion2">

    <div class="row" >
        <div class="col-md-12 text-center margintitle top-show">
            <h2 style="color:red;margin-top: 1em">RESERVAS LAS 24HS</h2>
            
            <div class="col-md-12 text-center">
                <b>Tu salón cierra, tu agenda no!.</b>
                <hr style="width: 20%">
            </div>
        </div>
    
    </div>
    
    <div class="row" style="margin-top: 3em">
        <div class="col-md-6 text-center left-show">
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>¿Sabías que el 50 % de tus clientes  quieren reservar cuando tu salón está cerrado, y que el 40% de las llama  a tu salón dan ocupa ?</b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>Wonoma permite que  tus clientes de manera  fácil, rápida  y desde dispositivo ,<span style="color:red">reserven las 24hs, los 7 días de la semana.</span></b>
            </div>
    
            <a href="#" class="btn btn-primary btns-white" style="margin-top: 8em; margin-bottom:2em">Empezar ahora</a>
        
        </div>
        <div class="col-md-6 text-center">
            <img class="im2" src="{{ asset('img/img3.png')}}">
        </div>
    </div>

</div>




<!--TERCERA SECCION-->

<div class="container-fluid seccion" id="seccion3">
    
    <div class="row">
        <div class="col-md-6 text-center margintitle top-show">
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>¿Inviertes en tus redes sociales, Ads? ¿Tu WhatsApp funciona en todo momento? ¿Tus clientes te buscan en Google Maps ?  

                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b style="color: red;">Transforma tu inversión en redes sociales en reservas concretas. 
                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>Wonoma es la única plataforma  que integra  tus Redes Sociales, tu Web/App, Google Maps, WhatsApp,  para que recibas reservas en tu agenda las 24hs.
                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>Pd: ¿Aún no tienes una web propia para tu salón? No te preocupes, nosotros te la proporcionamos gratis.
                </b>
            </div>
        </div>
        <div class="col-md-6 text-center margintitle">

            <div class="top-show">
                <h2 style="color:red">MULTICANALIDAD</h2>
            </div>
            <div class="left-show" style="margin-top: 1em">
                <h5><b>Varios  Canales. Muchas reservas. </b></h5>
                <h5><b>Un solo destino, tu salón.<hr style="width: 50%; padding-bottom: 1em">
                </b></h5>
            </div>
            <div>
                <img class="im3" src="{{ asset('img/img4.png')}}">
            </div>
            
        </div>
        
    </div>
    <div class="row">
            <div class="col-md-12 text-center top-show">
                <a href="#" class="btn btn-primary btns-orange">Solicitar Demo</a>
            </div>
    </div>

</div>



<!--CUARTA SECCION-->
<div class="container-fluid seccion" id="seccion4">
    <div class="row">
        <div class="col-md-12 text-center margintitle bottom-show">
            <h2 style="color:red">ATRAE A MÁS CLIENTES </h2>
            <h4>Más clientes.  Más fidelizados . <hr style="width: 60%">
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center right-show">
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>Te ayudamos a potenciar tu negocio para darte a conocer a más  clientes y fidelizarlos</b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>
                    <span style="color:red">Ofrece descuentos y promociones</span>, según tus necesidades, tus días ociosos y haz que tus clientes vuelvan.
                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>
                    Gracias a los  <span style="color:Red">recordatorios de citas </span>gratuitos y automáticos, se reduce en un 15% los clientes no presentados en  tu salón.
                </b>
            </div>
            <div style="margin-top: 5em">
                <a href="#" class="btn btn-primary btns-white">Suscríbete</a>
            </div>

        </div>
        <div class="col-md-6 text-center">
            <img class="im4" src="{{ asset('img/img5.png')}}">
        </div>
    </div>
</div>



<!--QUINTA SECCION-->
<div class="container-fluid seccion" id="seccion5">
    <div class="row">
        <div class="col-md-12 text-center margintitle top-show">
            <h2 style="color: red">TU NEGOCIO ONLINE</h2>
            <h4>La información de tu negocio, cuando y donde la necesites.</h4>
            <hr style="width: 60%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center left-show">
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>La manera de gestionar un negocio cambió, ya no importa donde estés, con <span>sólo un click</span> accedes a él.
                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>
                    Organiza tu agenda, gestiona tus ventas, controla tu stock, liquida tus sueldos y comisiones, genera factura/ticket, <span>desde la nube.</span>
                </b>
            </div>
            <div style="margin-top: 2em;margin-left: 4em; margin-right: 4em;">
                <b>
                    Da permisos personalizados a tu equipo con diferentes tipos de acceso.
                </b>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div style="margin-top: 2em">
                <img class="im5" src="{{ asset('img/img6.png')}}">
            </div>
            <div style="margin-top: 5em">
                <a  href="#" class="btn btn-primary left-show btns-white">Suscríbete</a>
            </div>
        </div>
    </div>

</div>

<!--SEXTA SECCION-->
<div class="container-fluid seccion" id="seccion6">
    <div class="row">
        <div class="col-md-12 text-center margintitle top-show">
            <h2 style="color:red" class="margintitle"> PRECIOS Y PLANES</h2>
            <h5><b>No hay costos escondidos ni sorpresas.</b></h5>
            <h5><b>Cancela o cambia tu plan en cualquier momento.</b></h5>
        </div>
    </div>
    <div class="row" style="margin:2em">
        <div class="col-md-5 text-center price-left" style="border: 1px solid orangered; padding: 0.5em;">
            <div style="border: 1px solid orangered">
                <h4>PLAN BASIC</h4>
                <h4>US$ 9,99 al mes</h4>
            </div>

            <p>Gestión de agenda</p>

            <p>Reservas Online</p>
            
            <p>Descuentos/Promociones </p>

            <p>Recordatorio de citas</p>

            <p>Integración con Facebook, Instagram, Whatsapp, Google Maps, Web, App.
            </p>

            <p>Tu web gratis</p>

            <a href="#" class="btn btn-primary btns-orange">Empezar ahora</a>
        </div>
        
        <div class="col-md-2 text-center price-center">
            <p>Elegir país</p>
            <p>Argentina</p>
            <p>Internacional</p>
            <p style="margin-top: 1em">Precio en otros países</p>
            <p style="margin-top: 1em">U$20 y U$30</p>
        </div>

        <div class="col-md-5 text-center price-right" style="border: 1px solid orangered;padding: 0.5em;">
            <div style="border: 1px solid orangered">
                <h4>PLAN GOLD</h4>
                <h4>UUS$ 24,99 al mes</h4>
            </div>
            
            <b>Plan Basic</b>
            <b> + </b>

            <p>Gestión de caja diaria</p>

            <p>Liquidación de sueldos y comisiones</p>
            
            <p>Facturación/ Ticket </p>

            <p>Stock</p>

            <p>Gastos </p>

            <a href="#" class="btn btn-primary btns-orange">Empezar ahora</a>
        </div>
    </div>
</div>



<!--SEPTIMA SECCION-->
<div class="container-fluid seccion" id="seccion7">
    <div class="row">
        <div class="col-md-12 text-center margintitle">
            <h1>CONFÍAN EN NOSOTROS</h1>

            <h4><b>HAIR CARRIZO</b></h4>
            <h4><b>UMARA</b></h4>
            <h4><b>CRADA</b></h4>
            <h4><b>BILLY GUNS</b></h4>
            <h4><b>LABORATORIO 	SIR FAUSTO</b></h4>
        </div>
    </div>
</div>


<!--OCTAVA SECCION-->
<div class="container-fluid seccion" id="seccion8">
    <div class="row"    >
        <div class="col-md-12 text-center margintitle">
            <h1><b>Es hora de potenciar tu salón</b></h1>

            <b>Completa el formulario y nuestro equipo se pondrá en contacto contigo para aclarar to  tus du , sin ningún compromiso.
            
                <br>¡Descubre cómo tener más clientes con WONOMA!
            
            </b>
            

            <h4  style="margin-top: 3em"><b>Formulario de contacto</b></h4>

            <a href="#" class="btn btn-primary btns-orange" style="margin-top: 3em; margin-bottom: 3em">Quiero recibir información</a>
        </div>
    </div>
</div>

@endsection