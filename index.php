<?php

    $mod = $_GET["mod"]??"acceso";
    $ope = $_GET["ope"]??"index";

    require_once "controlador/$mod.controller.php";

    $nme = "controller$mod";

    $cont = new $nme();

    if (method_exists($cont,$ope))
        $cont->$ope();
    else
        die("[index:15] - error");
?>
