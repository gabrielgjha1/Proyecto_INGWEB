<?php
    require_once ('Models/LoginModel.php');
class LoginController{

    function __construct()
    {
    }

    function login() {

        $mostrar = new LoginModel();
        $resultado = $mostrar->Validar_datos();

        require_once ("Views/LoginView/login.php");


    }

}


?>