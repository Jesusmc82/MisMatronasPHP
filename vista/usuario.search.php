<?php
  include ('style/menu_lateral.php');
  include ('style/cuerpo.php');
?>
<table id="datatable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>DNI</th>
      <th>Nombre y apellidos</th>
      <th>Fecha Nacimiento</th>
      <th>Direcci&oacuten</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $item) { ?>
      <tr>
        <td><?=$item->getIdUser()?></td>
        <td><?=$item->getdni()?></td><td><a href="index.php?mod=usuario&ope=historiaClinica&idUser=<?=$item->getIdUser();?>"><?=$item->getnombre();?> <?=$item->getapellidos()?> </a></td>
        <td><?=$item->getnacimiento()?></td>
        <td><?=$item->getdireccion()?></td>
        <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>">Editar</a></td>
        <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>">Eliminar</a></td>
      </tr>
    <?php 
      }
    ?>
  </tbody>
</table>
<?php
  include ('style/footer.php');
?>