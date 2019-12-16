<?php
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

        $mostrar = new LoginModel();
        $resultado1=$mostrar->Validar_datos();

        if ($resultado1=="usuario o contraseña incorrecta"){
            require_once ("Views/LoginView/login.php");
        }

    }



}


?>