<?php

if(!isset($_SESSION)){
	session_start();
}

$url = ctrRuta();
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?php echo $url; ?>vistas/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $url; ?>vistas/assets/css/style5.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="<?php echo $url; ?>vistas/assets/js/script.js"></script>

  </head>
  <body class="bg-gris2">
  <?php if (empty($_SESSION["validarSession"])) { ?> 
  <nav class="navbar navbar-expand-lg navbar-light sticky-top text-white bg-azul" id="menu-principal">
  <a class="navbar-brand text-white" href="<?php echo $url ?>">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto d-flex w-100 justify-content-end">
      <li class="nav-item active">
        <a class="nav-link text-white" href="<?php echo $url ?>">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Mi cuenta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?php echo $url ?>registrar">Registrate ahora</a>
      </li>
    </ul>

  </div>
</nav>
<?php } ?>

