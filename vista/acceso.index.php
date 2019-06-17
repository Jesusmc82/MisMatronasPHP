<?php
  require_once "includes/head.php";
?>
<!DOCTYPE html>
<html lang="es">
  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action = "index.php?mod=acceso&ope=login" method = "POST">
              <h1>Acceder</h1>
              <div>
                <input  type="text" class="form-control" name = "login" placeholder="Username" minlength="9" maxlength="9" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name = "password" required="" />
              </div>
              <div>
                <input  type="submit" value = "Aceptar">
              </div>

              <div class="clearfix"></div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
