<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COORSA MEXICO</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!--Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!--Estilos Menu-->
     <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">
     <!--Fonts-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
     <!--Estilos Menu-->
     <link href="{{ asset('assets/css/menu_style.css') }}" rel="stylesheet">

     <link href="{{ asset('assets/css/menu_mobile_style.css') }}" rel="stylesheet">

     <!--Estilos General-->
     <link href="{{ asset('assets/css/general_style.css') }}" rel="stylesheet">

     <link href="{{ asset('assets/css/mobile_style.css') }}" rel="stylesheet">
     <!--Flechas hacia abajo-->
     <link href="{{ asset('assets/css/flechas.css') }}" rel="stylesheet">
     <!--Flechas hacia abajo-->
     <link href="{{ asset('assets/css/flechas_arriba.css') }}" rel="stylesheet">
     <!--header background-->
     <style>
      .header
      {
         background-image: url('assets/img/JPG/fondos/Header.jpg');
      }

      .nav-movil{
        background-image: url('assets/img/JPG/fondos/Header.jpg');
        background-size: cover;
        height: 5rem
      }

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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css">
     <link href="{{ asset('assets/css/style_slider_detras.css') }}" rel="stylesheet">
     <!--Animacion Texto-->
     <link href="{{ asset('assets/css/animacion_texto.css') }}" rel="stylesheet">
     <!-- Whatsapp-->
     <link href="{{ asset('assets/css/whatsapp.css') }}" rel="stylesheet">
     <!--FancyBox-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
</head>
<header class="header-menu" >
  <!--MENÚ-->
  <section class="navigation">
    <nav>
      <div class="nav-movil" id="header">
        <a id="nav-boton" href="#">
          <span></span>
        </a>
      </div>
      <ul class="nav-menu">
        <li>
            <a class="active"  href="{{url('/')}}">
            <span class="md-border-b-gray pl-4 pb-2">
                INICIO
            </span> 
            </a>
        </li>
        <li>
            <a href="{{url('conocenos')}}">
                <span class="md-border-b-gray pl-4 pb-2">
                    CONÓCENOS        
                </span>
            </a>
        </li>
        <li>
            <a href="{{url('detras')}}">
                <span class=" pl-4 pb-2">
                    DETRÁS DE        
                </span>
            </a>
        </li>
        <li style="width: 100%; height: 50vh;">
            <div class="menu-contacto">
                <div class="text-white">
                    <p class="text-right">
                        <span class="pb-2">
                            <a href="mailto:contacto@coorsamexico.com">contacto@coorsamexico.com</a>
                        </span>
                        <br>
                        <span class="font-montserrat">     
                            <a href="tel:442-385-782">tel. 442-385-782</a>
                        </span>    
                    </p>
                    <div class="col-6">
                        <a class="btn-grad  btn-grad-blue" href="{{url('contacto')}}">Contacto</a>
                    </div>
                </div>
                
            </div>
        </li>
     </ul>
    </nav>
  </section> 
  <a href=""></a>
</header>

<header class="header" id="header">
    <a href="{{url('/')}}" class="logo">
      <img style="width:3rem; heigth:3rem;" src="{{ asset('assets/img/PNG/logos/Logo_Rosa_Coorsa.png') }}" alt="">
    </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <ul class="menu">
      <li><a href="{{url('/')}}" style="color: white">Servicios</a></li>
      <li><a href="{{url('conocenos')}}">Conócenos</a></li>
      <li><a href="{{url('detras')}}">Detrás de</a></li>
      <li  style="">
        <a href="{{url('contacto')}}">Contacto</a>
      </li>
    </ul>
  </header>

