<?php

  session_start();

  if(empty($_SESSION)) {
    header('location: /');
  }

  require_once "includes/head.php";
  include ('includes/menu_lateral.php');
  include ('includes/cuerpo.php');

?>
<table id="datatable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>DNI</th>
      <th>Nombre y apellidos</th>
      <th>Fecha Nacimiento</th>
      <th>Direcci&oacuten</th>
      <th>Mail</th>
      <th>Tel&eacutefono</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $item) { ?>
      <tr>
        <td><?=$item->getdni()?></td>
        <td><a href="index.php?mod=historial&ope=visual&idUser=<?=$item->getIdUser();?>"><?=$item->getnombre();?> <?=$item->getapellidos()?> </a></td>
        <td><?=$item->getnacimiento()?></td>
        <td><?=$item->getdireccion()?></td>
        <td><?=$item->getmail()?></td>
        <td><?=$item->gettelefono()?></td>
        <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>">Editar</a></td>
        <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>">Eliminar</a></td>
      </tr>
    <?php 
      }
    ?>
  </tbody>
</table>
<?php
  include ('includes/footer.php');
?>