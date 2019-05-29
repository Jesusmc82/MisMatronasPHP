<?php
    include ('style/menu_lateral.php');
    include ('style/cuerpo.php');
?>
<form action="index.php" method="GET">
    <input type="hidden" name="mod" value="usuario" />
    <input type="hidden" name="ope" value="update" />
    <input name="idUser" type="hidden" value="<?= $id ?>" />
    <label for="nom">Nombre</label>
    <input id="nom" name="nom" type="text" value="<?= $nombre ?>">
    <label for="apl">Apellidos</label>
    <input id="apl" name="apl" type="text" value="<?= $apellidos ?>">
    <label for="iden">DNI</label>
    <input id="iden" name="iden" type="text" value="<?= $dni ?>">
    <label for="ncm">Fecha Nacimiento</label>
    <input id="ncm" name="ncm" type="date" value="<?= $nacimiento ?>">
    <input type="image" src="style/img/editar.gif" width="45" height="45">
</form>

<?php
    include ('style/footer.php');
?>