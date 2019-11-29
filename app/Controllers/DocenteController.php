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
            require_once ('Views/DocenteView/registrar.php');
            $registrar=new Docente_Model();
            $resultado=$registrar->Registro();

        }

    }
?>
