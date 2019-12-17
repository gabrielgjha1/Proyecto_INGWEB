<?php
    session_start();
    require_once ('Models/AdministrativoModel.php');

    class AdministrativoController
    {


        function __construct()
        {

        }

        function mostrar(){
            $mostrar = new AdministrativoModel();
            $datos = $mostrar->listar_datos();
            $titulo=$mostrar->Datos_titulos();
            $capacitacion=$mostrar->Datos_capacitaciones();

            require_once ("Views/AdministrativoView/listar.php");
        }
        function add5(){
            require_once ("Views/AdministrativoView/crear_usuario.php");
        }
        function add6(){
            $titulo=array();
            $datos=array();
            $capacitacion=array();
            require_once ("Views/AdministrativoView/listar_cedula.php");
        }
        function listar_cedula(){
            $cedula=$_POST["cedula"];
            $tipo=$_POST["tipo"];
            $mostrar = new AdministrativoModel();
            $datos = $mostrar->listar_datos2($tipo,$cedula);
            $titulo=$mostrar->Datos_titulos2($tipo,$cedula);
             $capacitacion=$mostrar->Datos_capacitaciones2($tipo,$cedula);
            require_once ("Views/AdministrativoView/listar_cedula.php");

        }
        function crear_u(){
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $correo=$_POST["correo"];
            $rol=$_POST["rol"];
            $mostrar = new AdministrativoModel();
            $resultado=$mostrar->crear_usuario($usuario,$contrasena,$correo,$rol);
            require_once ("Views/AdministrativoView/crear_usuario.php");


        }
    }



?>