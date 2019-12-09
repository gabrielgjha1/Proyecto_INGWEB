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
    function crear_usuario($usuario,$contrasena,$correo){
        $asunto="Su usuario y contraseña";
        $mensaje="su usuario es: $usuario \nSu contraseña es: $contrasena \nProceda a
        iniciar sesiòn y registrarse ";

        mail($correo,$asunto,$mensaje);
        return $correo;
    }
}

?>
