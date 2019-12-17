<?php
    session_start();
    require_once ('Models/LoginModel.php');
    require_once ('index.php');
class LoginController{

    function __construct()
    {
    }

    function  add(){
        require_once ("Views/LoginView/login.php");
    }
    function login() {
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];

        $_SESSION['usuario']=$_POST["usuario"];
        $mostrar = new LoginModel();
        $resultado1=$mostrar->Validar_datos($usuario,$contra);

        if ($resultado1=="usuario o contraseña incorrecta"){
            require_once ("Views/LoginView/login.php");
            require_once ("Views/LoginView/css");
            equire_once ("Views/LoginView/img");

        }

    }



}


?>