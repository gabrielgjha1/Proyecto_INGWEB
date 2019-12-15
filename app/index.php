<?php

require_once ('Db/Conexion.php');


if (isset($_GET["action"]) && isset($_GET["controller"]) ){
    $controller=$_GET["controller"];
    $action=$_GET["action"];
    $resultado1=$_GET["log"];

    if ($resultado1 ==1 OR $resultado1==2){

        require_once ("Views/Layout/layout.php");

    }


}

else {
    $controller="Login";
    $action="login";
    require_once ('routes.php');
}






?>