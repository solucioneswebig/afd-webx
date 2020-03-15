<?php 

$obtener_datos_user = select_one("SELECT * FROM tb_registro_afiliado where id_usuario = '".$_SESSION["id"]."'");

?>