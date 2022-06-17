
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COORSA MEXICO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!--JQuery-->
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
     <!--Estilos Menu-->
     <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
     <!--Fonts-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
     <!--Estilos Menu-->
     <link href="{{ asset('assets/css/menu_style.css') }}" rel="stylesheet">
     <!--Estilos General-->
     <link href="{{ asset('assets/css/general_style.css') }}" rel="stylesheet">
     
     <link href="{{ asset('assets/css/mobile_style.css') }}" rel="stylesheet">
     <!--Flechas hacia abajo-->
     <link href="{{ asset('assets/css/flechas.css') }}" rel="stylesheet">
     <!--Flechas hacia abajo-->
     <link href="{{ asset('assets/css/flechas_arriba.css') }}" rel="stylesheet">
     <!--Scroll-->
     <style>
      .scrolled
      {
        background-color: #343434;
        transition: 0.3s;
      }
    </style>  
     <!--Animacion IMG-->
     <link rel="stylesheet" href="assets/css/style_img.css">
     <!--style_Slider-->
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
     <link href="{{ asset('assets/css/style_Slider.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/style_slider_detras.css') }}" rel="stylesheet">
     <!--Animacion Texto-->
     <link href="{{ asset('assets/css/animacion_texto.css') }}" rel="stylesheet">
     <!-- Whatsapp-->
     <link href="{{ asset('assets/css/whatsapp.css') }}" rel="stylesheet">
     <!--FancyBox-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<header class="header-menu">
  <!--MENÚ-->
  <section class="navigation">
    <nav>
      <div class="nav-movil">
        <a id="nav-boton" href="#">
          <span></span>
        </a>
      </div>
      <ul class="nav-menu">
        <li>
            <a class="active"  href="/index.html">
            <span class="md-border-b-gray pl-4 pb-2">
                INICIO
            </span> 
            </a>
        </li>
        <li>
            <a href="/conocenos.html">
                <span class="md-border-b-gray pl-4 pb-2">
                    CONÓCENOS        
                </span>
            </a>
        </li>
        <li>
            <a href="/detras.html">
                <span class=" pl-4 pb-2">
                    DETRÁS DE        
                </span>
            </a>
        </li>
        <li style="width: 100%; height: 50vh;">
            <div class="menu-contacto">
                <div class="text-white">
                    <p class="text-left">
                        <a class="pb-2" href="/contacto.html">
                            <span class="font-weight-900">
                                contacto 
                            </span>
                        </a>
                        <span class="pb-2">
                            <a href="mailto:contacto@coorsamexico.com">contacto@coorsamexico.com</a>
                        </span>
                        <br>
                        <span class="font-montserrat">     
                            <a href="tel:442-385-782">tel. 442-385-782</a>
                        </span>    
                    </p>
                    <div class="col-6">
                        <a class="btn-grad  btn-grad-blue" href="/contacto.html">Contacto</a>
                    </div>
                </div>
                
            </div>
        </li>
     </ul>
    </nav>
  </section> 
  <a href=""></a>
</header>
