$(document).ready(function (){
    $("#resultsError").html('');
    $("#resultsError").hide();
    $('#formContacto').on('submit', function (event){
        event.preventDefault();
         let data = {};
         data.nombre = $('#nombre').val();
         data.email = $('#email').val();
         data.cuidad = $('#cuidad').val();
         data.telefono = $('#telefono').val();
         data.mensaje = $('#mensaje').val();
         $.ajax({
            headers: {
                'Accept': 'application/json'
            },
            type: "POST",
            url: "http://coorsamexico.com/api/contactanos",
            data,
            success: function(data) {
                console.log(data);
              $("#results").html(data);
            
              
              $("#results").show();
              setTimeout(() => {
                $(this).trigger("reset");
                  $("#results").html('');
                  $("#results").hide();
              },2000)
            },
            error: function (dataError){
                const errors = dataError.responseJSON.errors;
                let error;
                let html = '';
                for(error in errors){
                    html+=errors[error][0]+'<br>';
                }
                $("#resultsError").html(html);
                $("#resultsError").show();
                    
            }
          });
    });
});