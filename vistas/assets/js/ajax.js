var ruta_servidor = "http://"+document.domain+"/webx-afiliados/";
$(document).ready(function() {


    /**
     * 
     *  REGISTRO RAPIDO
     * 
     */

    $("#enviar_registro_rapido").click(function(){

        $.post(ruta_servidor+"vistas/assets/ajax/enviar.php",$("#formulario_registro_rapido").serialize(),function(res){

            //$("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
    
            console.log(res)
                /*
               if(res == 0){
                
                $(".mensaje").html('<div class="alert alert-danger">Alguno de los datos ingresados son incorrectos.</div>');
        
               }else{
                location.href = res;
               }
               */
         });



    })
    


 });