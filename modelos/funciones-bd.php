<?php
session_start();

/*FUNCION SELECCIONAR VARIOS*/
function select_all($sql){
			$stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();  
            $datos = $stmt->fetchAll();
			$stmt = null;
			return $datos;
}
/*FUNCION SELECCIONAR VARIOS FIN*/
/*FUNCION SELECCIONAR UNO*/
function select_one($sql){
			$stmt = Conexion::conectar()->prepare($sql);
            $stmt->execute();  
            $datos = $stmt->fetch();
			$stmt = null;
			return $datos;
}
/*FUNCION SELECCIONAR UNO FIN*/
/*FUNCION INSERTAR*/
function insert($bd,$data){
$data_one = "";
$data_two = "";
$contador = count($data);
$i = 1;
foreach ($data as $key => $value) {
		if($i < $contador){
			$data_one .= $key.",";
			$data_two .= ":".$key.",";
		}else{
			$data_one .= $key;
			$data_two .= ":".$key;
		}
		$i++;
}
 $sql = "INSERT INTO ".$bd." (".$data_one.") VALUES (".$data_two.")";
$stmt= Conexion::conectar()->prepare($sql);
$dato = $stmt->execute($data);
//$stmt = null;
return $dato;
}
/*FUNCION INSERTAR FIN*/
/*FUNCION BORRAR*/
function delete($bd,$where){
foreach ($where as $key => $value) {
	$campo = $key;
	$value_campo = $value;
}
$sql = "DELETE FROM ".$bd."
WHERE ".$campo." = ".$value_campo."";
$stmt= Conexion::conectar()->prepare($sql);
$dato = $stmt->execute();
$stmt = null;
return $dato;
}
/*FUNCION BORRAR FIN*/
/*FUNCION ACTUALIZAR*/
function update($bd,$where,$data){
$data_one = "";
$contador = count($data);
$i = 1;
foreach ($data as $key => $value) {

		if($i < $contador){
			$data_one .= $key."=:".$key.",";
		}else{
			$data_one .= $key."=:".$key;
		}
		$i++;
}
foreach ($where as $key => $value) {
	$campo_where = $key;
	$value_where = $value;
}
 $sql = "UPDATE ".$bd." SET ".$data_one." WHERE ".$campo_where."=".$value_where."";
$stmt= Conexion::conectar()->prepare($sql);
$dato =  $stmt->execute($data);
$stmt = null;
return $dato;
}
/*FUNCION ACTUALIZAR FIN*/

/*LAST ID*/

function last_id(){
	$link = Conexion::conectar();
	return $link->lastInsertId();
}

/*LAST ID FIN*/


/*ACCEDER*/
if (isset($_POST['access_afiliado'])){

$name_usuario = $_POST['usuario'];

$obtener_datos = select_one("SELECT * FROM tb_registro_afiliado WHERE nombre_usuario ='".$name_usuario."'");

if(password_verify($_POST['passwordI'], $obtener_datos['password'])){

				$_SESSION["validarSession"] = "ok";
				$_SESSIOM["id"] = $respuesta["id_usuario"];


				echo '<script type="text/javascript">
				location.href = "http://afiliados.webx.mx/dashboard/";
						</script>';

}

}
/*ACCEDER*/

