<?php
  include ('style/menu_lateral.php');
 

  include ('style/cuerpo.php');
?>
<h1>Nuevo Usuario</h1>

<form class="form-horizontal form-label-left input_mask" action="index.php?mod=usuario&ope=crear" method="GET">
  <input id="mod" name="mod" type="hidden" value="usuario">
  <input id="ope" name="ope" type="hidden" value="crear">

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="nom" name="nom" placeholder="Nombre">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="apl" name="apl" placeholder="Apellido">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="iden" name="iden" placeholder="DNI" minlength="9" maxlength="9">
    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="date" class="form-control has-feedback-left" id="ncm" name="ncm" placeholder="Fecha Nacimiento">
    <span class="fa fa-birthday-cake form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <select class="form-control" id="tpu" name="tpu" placeholder="Categoria Usuario">
      <option value="" disabled="" selected="" hidden="">Categoria Usuario</option>
      <option value= "1">Administrador</option>
      <option value= "2">Médico</option>
      <option value= "3">Fisioterapeuta</option>
      <option value= "3">Matrona</option>
      <option value= "4">Paciente</option>
    </select>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="tlf" name="tlf" placeholder="Telefono" minlength="9" maxlength="9">
    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="email" class="form-control has-feedback-left" id="mail" name="mail" placeholder="E-mail">
    <span class="fa fa-inbox form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="drc" name="drc" placeholder="Direccion postal">
    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    <input type="password" class="form-control has-feedback-left" id="psw" name="psw" placeholder="Password">
    <span class="fa fa-barcode form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="form-group">
    <div class="col-md-5 col-sm-5 col-xs-12 col-md-offset-5">
      <button type="submit" class="btn btn-success">Agregar</button>
      <button class="btn btn-primary" type="delete">Borrar</button>
    </div>
  </div>

</form>

<?php 
  include ('style/footer.php');
?>