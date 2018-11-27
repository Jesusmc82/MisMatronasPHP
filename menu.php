<?php
   session_start();
   ////no deja entrar si el usuario y contraseña están vacios.
   //if (empty($_SESSION['user_id'])) {
   // header('location: /MisMatronas');
   //}
?>

<!DOCTYPE html>
<html>
    <head>
        <LINK REL=StyleSheet HREF="css/style.css" TYPE="text/css" MEDIA=screen>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Menú</title>
    </head>
    <body>
            <h1>Matronas</h1>
            <a href=logout.php><button class="salida">Salir</button></a>
            
                
        <li><a href=usuarios/usuaria.php> <button style="margin-left: 739px">Usuaria</button></a></li>
        <li><a href=Profesional/Profesional.jsp><button style="margin-left: 775px">Profesional</button></a></li>
        <li><a href=Embarazo/Embarazos.jsp><button style="margin-left: 805px">Embarazos</button></a></li>
        <li><a href=Historial_Clinico/HistorialClinico.jsp><button style="margin-left: 828px">Historial Clinico</button></a></li>
        <li><a href=Usuaria/NuevaUsuaria.html><button style="margin-left: 840px">Nueva Usuaria</button></a></li>
        <li><a href=Embarazo/NuevoEmbarazo.jsp><button style="margin-left: 842px">Nuevo Embarazo</button></a></li>
        <li><a href=Profesional/AgregaProfesional.jsp><button style="margin-left: 834px">Nuevo Profesional</button></a></li>
    </body>
</html>
