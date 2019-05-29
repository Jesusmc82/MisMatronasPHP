<?php
    include ('style/menu_lateral.php');
    include ('style/cuerpo.php');
?>
<table id="datatable" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>NHC</th>
      <th>Evolucion</th>
      <th>Observaciones</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($datos as $item) { ?>
      <tr>
        <td><?=$item->getIdUser()?></td>
        <td><?=$item->getnhc()?></td>
        <td><a href="index.php?mod=usuario&ope=historiaClinica&idUser=<?=$item->getIdUser();?>"><?=$item->getevolucion();?> </a></td>
        <td><?=$item->getobservaciones()?></td>
        <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>"><!-- <img src="style/img/editar.gif"> --> Editar</a></td>
        <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>"><!-- <img src="style/img/eliminar.svg"> --> Eliminar</a></td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <?php
      include ('style/footer.php');
    ?>