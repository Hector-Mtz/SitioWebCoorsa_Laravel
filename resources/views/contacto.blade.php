<x-cabecera2></x-cabecera2>

  <section class="section1_contacto"  id="seccion__inicio">
      <div class="section1_contacto__container">
          <h1 class="section1__contacti_text">UBÍCANOS</h1>
      </div>

      <div class="section1_contacto2__container">
         <h2>y ponte en contacto.</h2>
      </div>

      <div class="section1_contacto_map">
         <img class="section_map_img" src="assets/img/PNG/elementos/MAPA_QRO.png" alt="">
         <div class="absolute-center" data-container="body">
            <a
            id="mapPopover"
            class="animate-ping circle-red position-absolute"></a>
            <img src="assets/img/png/logos/LOGO_COORSA_MAPA.png" alt="icon_map" width="100px" height="106px">
        </div>
      </div>
      <div class="section1_contacto3__container">
        <h1>Querétaro</h1>
     </div>
  </section>

  <section class="section3-contacto">
    <div class="section3-contacto__map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14933.807988553941!2d-100.33857339999999!3d20.6511822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35d1a9e9acb5b%3A0xd0d09aae0384a90a!2sTerra%20Business%20Park!5e0!3m2!1ses-419!2smx!4v1654540820228!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </section>

  
<section id="section4-contacto" class="section4-contacto">
  <div class="section4-contacto__texts">
      <h1 class="section4-contacto__text1">
        CONTACTO
      </h1> 
       <h2 class="section4-contacto__text2">
        Estamos para ayudarte
       </h2>
  </div>
  <div class="section4-contacto__form">
      <form action="" class="form_display">
                
        <textarea name="" id="" cols="2" rows="20"  style="margin: 2%"  placeholder="Mensaje" class="form-contacto_input_general input4"></textarea>
        <div class="form_inputs">
          <input type="text" placeholder="Nombre" class="form-contacto_input_general input1"> 
          <input type="email" placeholder="Correo" class="form-contacto_input_general input2" > 
          <input type="text"placeholder="Num.Teléfonico" class="form-contacto_input_general input3">
          <button class="form-contacto__button">enviar</button>
        </div>

      </form>
  </div>

</section>  

<!--Partes Moviles-->

<!--Contacto Sección-->
<section id="contacto" class="py-4 section-contacto2">
    <section class="clientes">
        <div class="mb-4">
            <div class="m-auto" style="width: 50%;">
                <h5 class="d-inline text-blue font-weight-900 section-contacto2_text1">
                    CONTACTO
                </h5> 
                <div class="d-inline-block">
                    <div class="container-lines">
                        <span class="lines-pinks"></span>
                    </div>
                </div>
                <p class="h6 text-gray-500">
                    Estamos para ayudarte
                </p>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-6">
                <form method="post" id="formContacto" novalidate
                class="col rounded-field">
                    <div class="form-row mb-2">
                        <input type="text" 
                        name="nombre" 
                        id="nombre" required 
                        class="form-control-inline" 
                        placeholder="Nombre Completo">
                    </div>
                    <div class="form-row mb-2">
                        <input type="email" 
                        name="email" 
                        id="email" required
                        class="form-control-inline" 
                        placeholder="Correo">
                    </div>
                    <div class="form-row mb-2">
                        <input type="text" 
                        name="cuidad" id="cuidad" 
                        required class="form-control-inline" 
                        placeholder="Cuidad">
                    </div>
                    <div class="form-row mb-2">
                        <input type="tel" 
                        name="telefono" id="telefono" 
                        required class="form-control-inline" 
                        placeholder="Número Telefónico">
                    </div>

                    <div class="form-row mb-2">
                        <textarea rows="3" 
                        name="mensaje" 
                        id="mensaje" 
                        placeholder="Mensaje"
                        class="form-control-inline"></textarea>
                    </div>
                    <div class="form-row text-center">
                        <button name="enviar_contacto" 
                        id="enviar_contacto" 
                        type="submit" 
                        class="form-btn mx-auto btn-grad btn-grad-blue section-contacto2_button">
                        enviar</button>
                        <div id="results"
                         
                        style="display: none;"
                        class="alert alert-success">

                        </div>
                        <div id="resultsError" 
                        style="display: none;"
                        class="alert alert-danger" role="alert">
                        
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 overflow-auto">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3733.244333310589!2d-100.3298401!3d20.6596363!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35d1a9e9acb5b%3A0xd0d09aae0384a90a!2sTerra%20Business%20Park!5e0!3m2!1ses!2smx!4v1651521745942!5m2!1ses!2smx" 
                style="height: 100%; width:100% "
                allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
        </div>
    </section>
    
</section>


<x-footer></x-footer>