<?php 
  //session_start();
    if (!isset($_SESSION['usuario'])){
        header("location: index.php");
      }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Men&uacute</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="main.js"></script>
</head>
<body>
    
    <a href="index.php?mod=acceso&ope=logout">cierre sesion</a>
    <h4><a href="index.php?mod=usuario&ope=crear"><img src="style/img/agregar.svg"></a></h4>
    <!-- <div class="grid">
        <div class="a">
            <a href="index.php?mod=usuario&ope=search"> <button class="button">Usuaria</button></a>
        </div>
        <div class="b">
            <a href=Profesional/Profesional.jsp><button class="button">Profesional</button></a>
        </div>
        <div class="c">
            <a href=Embarazo/Embarazos.jsp><button class="button">Embarazos</button></a>
        </div>
        <div class="d">
            <a href=Historial_Clinico/HistorialClinico.jsp><button class="button">Historial Clinico</button></a>
        </div>
        <div class="e">
            <a href="index.php?mod=usuario&ope=crear"><button class="button">Nueva Usuaria</button></a>
        </div>
        <div class="f">
            <a href=Embarazo/NuevoEmbarazo.jsp><button class="button">Nuevo Embarazo</button></a>
        </div>
        <div class="g">
            <a href=Profesional/NuevoProfesional.html><button class="button">Nuevo Profesional</button></a>
        </div>
    </div> -->
<div class="grid"> <!-- contenedor -->
  <div class="a">Item 1</div> <!-- cada uno de los ítems del grid -->
  <div class="b">Item 2</div>
  <div class="c">Item 3</div>
  <div class="d">Item 4</div>
</div>
</body>
</html>