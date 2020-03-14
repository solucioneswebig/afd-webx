<?php  

	require "conexion.php";

	class ModeloUsuarios 
	{
		
			/*==========================================
					=            REGISTRAR USUARIOS            =
			==========================================*/
			public static function mdlRegistroUsuario($tabla, $datos){
                $link = Conexion::conectar();
				$stmt = $link->prepare(
										"INSERT INTO $tabla
										(
											nombre_usuario,
											password,
											nombre_completo,
											apellido_paterno,
											apellido_materno,
											direccion,
											colonia,
											municipio,
											estado,
											codigo_postal,
											telefono,
											email
										)	
										VALUES 
										(
											:nombre_usuario,
											:password,
											:nombre_completo,
											:apellido_paterno,
											:apellido_materno,
											:direccion,
											:colonia,
											:municipio,
											:estado,
											:codigo_postal,
											:telefono,
											:email
										)
										"
								);

				$stmt->bindParam(":nombre_usuario", 	$datos["nombre_usuario"]);
				$stmt->bindParam(":password", 				$datos["password"]);
				$stmt->bindParam(":nombre_completo", 	$datos["nombre_completo"]);
				$stmt->bindParam(":apellido_paterno", $datos["apellido_paterno"]);
				$stmt->bindParam(":apellido_materno", $datos["apellido_materno"]);
				$stmt->bindParam(":direccion", 				$datos["direccion"]);
				$stmt->bindParam(":colonia", 					$datos["colonia"]);
				$stmt->bindParam(":municipio", 				$datos["municipio"]);
				$stmt->bindParam(":estado",	 					$datos["estado"]);
				$stmt->bindParam(":codigo_postal", 		$datos["codigo_postal"]);
				$stmt->bindParam(":telefono", 				$datos["telefono"]);
				$stmt->bindParam(":email", 						$datos["email"]);

				if($stmt->execute()){
					return "ok";
				}else{
					return "error";
				}

				$stmt->close();

				$stmt = null;

			}

			/*==========================================
					=      REGISTRAR USUARIOS COMPLETO        =
			==========================================*/
			public static function mdlRegistroUsuario_completo($tabla, $datos){
                $link = Conexion::conectar();
				$stmt = $link->prepare(
										"INSERT INTO $tabla
										(
											correo,
											dominio,
											impuesto,
											nombre,
											apellido,
											direccion,
											ciudad,
											estado,
											telefono,
											postal,
											pais,
											paypal,
											emailPaypal,
											terminos
										)	
										VALUES 
										(
											:correo,
											:dominio,
											:impuesto,
											:nombre,
											:apellido,
											:direccion,
											:ciudad,
											:estado,
											:telefono,
											:postal,
											:pais,
											:paypal,
											:emailPaypal,
											:terminos
										)
										"
								);

				$stmt->bindParam(":correo", 	$datos["correo"]);
				$stmt->bindParam(":dominio", 	$datos["dominio"]);
				$stmt->bindParam(":impuesto", $datos["impuesto"]);
				$stmt->bindParam(":nombre", 	$datos["nombre"]);
				$stmt->bindParam(":apellido", $datos["apellido"]);
				$stmt->bindParam(":direccion",$datos["direccion"]);
				$stmt->bindParam(":ciudad", 	$datos["ciudad"]);
				$stmt->bindParam(":estado", 	$datos["estado"]);
				$stmt->bindParam(":telefono",	$datos["telefono"]);
				$stmt->bindParam(":postal", 	$datos["postal"]);
				$stmt->bindParam(":pais", 		$datos["pais"]);
				$stmt->bindParam(":paypal", 	$datos["paypal"]);
				$stmt->bindParam(":emailPaypal", $datos["emailPaypal"]);
				$stmt->bindParam(":terminos", $datos["terminos"]);

				if($stmt->execute()){
					return "ok";
				}else{
					return "error";
				}

				$stmt->close();

				$stmt = null;

			}
			
						/*========================================
			=            MOSTRAR USUARIOS            =
			========================================*/
			public static function mdlMostrarUsuarios($tabla,$item,$valor){

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item ");

				$stmt->bindParam(":".$item, $valor);

				$stmt->execute();

				return $stmt->fetch();

				$stmt->close();

				$stmt = null;

			}
		
	}
