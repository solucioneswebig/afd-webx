<?php 


class Conexion{


	public function conectar(){

		$link = new PDO("mysql: host=localhost; dbname=director_directorio", 
			               "director_admon",
			               "Qls%jZ5VnKg5",
			               array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
									);
		return $link;

	}




}//fin de la clase Conexion