<footer class="footer">
    <div class="footer__contacto">
      <h2>contacto</h2>
      <a class="footer_text" href="mailto:contacto@coorsamexico.com" style="text-decoration:none; color:#424242">
        <p style="text-decoration: none" >contacto@coorsamexico.com</p>
      </a>
      <a  class="footer_text" href="tel:4423857827" class=""  style="text-decoration:none; color:#424242;">Tel:. 442-385-7827</a>
    </div>

    <div class="footer__cotactanos">
      <button class="footer__cotactanos_button">
        <a class="footer_button_text" href="{{url('contacto')}}">contáctanos</a>
      </button>
    </div>
  
    <div class="footer__redes">
       <div  style="" class="footer_redes_div">
         <a  href="https://www.linkedin.com/company/corsa-m%C3%A9xico">
           <img class="footer_img" src="{{ asset('assets/img/PNG/logos/Logo_Linkedin_Gris.png') }}" alt="">
         </a>
       </div>
  
       <div style="" class="footer_redes_div"> 
         <a href="https://www.facebook.com/coorsamexico">
           <img class="footer_img" src="{{ asset('assets/img/PNG/logos/Logo_facebook_gris.png') }}" alt="">
         </a>
       </div>
    </div>
  
    <div class="footer_container">
        <a href="#seccion__inicio">
          <img class="circulo_abajo" src="{{ asset('assets/img/PNG/elementos/circulo.png') }}" alt="boton_abajo">
          <div class="flechas_abajo">
            <div class="chevron2"></div>
            <div class="chevron2"></div>
            <div class="chevron2"></div>
         </div>
        </a>
     </div>
  
    <div class="menu-whats">
       <a href="https://wa.me/5214423857827">
           <img widht="65px" height="65px" class="imgWhats" src="{{ asset('assets/img/PNG/logos/Logo_Whatsaap.png') }}" alt="whatsapp">
        </a>
    </div>
  </footer>
  <!--BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  <!--JQUERY-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('assets/js/slider.js') }}"></script>
  
  <!--FancyBox-->
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
  <script src="{{ asset('assets/js/fancybox.js')}}"></script>
  
  <!--Script Scroll-->
  <script>
       //Script para  el scroll
       $(window).scroll(function(){
       if($("#header").offset().top > 100)
       {
         $("#header").addClass("scrolled");
       }
       else
       {
        $("#header").removeClass("scrolled");
       }
       });
  </script>
  
  <script src="{{ asset('assets/js/contacto.js')}}"></script>
  <!--Slider detras de-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
  <script src="{{ asset('assets/js/slider_detras.js')}}"></script>
  
  <!--Amcharts-->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/maps.js"></script>
  <script src="https://www.amcharts.com/lib/4/geodata/usaLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>
  <script src=" {{ asset('assets/js/mapaMx.js')}}"></script>
  <script src="{{ asset('assets/js/chartOrganigrama.js')}}"></script>
  <script src="{{ asset('assets/js/chartOrganigrama_Movil.js')}}"></script>
    
  