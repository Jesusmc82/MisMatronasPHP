<?php
  include ('style/menu_lateral.php');
 

  include ('style/cuerpo.php');
?>
<form class="form-horizontal form-label-left input_mask" action="index.php?mod=usuario&ope=crear" method="GET">
  <input id="mod" name="mod" type="hidden" value="usuario">
  <input id="ope" name="ope" type="hidden" value="crear">
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="nom" name="nom" placeholder="nombre">
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control" id="inputSuccess3" id="apl" name="apl" placeholder="apellido">
    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="text" class="form-control has-feedback-left" id="iden" name="iden" placeholder="DNI" minlength="9" maxlength="9">
    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
    <input type="date" class="form-control" id="ncm" name="ncm" placeholder="Fecha Nacimiento">
    <span class="fa fa-birthday-cake form-control-feedback right" aria-hidden="true"></span>
  </div>
  <!-- <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control" placeholder="Default Input">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="password" class="form-control" value="passwordonetwo">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
    </label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
    </div>
  </div> -->
  <div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
      <button type="button" class="btn btn-primary">Cancel</button>
      <button class="btn btn-primary" type="reset">Reset</button>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php 
  include ('style/footer.php');
?>