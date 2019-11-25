<?php
class Docente_Model{
    private $con;
    private $docente;

    function __construct()
    {
        $this ->con=Conexion::conectar();
        $this->docente=array();
    }

    function Datos(){
        $consulta=$this->con->query("select * from Docente;");
        while($datos=$consulta->fetch_assoc()){
            $this->docente[]=$datos;
        }
        return $this->docente;
    }
}


?>
