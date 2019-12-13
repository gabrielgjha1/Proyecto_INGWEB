<?php

class LoginModel
{
    private $con;
    private $docente;

    function __construct()
    {
        $this->con = Conexion::conectar();
        $this->docente = array();
    }

    public function Validar_datos(){
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];

        if (isset($_POST['usuario']) && isset($_POST['contra'])){

            $query=mysqli_query($this->con, "SELECT * FROM Usuario WHERE  id_usuario= '".$usuario."' AND  Contraseña= '".$contra."'");
            $nr= mysqli_num_rows($query);



            if ($nr){

                header("Location: ?controller=Home&action=mensaje");


            }else{
               return "usuario o contraseña incorrecta";
            }

        }

    }
}


?>
