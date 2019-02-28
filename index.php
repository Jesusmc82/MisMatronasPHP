<?php

    $mod = $_GET["mod"]??"usuario";
    $ope = $_GET["ope"]??"index";

    require_once "controlador/$mod.controller.php";

    $nme = "controller$mod";

    $cont = new $nme();

    if (method_exists($cont,$ope))
        $cont->$ope();
    else
        die("error");
?>