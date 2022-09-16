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
                <strong>para ti y tu empresa</strong> .
             </h2>
          </div>

          <img class="img_home" src="{{ asset('assets/img/mobile_img/PNG/logos/logo_coorsa_home.png') }}" alt="">

          <button class="section1_servicios__button">
              <a href="{{url('contacto')}}">Contáctanos</a>
          </button>

          <button class="section1_servicios__button2">
            <a href="{{url('conocenos')}}">conócenos</a>
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <img class="modal_logo" src="{{ asset('assets/img/modals/modal1/img5.png') }}">

                 <div class="text_modal_group">
                  <h5 class="h5Modal" id="exampleModalLabel">Servicio</h5>
                  <h4 class="h4Modal" id="exampleModalLabel">01. Auditoria inteligente<br>MARK</h4>
                 </div>

                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="buttonCloseModal">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="page fs">
                  <div class="modal_img">
                    <img class="img1_modal" src="{{ asset('assets/img/modals/modal1/img6.jpg') }}">
                  </div>
                   <div class="modal_texts">
                       <h4>¿Beneficios logísticos?</h4>
                       <ul class="viñetas_group">
                         <li><span>Eliminación</span> de faltantes,sobrantes, códigos cambiados y daños.</li>
                         <li><span>Eficiencia</span> logística con la medición de tiempos de auditoría y carga.</li>
                         <li>Barras con % de avances de auditorías y cargas.</li>
                         <li><span>Evidencias fotográficas</span> de la carga completa.</li>
                         <li><span>Tarimas no olvidadas</span> en centro de distribución.</li>
                         <li><span>Rastreabilidad</span> de mercancia.</li>
                       </ul>
                   </div>
                   <div class="modal_text1">
                      <h5><span>1. </span> Conteo de piezas<br>dentro de una caja.</h5>
                   </div>
                   <div class="modal_text2">
                    <h5><span>2. </span> Conteo de cajas dentro de<br>una tarima(picking y pallet).</h5>
                 </div>
                 <div class="modal_text3">
                  <h5><span>3. </span> Conteo de tarimas en un camión.</h5>
<<<<<<< HEAD
                 </div>
                  <div class="fs_blur">
                     
                  </div>
                </div>
                <div class="page sc">
                  <img class="sc_img" src="{{ asset('assets/img/modals/modal1/img2.png') }}">
                  <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="buttonCloseModal">&times;</span>
                  </button>
=======
               </div>
                </div>
                <div class="page sc">
                  <img class="sc_img" src="{{ asset('assets/img/modals/modal1/img2.png') }}">
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd
                  <h3 class="sc_text">Un dispositivo inteligente que permite tener la trazabilidad<br>
                    y confianza de que tus tarimas fueron cargadas completas<br>
                    y correctamente en el camión.
                  </h3>
                  <div class="sc_texts1">
                    <h3>Descripción</h3>
                    <p>Este dispositivo cuenta con <span>sensores, alertas sonoras, iluminación</span>
                      y lectores líquidos de alta<br> velocidad, capaz de auditar y evidenciar la
                      mercancía cargada en el transporte.
                    </p>
                  </div>
                  <div class="sc_texts2">
                    <h3>Nuestra visión</h3>
                    <p>Generar <span>cargas confiables</span> y <span>evidencias fotografícas</span> que
                      permitan una entrega a cliente sin<br> incidencias ni desviaciones. Garantizando
                      el rastreo total del producto.
                     </p>
                  </div>
                  <img class="sc_mark_logo" src="{{ asset('assets/img/modals/modal1/img1.png') }}">
                  <img class="sc_mark_process" src="{{ asset('assets/img/modals/modal1/img3.png') }}">
<<<<<<< HEAD

=======
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd
                </div>
                <div class="page th">
                  <div class="th_texts">
                    <ul class="viñetas_group">
                      <li>Nada se escapa a los ojos de Mark, puede leer y tomar<br>tomar fotografías a altas velocidades (30fps).</li>
                      <li>Visualiza el contenido de cada tarima.</li>
                      <li>Pantalla con % de avance de auditoría y carga.</li>
                      <li>Desplázalo fácilmente a cualquier cortina.</li>
                      <li>Creación automática de layout de carga.</li>
                      <li>Detección de tarimas faltantes o incorrectas en el proceso de carga.</li>
                    </ul>
                  </div>  
<<<<<<< HEAD

                  <img class="th_img" src="{{ asset('assets/img/modals/modal1/img7.jpg') }}" alt="">
                  <button type="button" class="close" style="grid-column: 6/7; margin-left: 10rem; margin-top: 5rem;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="buttonCloseModal">&times;</span>
                  </button>
=======
                  <img class="th_img" src="{{ asset('assets/img/modals/modal1/img7.jpg') }}" alt="">
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd
                  <h5 class="th_h3">¡Deja atrás los procesos manuales y <br>atrévete a cambiar!</h5>
                  <img class="th_img2" src="{{ asset('assets/img/modals/modal1/img4.png') }}" alt="">
                </div>

                <!--
                <div class="page fr">
                
                </div>
                -->
              </div>
              <!--
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
               -->
            </div>
          </div>
        </div>
