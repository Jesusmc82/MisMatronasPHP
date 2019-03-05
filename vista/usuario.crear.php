<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Añadir Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1><a href="index.php?mod=usuario&ope=index">Usuario</a></h1>
    <form action="index.php" method="GET">
        <input id="mod" name="mod" type="hidden" value="usuario">
        <input id="ope" name="ope" type="hidden" value="crear">
        <label>Nombre</label>
        <input id="nom" name="nom" type="text" value="">
        <label>Apellidos</label>
        <input id="apl" name="apl" type="text" value="">
        <label>DNI</label>
        <input id="iden" name="iden" type="text" value="">
        <label>Fecha Nacimiento</label>
        <input id="ncm" name="ncm" type="date" value="">
        <button type="sumbit">Añadir</button>
    </form>
</body>
</html>