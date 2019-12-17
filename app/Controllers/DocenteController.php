<?php
    session_start();


require_once ("Models/DocenteModel.php");
    class DocenteController{

        function  __construct()
        {
        }

        function Mostrar(){

            $mostrar=new Docente_Model();
            $datos=$mostrar->Datos();
            $titulo=$mostrar->Datos_titulos();
            $capacitacion=$mostrar->Datos_capacitaciones();

            require_once("Views/DocenteView/listar.php");

        }
        function add () {
            require_once ('Views/DocenteView/registrar.php');
        }
        function add2(){
            require_once ('Views/DocenteView/registrar_capacitaciones.php');
        }
        function add3(){
            require_once ('Views/DocenteView/registrar_familiar.php');
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
            $_SESSION['resultadoss']=$resultadoss;
            $titulo_ob=$_POST["titulo_ob"];
            $institucion=$_POST["institucion"];
            $tituload=$_POST["tituload"];
            $nivel=$_POST["nivel"];
            $año=$_POST["año"];
            $registrar=new Docente_Model();
            $resultado1=$registrar->Registrar_titulos($titulo_ob,$institucion,$tituload,$nivel,$año);
            require_once ('Views/DocenteView/registrar_titulos.php');
        }

        function Registrar_capacitaciones(){
            $nombrecap=$_POST["nombrecap"];
            $horas=$_POST["horas"];
            $año=$_POST["año"];
            $registrar=new Docente_Model();
            $resultado2=$registrar->Registrar_capacitaciones($nombrecap,$horas,$año);
            require_once ('Views/DocenteView/registrar_capacitaciones.php');
        }
        function Registrar_familiar(){
            $Parentezco=$_POST["Parentezco"];
            $Nombre=$_POST["Nombre"];
            $Locali=$_POST["Locali"];
            $prioridad=$_POST["prioridad"];
            $telefono_of=$_POST["telefono_of"];
            $telefono_res=$_POST["telefono_res"];
            $celular=$_POST["celular"];
            $correo=$_POST["correo"];

            $registrar=new Docente_Model();
            $resultado3=$registrar->Registrar_familiares($Parentezco,$Nombre,$Locali,$prioridad,$telefono_of,$telefono_res,$celular,$correo);
            $_SESSION['resultado']=$resultado3;
            require_once ('Views/DocenteView/registrar_familiar.php');

        }



        function add4(){
            $mostrar=new Docente_Model();
            $resultados=$mostrar->Traer_datos();
            require_once("Views/DocenteView/modificar.php");
        }
        function modificar(){
            $cedula1=$_SESSION['cedula'];
            $nombre=$_POST["nombre"];
            $apellido2=$_POST["apellido2"];
            $apellido1=$_POST["apellido1"];
            $nombre2=$_POST["nombre2"];
            $cedula=$_POST["cedula"];
            $mostrar=new Docente_Model();
            $resultados2=$mostrar->Modificar_datos($cedula1,$nombre,$apellido2,$apellido1,$nombre2,$cedula);
            $resultados=$mostrar->Traer_datos();
            require_once("Views/DocenteView/modificar.php");
        }

    }
?>