<<<<<<< HEAD

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="page al">
                          <img class="modal_logo2" src="{{ asset('assets/img/modals/modal1/img5.png') }}">
                           <div class="text_modal_group2">
                             <h5 class="al_h5Modal" id="exampleModalLabel">Servicio</h5>
                             <h4 class="al_h4Modal" id="exampleModalLabel">01. Auditoria inteligente<br>MARK</h4>
                           </div>
                           <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true" class="buttonCloseModal">&times;</span>
                           </button>
                           <img class="fs_img1_servicio" src="{{ asset('assets/img/modals/modal2/img2.png') }}">
                           <img class="fs_img3_servicio" src="{{ asset('assets/img/modals/modal2/img3.png') }}">
                          
                          <div class="modal_texts2">
                            <h4>¿Beneficios logísticos?</h4>
                            <ul class="viñetas_group2">
                              <li>Reducción de tiempos de descargas y recibos</li>
                              <li>Reducción de incidencias</li>
                              <li>Recuperación de mercancía no recibida</li>
                              <li>Liberación express de unidades.</li>
                              <li>Disminución de costos de estadía.</li>
                              <li>Entregas garantizadas con cliente</li>
                            </ul>
                        </div>
                         </div>
                        <div class="page sc">
                        
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>

=======
=======
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
>>>>>>> 16b014989400d799931f801ac74636eaadefa3f4
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd

     </section>
  </main>

      <!--Seccion Carrusel Servicios -->
      <section class="section3" >
        <div class="container-section3">
          <div class="swiper mySwiper">
             <div class="swiper-wrapper">
               <div class="swiper-slide">
                 <div class="card" style="height: 80%;" data-toggle="modal" data-target="#exampleModal">
                    
                    <img class="container-section3__img"  src="{{ asset('assets/img/JPG/servicios/Servicio_1.jpg') }}"/>
                    <div class="info">
                       <h2 class="info__text">
                         Evitar rechazos es el objetivo.
                       </h2>
                       
                    </div>
                  </div> 
               </div>
               <div class="swiper-slide">
<<<<<<< HEAD
                 <div class="card" style="height: 80%;" data-toggle="modal" data-target="#exampleModal2">
=======
                 <div class="card" style="height: 80%;">
>>>>>>> 82470216eeaf5b9cfbd8efe1b0b32c01bf6f01cd
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

       <section class="content">
        <div class="grid-column-2">
            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 1 1.png" alt="">
                </div>
                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 1 2.png" alt=""></p>
                </div>
            </article>
            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 2 1.png" alt="">
                </div>
                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 2 2.png" alt=""></p>
                </div>
            </article>

            <!--***********************************************************************************************************************************************-->
            <!--***********************************************************************************************************************************************-->
            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 3 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 3 2.png" alt=""></p>
                </div>
            </article>

            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 4 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 4 2.png" alt=""></p>
                </div>
            </article>
            <!--***********************************************************************************************************************************************-->
            <!--***********************************************************************************************************************************************-->
            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 5 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 5 2.png" alt=""></p>
                </div>
            </article>

            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 6 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 6 2.png" alt=""></p>
                </div>
            </article>
            <!--***********************************************************************************************************************************************-->
            <!--***********************************************************************************************************************************************-->

            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 7 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 7 2.png" alt=""></p>
                </div>
            </article>

            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 8 1.png" alt="">
        
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 8 2.png" alt=""></p>
                </div>
            </article>
            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/img_serv.png" alt="servicios">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p>  <img src="assets/img/mobile_img/JPG/servicios/img_serv.png" alt="servicios"></p>
                </div>
            </article>
            <!--***********************************************************************************************************************************************-->
            <!--***********************************************************************************************************************************************-->

            <article class="contentBlock">
                <div class="cardFrontSide">
                    <img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 9 1.png" alt="">
                </div>

                <!--Parte de atras de la imagen-->
                <div class="cardBackSide">
                    <p><img src="assets/img/mobile_img/JPG/servicios/Mesa de trabajo 9 2.png" alt=""></p>
                </div>
            </article>
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
       <section class="section4_1">
          <img class="section4_1_img" src="assets/img/JPG/fondos/Fondo_Insigths.jpg" alt="">
       </section>
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

       <section class="section6_1">
          <div class="container_section6_1">
              <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img  class="container-section7__img" src="assets/img/mobile_img/JPG/insights/Insigths-24.png"/>
                  </div>
                  <div class="swiper-slide">
                    <img  class="container-section7__img" src="assets/img/mobile_img/JPG/insights/Insigths-25.png">
                  </div>
                  <div class="swiper-slide">
                    <img  class="container-section7__img" src="assets/img/mobile_img/JPG/insights/Insigths-26.png"/>
                  </div>
                  <div class="swiper-slide">
                    <img   class="container-section7__img" src="assets/img/mobile_img/JPG/insights/Insigths-27.png"/>
                  </div> 
                </div> 
            </div>
          </div>
       </section>

       <section class="section6_2">
           <div class="container_section6_2">
              <h2 class="section6_2__text1">Nuestros</h2>
              <h1 class="section6_2__text2">
                <strong>CLIENTES</strong>
              </h1>
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

    <section class="section7_1">
      <div class="container-section7_1">
         <div class="swiper mySwiper4">
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
</div>

<!--Importamos la footer-->
<x-footer></x-footer>
</body>
