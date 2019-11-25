<?php
class AdministrativoModel{
    private $con;
    private $admin;

    function __construct()
    {
        $this ->con=Conexion::conectar();
        $this ->admin=array();
    }
    function listar_datos (){
        $consulta=$this->con->query("select * from Administrativo;");
        while ($datos=$consulta->fetch_assoc()){
            $this->admin[]=$datos;
        }
        return $this->admin;
    }
}

?>
