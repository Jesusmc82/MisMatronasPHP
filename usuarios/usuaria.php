<?php
   session_start();
   require '../libs/database.php';
   ////no deja entrar si el usuario y contraseña están vacios.
   //if (empty($_SESSION['user_id'])) {
   // header('location: /MisMatronas');
   //} 
  if($_POST){
    $dni = $_POST["usr"];
    $SQL="SELECT * FROM  usuaria WHERE '%" .$dni. "%' order by DNI";
    $stmt = $conn->prepare($SQL);
    $result = $stmt->execute(array(":usuaria"=>$dni));
    $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo $rows[];
    if (count($rows)>0) {
      echo "hola";
      foreach ($rows AS $row) {
        echo "DNI: ".$row->DNI."<br>";
        echo "Nombre: ".$row->Nombre."<br>";
        echo "Apellidos: ".$row->Apellidos."<br>";
        echo "Email: ".$row->Email."<br>";

      }
    } else {
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <LINK REL=StyleSheet HREF="../css/style.css" TYPE="text/css" MEDIA=screen>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Usuaria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <div class="salida">
        <a href=../menu.php><button>Atras</button></a>
        <a href=../logout.php><button>Salir</button></a>
      </div>
      <form method="POST" action="usuaria.php" style="margin:auto;max-width:150px">
        <input type="text" size="50" placeholder="Usuaria" name="usr"> 
        <button type="submit"><i class="fa fa-search">Buscar</i></button>
      </form>
    </body>
</html>
