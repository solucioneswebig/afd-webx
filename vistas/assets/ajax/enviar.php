<?php  
require_once "../../../librerias/mailer/class.phpmailer.php";
require_once "../../../librerias/mailer/class.smtp.php";
include "../../../modelos/ruta.php";
include "../../../modelos/funciones-bd.php";

$url    = ctrRuta();
	
/*===========================================
    =  REGISTRAR USUARIOS FORMULARIO RAPIDO =
==========================================*/

if(isset($_POST["nombre_usuario"])){

			$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$encriptarEmail = md5($_POST["email"]);

			$url = ctrRuta();

			$datos = array(
				'nombre_usuario'   => $_POST["nombre_usuario"], 
				'password' 		   => $encriptar, 
				'nombre_completo'  => $_POST["nombre_completo"], 
				'apellido_paterno' => $_POST["apellido_paterno"], 
				'apellido_materno' => $_POST["apellido_materno"], 
				'direccion'        => $_POST["direccion"], 
				'colonia'          => $_POST["colonia"], 
				'municipio'        => $_POST["municipio"], 
				'estado'           => $_POST["estado"], 
				'codigo_postal'    => $_POST["codigo_postal"], 
				'telefono'         => $_POST["telefono"], 
				'email_code'       => $encriptarEmail,
				'email'            => $_POST['email'],
				'estatus'          => 1
				
			);

			$tabla = "tb_registro_afiliado";

			$respuesta = insert($tabla, $datos);
			// echo $respuesta;

			if($respuesta){

				// $_SESSION["registrado"] = 1;
    $_SESSION["link"] = '<a href="'.$url.'verificar/'.$encriptarEmail.'" target="_blank" class="btn btn-success py-2 my-3">
            Verifique su dirección de correo electrónico
    </a>';	


                echo 1;

                $data_email = [
                    'url' => $url,
                    'encriptado' => $encriptarEmail 
                ];

                $envio = enviar_correo($data_email);

                if($envio == 1){
                    echo "Envio";
                }else{
                    echo "No envio";
                }
                

	}else{
        echo 0;
    }

}
	


if(isset($_POST["emailPaypal"])){

			$datos = array(
				'correo' 	=> 	$_POST["correo"],
				'dominio' 	=> 	$_POST["dominio"],
				'impuesto' 	=> 	$_POST["impuesto"],
				'nombre' 	=> 	$_POST["nombre"],
				'apellido' 	=> 	$_POST["apellido"],
				'direccion' 	=> 	$_POST["direccion"],
				'ciudad' 	=> 	$_POST["ciudad"],
				'estado' 	=> 	$_POST["estado"],
				'telefono' 	=> 	$_POST["telefono"],
				'postal' 	=> 	$_POST["postal"],
				'pais' 	=> 	$_POST["pais"],
				'paypal' 	=> 	$_POST["paypal"],
				'emailPaypal' 	=> 	$_POST["emailPaypal"],
				'terminos' 	=> 	$_POST["terminos"]
			);

			$tabla = "tb_registro_afiliado_mas_info";

			$respuesta = insert($tabla, $datos);

			if($respuesta){
				// echo "guardado";
				$correo = $_POST["correo"];
	 			$this->enviar_cliente_vuelta($correo);

			}

}


	



