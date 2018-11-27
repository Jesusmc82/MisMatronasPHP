<!--Display inline block-->
<?php
  /*session_start();

  require 'libs/database.php';

  if (isset($_POST['dni']) && isset($_POST['pwd'])) {
    $records = $conn->prepare('SELECT DNI, Password FROM usuaria WHERE DNI= :dni');
    $records->bindParam(':dni' ,$_POST['dni']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user=null;

    if ($_POST['pwd'] == $results['Password']) {
      $_SESSION['user_id'] = $results['DNI'];
      header('location: menu.php');
    } else {
      echo '<p style="padding: 100px">Usuario o contraseña erroneos.</p>';
    }
  }*/
  echo "hola";
?>
<!DOCTYPE html>
<html>
    <head>
        <LINK REL=StyleSheet HREF="css/style.css" TYPE="text/css" MEDIA=screen>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Ingreso</title>

    </head>
    <body>
        <h1>Matronas</h1>
        <div class="container">
        <form method="post" action="index.php" autocomplete="off">
            <input type="text" placeholder="DNI" name="dni" cols="10" required/>
            <input type="password" placeholder="Password" name="pwd" required/>
        </div>
        <div class="entrada">
            <button>Entrar</button>
        </div>
        </form>
                        
    </body>
</html>
