<?php

require_once ('Db/Conexion.php');



if (isset($_GET["action"]) && isset($_GET["controller"]) ){
    $controller=$_GET["controller"];
    $action=$_GET["action"];
    require_once ("Views/Layout/layout.php");

}

else {
    $controller="Login";
    $action="login";
    require_once ('routes.php');
}






?>