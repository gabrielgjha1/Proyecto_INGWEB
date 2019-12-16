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
        function add () {
            require_once ('Views/DocenteView/registrar.php');
        }
        function Registrar(){
            $nombre=$_POST["nombre"];
            $apellido2=$_POST["apellido2"];
            $apellido1=$_POST["apellido1"];
            $nombre2=$_POST["nombre2"];
            $cedula=$_POST["cedula"];
            $genero=$_POST["genero"];
            $civil=$_POST["civil"];
            $sangre=$_POST["sangre"];
            $usuario=$_POST["usuario"];
            $provincia=$_POST["provincia"];
            $distrito=$_POST["distrito"];
            $corregimiento=$_POST["corregimiento"];
            $ubicesp=$_POST["ubicesp"];
            $telefono=$_POST["telefono"];
            $categoria=$_POST["categoria"];
            $ubi=$_POST["ubi"];
            $departamento=$_POST["departamento"];
            $cargoadm=$_POST["cargoadm"];
            $gobierno=$_POST["gobierno"];

                 $registrar = new Docente_Model();
                 $resultado = $registrar->Registro($nombre, $apellido2, $apellido1, $nombre2, $cedula, $genero, $civil, $sangre
                     , $usuario, $provincia, $distrito, $corregimiento, $ubicesp, $telefono, $categoria, $ubi, $departamento, $cargoadm, $gobierno);

                 if ($resultado==1){
                 require_once ('Views/DocenteView/registrar_titulos.php');
             }
             if ($resultado==2) {

                 require_once('Views/DocenteView/registrar.php');

             }

        }

        function Registrar_titulos(){
            $titulo_ob=$_POST["titulo_ob"];
            $institucion=$_POST["institucion"];
            $tituload=$_POST["tituload"];
            $nivel=$_POST["nivel"];
            $año=$_POST["año"];
            $registrar=new Docente_Model();
            $resultado1=$registrar->Registrar_titulos($titulo_ob,$institucion,$tituload,$nivel,$año);
            echo $resultado1;
            require_once ('Views/DocenteView/registrar_titulos.php');
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

            $resultados2=$mostrar->Modificar_datos();
            require_once("Views/DocenteView/modificar.php");
        }

    }
?>
