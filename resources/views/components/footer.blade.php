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

<!--SCRIPTS-->

  <!--Sliders-->
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

         //Script para  el scroll
         $(window).scroll(function(){
       if($("#header2").offset().top > 100)
       {
         $("#header2").addClass("scrolled");
       }
       else
       {
        $("#header2").removeClass("scrolled");
       }
       });
  </script>

  <script src="{{ asset('assets/js/contacto.js')}}"></script>
  <!--Slider detras de-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>
  <script src="{{ asset('assets/js/slider_detras.js')}}"></script>
  
  <!--Amcharts-->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/maps.js"></script>
  <script src="https://www.amcharts.com/lib/4/geodata/usaLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/plugins/forceDirected.js"></script>

  
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/hierarchy.js"></script>
<script src="//cdn.amcharts.com/lib/5/themes/Responsive.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


  <script src=" {{ asset('assets/js/mapaMx.js')}}"></script>
  <script src="{{ asset('assets/js/chartOrganigrama.js')}}"></script>
  <script src=" {{ asset('assets/js/menu.js')}}"></script>
  <script src=" {{ asset('assets/js/modal.js')}}"></script>
    
  