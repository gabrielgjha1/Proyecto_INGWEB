<?php
require_once ('Db/Conexion.php');

if (isset($_GET["action"]) && isset($_GET["controller"]) ){
    $controller=$_GET["controller"];
    $action=$_GET["action"];
}
else {
    $controller="Home";
    $action="index";
}

require_once ("Views/Layout/layout.php");




?>