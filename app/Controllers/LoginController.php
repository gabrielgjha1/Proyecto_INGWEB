<?php
    require_once ('Models/LoginModel.php');
require_once ('index.php');
class LoginController{

    function __construct()
    {
    }

    function login() {

        $mostrar = new LoginModel();
        $resultado1=$mostrar->Validar_datos();

        require_once ("Views/LoginView/login.php");

    }



}


?>