<?php
    include ('style/menu_lateral.php');
    include ('style/cuerpo.php');
?>
<form action="index.php" method="GET">
    <input type="hidden" name="mod" value="usuario">
    <input type="hidden" name="ope" value="update">
    <input name="idUser" type="hidden" value="<?= $id ?>">

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="nom" name="nom" value="<?= $nombre ?>">
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="apl" name="apl" value="<?= $apellidos ?>">
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="iden" name="iden" value="<?= $dni ?>">
        <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="drc" name="drc" value="<?= $direccion ?>">
        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="date" class="form-control has-feedback-left" id="ncm" name="ncm" value="<?= $nacimiento ?>">
        <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <select class="form-control" id="tpu" name="tpu" value="<?= $tipoUser ?>">
            <option value="" disabled="" selected="" hidden="">Categoria Usuario</option>
            <option value= "1">Administrador</option>
            <option value= "2">Médico</option>
            <option value= "3">Fisioterapeuta</option>
            <option value= "3">Matrona</option>
            <option value= "4">Paciente</option>
        </select>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="tlf" name="tlf" value="<?= $telefono ?>" minlength="9" maxlength="9">
        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="email" class="form-control has-feedback-left" id="mail" name="mail" value="<?= $mail ?>">
        <span class="fa fa-inbox form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="text" class="form-control has-feedback-left" id="drc" name="drc" value="<?= $direccion ?>">
        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <input type="password" class="form-control has-feedback-left" id="psw" name="psw" value="<?= $password ?>">
        <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-5">
            <button type="submit" class="btn btn-success">Editar</button>
        </div>
    </div>

</form>
<script type="text/javascript">
    $('#tpu').val('<?= $tipoUser ?>');
</script>
<?php
    include ('style/footer.php');
?>