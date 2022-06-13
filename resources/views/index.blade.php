<!--Importamos la cabecera-->
<x-cabecera></x-cabecera>
 <!--Comienza el body-->
<body>
  <main>
      <!--Seccion 1 Servicios -->
     <section class="section1_servicios" id="seccion__inicio">
          <div class="container_servicios_text">
            <h2 class="section1_servicios_text">
                Ideamos 
                <strong>soluciones innovadoras</strong> 
                de <br> logística 
                <strong>para tí y tu empresa</strong> .
             </h2>
          </div>

          <button class="section1_servicios__button">
              <a href="#">Contáctanos</a>
          </button>

          <div class="section1__buttons">
            <div style="float:left ;">
              <a href="https://www.linkedin.com/company/corsa-m%C3%A9xico">
                 <img class="section1__buttons__img" src="{{ asset('assets/img/PNG/logos/Logo_Blanco_Linkedin.png') }}" alt="logo1">
              </a>
            </div>
            <div style="float:left ;">
              <a href="https://www.facebook.com/coorsamexico">
                <img class="section1__buttons__img"  src="{{ asset('assets/img/PNG/logos/Logo_Blanco_Facebok.png') }}" alt="logo2">
               </a>
            </div>
          </div>

          
         <div class="section1__button">
            <a href="#seccion__servicios">
             <div class="secction1__flechas">
               <div class="chevron"></div>
               <div class="chevron"></div>
               <div class="chevron"></div>
             </div>
              <img class="section1__button__img" src="{{ asset('assets/img/PNG/elementos/circulo.png') }}" alt="boton_abajo">
            </a>
         </div>

    </section>

    <!--Seccion 2 Servicios -->
     <section id="seccion__servicios" class="section2-servicios">
        <div class="container-seccion2">
            <h3 class="container-seccion2__texto1">Conoce lo que tenemos para </h3>
            <h1 class="container-seccion2__texto2">
              <strong>OFRECERTE</strong>
            </h1>
        </div>
     </section>
  </main>

      <!--Seccion Carrusel Servicios -->
      <section class="section3" >
        <div class="container-section3">
          <div class="swiper mySwiper">
             <div class="swiper-wrapper">
               <div class="swiper-slide">
                 <div class="card" style="height: 80%;">
                    <img class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_1.jpg') }}" />
                    <div class="info">
                       <h2 class="info__text">
                         Evitar rechazos es el objetivo
                       </h2>
                    </div>
                  </div> 
               </div>
               <div class="swiper-slide">
                 <div class="card" style="height: 80%;">
                   <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_2.jpg') }}"/>
                   <div class="info">
                       <h2 class="info__text">
                         <strong>Mano de obra</strong> certificada para cargas y descargas.
                       </h2>
                    </div>
                 </div>
               </div>
               <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                   <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_3.jpg') }}" />
                   <div class="info">
                     <h2 class="info__text">
                         Un <strong>sistema innovador</strong> a la medida de cada cliente
                         (handhels, impresoras portatiles y códigos QR).
                     </h2>
                   </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                  <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_4.jpg') }}"/>
                  <div class="info">
                     <h2 class="info__text">
                         Un <strong>patio eficiente y ordenado</strong>
                         (3 veces mas eficientes que un tracto normal).
                     </h2>
                   </div>
                </div>
               </div>
               <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                   <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_5.jpg') }}"/>
                   <div class="info">
                     <h2 class="info__text">
                         <strong>Camionetas de 1  y 1.5 toneladas</strong>
                         (Last Mile y Line-haul ecommerce).
                     </h2>
                   </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                  <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_6.jpg') }}"/>
                  <div class="info">
                     <h2 class="info__text">
                         <strong>1500 mts Tu mercancía está segura.</strong> QUERÉTARO, TULTITLÁN EDO. DE MÉXICO.
                     </h2>
                   </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                  <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_7.jpg') }}"/>
                  <div class="info">
                     <h2 class="info__text">
                         <strong>Diseñado</strong> especialmente <strong>para operadores.</strong>
                     </h2>
                   </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                  <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_8.jpg') }}"/>
                  <div class="info">
                     <h2 class="info__text">
                        Ten el <strong>control de</strong> tus 
                        <strong>cuentas con</strong> una <strong>preliquidación.</strong>
                     </h2>
                   </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card" style="height: 80%;">
                  <img  class="container-section3__img" src="{{ asset('assets/img/JPG/servicios/Servicio_9.jpg') }}"/>
                  <div class="info">
                     <h2 class="info__text">
                        <strong>Abastecemos</strong> a tu sitio 
                        <strong> de los insumos de mayor uso.</strong>
                     </h2>
                   </div>
                </div>
              </div>
           </div>          
           <!-- If we need navigation buttons -->
           <div class="swiper-button-prev"></div>
           <div class="swiper-button-next"></div>
        </div>
       </section>
   
       <!--Seccion Años -->
       <section class="section4">
         <div class="container-section4">
            <p class="container-section4__text">
                <span>Somos</span>
                <span> un </span>
                <span> equipo </span>
                <span> de </span>
                <span> profesionales </span>
                <span> altamente </span>
                <span>
                  <strong>comprometido</strong>
                </span>
                <span> en </span> 
                <span>  dar </span>
                <span> 
                  <strong> soluciones </strong> 
                </span>  
                <span>
                  <strong>logísticas,</strong>
                </span>
                <span> somos </span> 
                <span> 
                  <strong> reconocidos </strong>
                 </span>
                <span> 
                  <strong> por  </strong>
                </span>
                <span>
                  <strong> innovar </strong>
                </span>
                <span> procesos </span>
                <span>  en </span> 
                <span> la </span> 
                <span> cadena </span> 
                <span> de </span> 
                <span> suministros,</span> 
                <span> optimizando </span>
                <span> tiempos </span>
                <span> y </span>
                <span> recursos </span>
                <span> operativos </span>
                <span>  de: </span>
                <span>  almacenamiento,</span>
                <span> traslado </span>
                <span> y </span> 
                <span> control </span> 
                <span> de </span> 
                <span> inventarios. </span>
            </p>
         </div>
       </section>
       
       <!--Seccion Insights -->
       <section class="section5">
         <div class="container-section5">
            <h1 class="container-section5__titulo">INSIGHTS</h1>
            <h3 class="container-section5__text">Soluciones efectivas.</h3>
         </div>
       </section>
   
       <!--Seccion Insigths IMGS -->
       <section class="section6">
         <div class="container-section6">
             <div class="container-section6__div">
               <img class="container-section6__img" src="assets/img/PNG/Insigth_1.png"/>
             </div>
             <div class="container-section6__div">
               <img class="container-section6__img" src="assets/img/PNG/Insigth_2.png">
             </div>
             <div class="container-section6__div">
               <img class="container-section6__img" src="assets/img/PNG/Insigth_3.png"/>
             </div>
             <div class="container-section6__div">
               <img class="container-section6__img" src="assets/img/PNG/Insigth_4.png"/>
             </div>
         </div>
       </section>
   
       <!--Seccion Clientes -->
       <section class="section7">
       <div class="container-section7">
           <div class="swiper mySwiper2">
           <div class="swiper-wrapper">
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_CHEDRAUI.png"/>
             </div>
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_COLGATE.png">
             </div>
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_DHL.png"/>
             </div>
             <div class="swiper-slide">
               <img   class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_KIMBERLY.png"/>
             </div>
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_PURINA.png"/>
             </div>  
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_SORIANA.png">
             </div>  
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_UNILEVER.png">
             </div>  
             <div class="swiper-slide">
               <img  class="container-section7__img" src="assets/img/PNG/logos_clientes/LOGO_WALMART.png">
             </div>  
           </div> 
       </div>
      </div>
       </section>
<!--Importamos la cabecera-->
<x-footer></x-footer>
</body>
