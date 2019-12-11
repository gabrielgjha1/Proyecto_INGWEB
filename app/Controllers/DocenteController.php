<?php
    require_once ("Models/DocenteModel.php");
    class DocenteController{

        function  __construct()
        {
        }

        function Mostrar(){

            $mostrar=new Docente_Model();
            $resultados=$mostrar->Datos();
            require_once("Views/DocenteView/listar.php");

        }
        function Registrar(){

            $registrar=new Docente_Model();
            $resultado=$registrar->Registro();
            require_once ('Views/DocenteView/registrar.php');

        }

        function crear_u(){

            $mostrar = new Docente_Model();
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $correo=$_POST["correo"];
            $rol=$_POST["rol"];
            $resultado=$mostrar->crear_usuario($usuario,$contrasena,$correo,$rol);
            require_once ("Views/DocenteView/crear_usuario.php");



        }

        function modificar(){

            $mostrar=new Docente_Model();
            $resultados=$mostrar->Traer_datos();
            $nombre=$_POST["nombre"];
            $apellido2=$_POST["apellido2"];
            $apellido1=$_POST["apellido1"];
            $nombre2=$_POST["nombre2"];
            $cedula=$_POST["cedula"];

            $resultados2=$mostrar->Modificar_datos($nombre,$apellido2,$apellido1,$nombre2,$cedula);
            require_once("Views/DocenteView/modificar.php");


        }

    }
?>
