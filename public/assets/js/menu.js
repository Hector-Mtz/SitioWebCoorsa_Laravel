$( document ).ready(function() {

  $('nav ul li > a:not(:only-child)').click(function(e) {
    $(this).siblings('.nav-submenu').toggle();
    $('.nav-submenu').not($(this).siblings()).hide();
    e.stopPropagation();
    console.log("Hola mundo")
  });

  $('html').click(function() {
    $('.nav-submenu').hide();
  });
  
  $('#nav-boton').click(function(e) {
     $('nav ul').toggleClass("flex");
    e.preventDefault();
    
    $('#nav-boton').toggleClass("activo");
    $(this).closest('.nav-movil').toggleClass('active menu-background');
    //backgound -img 
  
  });

  // $('.nav-menu li').click(function (e){
  //   $('#nav-boton').toggleClass("activo");
  //   $(this).closest('.nav-movil').toggleClass('active');
  // });

});

$(document).ready(function() {
  $(".trigger").click(function() {
    $(".menu-whats").toggleClass("active"); 
  });
  $('[data-toggle="popover"]').popover({
    container: 'body'
  });
  $('.popover-dismiss').popover({
    trigger: 'focus'
  })
  $("#mapPopover").popover({
    content: `<div class="d-flex align-items-start items">
    <svg xmlns="http://www.w3.org/2000/svg"width="100" height="26" class="text-white" fill="currentColor"  viewBox="0 0 16 16">
      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
    </svg>
    <p class="text-poper">Primera cerrada de circuito universidades No. Ext 35 No. Int 31-32, Complejo Industrial
    Terra Business Park. El Marqués, Querétaro,
    CP. 76269</p></div>
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" fill="currentColor" class="text-white" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> <a class="text-white" href="tel:3857827">52 (442) 385 7827</a></p>`,
    html: true,
    placement : "top",
  }); 
});

 