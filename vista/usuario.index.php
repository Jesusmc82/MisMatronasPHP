<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Usuarios Listado</h1>

    <h4><a href="index.php?mod=usuario&ope=crear">Agregar</a></h4>

    <table border cellpadding=10 cellspacing=5>
        <?php foreach ($datos as $item) {
        ?>
        <tr>
            <td><?=$item->getdni()?></td>
            <td><a href="index.php?mod=usuario&ope=historiaClinica&idUser=<?=$item->getIdUser();?>"><?=$item->getnombre();?> <?=$item->getapellidos()?></a></td>
            <td><?=$item->getnacimiento()?></td>
            <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>">Eliminar</a></td>
            <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>">Editar</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>