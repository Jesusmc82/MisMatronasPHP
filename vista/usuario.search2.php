<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/style.css">
</head>
<body>
    
    <h1>Usuarios Listado</h1>
    <a href="index.php?mod=usuario&ope=logout">cierre sesion</a>
    <a href="index.php?mod=usuario&ope=menu">Menu</a>

    <table border cellpadding=5 cellspacing=3>
        <?php foreach ($datos as $item) {
        ?>
        <tr>
            <td><?=$item->getdni()?></td>
            <td><a href="index.php?mod=usuario&ope=historiaClinica&idUser=<?=$item->getIdUser();?>"><?=$item->getnombre();?> <?=$item->getapellidos()?> </a></td>
            <td><?=$item->getnacimiento()?></td>
            <td><?=$item->getdireccion()?></td>
            <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>"><img src="style/img/eliminar.svg"></a></td>
            <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>"><img src="style/img/editar.gif"></a></td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>