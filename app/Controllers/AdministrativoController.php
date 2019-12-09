<?php
    require_once ('Models/AdministrativoModel.php');

    class AdministrativoController
    {


        function __construct()
        {

        }
        function mostrar(){
            $mostrar = new AdministrativoModel();
            $datos = $mostrar->listar_datos();
            require_once ("Views/AdministrativoView/listar.php");
        }
        function crear_u(){
            $mostrar = new AdministrativoModel();
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $correo=$_POST["correo"];
            $rol=$_POST["rol"];
            $resultado=$mostrar->crear_usuario($usuario,$contrasena,$correo,$rol);
            require_once ("Views/AdministrativoView/crear_usuario.php");

            
        }
    }



?>