function enviar_cliente_vuelta($correo){

    $mensaje_client  = "<div style='padding: 30px;width:80%;max-width:400px;margin:0 auto;background: #f9f9f9;box-shadow: 2px 2px 3px #999;margin-top: 30px;'>";
    
    $mensaje_client  .= "<small style='text-align:center;color:#f9f9f9;'>Tienes un código de Descuento listo para contratar tu Página Web</small>";
    
    $mensaje_client  .= "<a href='https://webx.mx'><p style='text-align:center;'><img src='https://webx.mx/views/home/img/logo-webx.png' alt=' ' style='width:60%;max-width:180px;'></p></a>";
  	$mensaje_client .= "<h3 style='text-align:center;font-weight:bold;'>CÓDIGO DE DESCUENTO</h3><hr>";
  	
  	$mensaje_client .= "<p>Hola, Acabas de Recibir tú Código de descuento para contratar tú <span style='font-weight:bold;'>Página Web en PLAN SENCILLO.</span></p>";
  	
    $mensaje_client .= "<h3 style='text-align:center;font-weight:bold;'>CÓDIGO <span style='font-size:24px;font-wright:bold;'>".$_POST['codigo']."</span></h3><hr>";
  	
  	$mensaje_client .= "<p style='text-align:center;'>Vigencia hasta el ".date("d",$mod_date)." / ".date("m",$mod_date)." / ".date("Y",$mod_date)."</p>";
  	
  	$mensaje_client  .= "<a href='https://webx.mx'><p style='text-align:center;'><img src='https://webx.mx/views/promo/img/phone.png' alt=' ' style='width:60%;max-width:240px;'></p></a>";
  	
  	$mensaje_client .= "<a href='https://webx.mx/precios/' style='text-align:center;padding:10px 20px;background:#ff610a;color:#fff;text-decoration:none;width:58%;margin: 0 auto;display: block;border-radius: 4px;'>QUIERO UTILIZARLO AHORA</a>";
  	
  	$mensaje_client .= "</div>";
  	$mensaje_client .= "<div style='padding:3px 30px;background: #ababab;color:#fff;width: 80%;max-width: 400px;margin:0 auto;'>";
  	$mensaje_client .= "<p style='text-align:center;'><a href='https://webx.mx' style='color:#fff;text-decoration:none;'>WEBX.MX</a> | ".date('Y')."</p>";
  	
  	
  	$mensaje_client .= "</div>";
	$asunto_client = 'CODIGO DE DESCUENTO';
		

	$salto = chr(13).chr(10);
	
    //Creamos la instancia de la clase PHPMAiler
  	$mail = new phpmailer();

  //El método que usaremos es por SMTP
  	$mail->Mailer = "smtp";

  // Los datos necesarios para enviar mediante SMTP
  	$mail->Host = "mail.directorioelregional.com";
  	$mail->SMTPAuth = true;
  	$mail->Username = "info@directorioelregional.com";
  	$mail->Password = "xixi20132013";

  // Asignamos el From y el FromName para que el destinatario sepa quien
  // envía el correo
  	$mail->From = "info@webx.mx";
  	$mail->FromName = "WEBX.MX - CUPON";

  //Añadimos la dirección del destinatario, puede ser de cualquier dominio o servidor de correo
  	$mail->AddAddress("directorioelregional@hotmail.com");


  //Asignamos el subject, el cuerpo del mensaje y el correo alternativo
  	$mail->Subject = $asunto_client;
  	$mail->Body = utf8_decode($mensaje_client);
  	$mail->AltBody = "Esto es un ejemplo de correo.";
  	
		
  	if($mail->Send())
  	{
  	    return 1;
  	}else{
  	    return 2;
  	}
}


function enviar_correo($data){
    $mensaje_cliente = '<div style="width:100%; background: #eee; position: relative; font-family: sans-serif; padding-bottom: 40px;">
		

	<div style="position: relative; margin: auto; width: 600px; background: white; padding: 20px;">

		<h3 style="font-weight: 100; color:#555;">Haga click a continuación para confirmar su dirección de correo electrónico</h3>

		<br/>
		<center>
		
		<a href="'.$data['url'].'verificar/'.$data['encriptado'].'" target="_blank" style="text-decoration: none; text-align:center; width: 60%; color:white;padding: 15px;border-radius: 6px;background-color: #28a745;border-color: #28a745;">

			Crear mi cuenta

		</a>	

		</center>

		<br/>


		<h5 style="font-weight: 100;color:#555;">Si recibió este correo electrónico por error, elíminelo. No se le suscribira si no hace click en el vínculo de confirmación de arriba</h5>


	</div>


</div>';

    //Creamos la instancia de la clase PHPMAiler
  	$mail = new phpmailer();

  //El método que usaremos es por SMTP
  	$mail->Mailer = "smtp";

  // Los datos necesarios para enviar mediante SMTP
  	$mail->Host = "mail.directorioelregional.com";
  	$mail->SMTPAuth = true;
  	$mail->Username = "info@directorioelregional.com";
  	$mail->Password = "xixi20132013";

  // Asignamos el From y el FromName para que el destinatario sepa quien
  // envía el correo
  	$mail->From = "info@webx.mx";
  	$mail->FromName = "WEBX.MX - CUPON";

  //Añadimos la dirección del destinatario, puede ser de cualquier dominio o servidor de correo
  	$mail->AddAddress($_POST["email"],"Cliente");


  //Asignamos el subject, el cuerpo del mensaje y el correo alternativo
  	$mail->Subject = "Prueba asunto";
  	$mail->Body = utf8_decode($mensaje_cliente);
  	$mail->AltBody = "Esto es un ejemplo de correo.";
  	
		$envio = $mail->Send();				
		
		if(!$envio){
			echo 1;
		}else{
			echo 0;
		}
}
	
