<?php
<<<<<<< HEAD
require_once ('Db/Conexion.php')
=======
require_once ('Db/Conexion.php');
>>>>>>> fd417e7ff6576c172c4ab84569678f7a618690c5

if (isset($_GET["action"]) && isset($_GET["controller"]) ){
    $controller=$_GET["controller"];
    $action=$_GET["action"];
}
<<<<<<< HEAD
=======
else {
    $controller="Home";


    $action="mensaje";
}

require_once ("Views/Layout/layout.php");

>>>>>>> fd417e7ff6576c172c4ab84569678f7a618690c5



?>