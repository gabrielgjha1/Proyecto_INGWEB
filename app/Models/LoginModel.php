<?php
session_start();
class LoginModel
{
    private $con;
    private $docente;

    function __construct()
    {
        $this->con = Conexion::conectar();
        $this->docente = array();
    }

    public function Validar_datos($usuario,$contra){

        if (isset($_POST['usuario']) && isset($_POST['contra'])){

            $query=mysqli_query($this->con, "SELECT * FROM Usuario WHERE  id_usuario= '".$usuario."' AND  Contraseña= '".$contra."'");
            $nr= mysqli_num_rows($query);

            if ($nr){

                $query2=mysqli_query($this->con,"SELECT Roles_ID_rol FROM Usuario WHERE id_usuario='$usuario' AND  Contraseña= '$contra'");
                $query2 = mysqli_fetch_array($query2, MYSQLI_ASSOC);
                $resultado = $query2['Roles_ID_rol'];
                if ($resultado==1){
                    header("Location: ?controller=Home&action=mensaje&log=$resultado");
                }
                elseif ($resultado==2){
                    header("Location: ?controller=Home&action=mensaje&log=$resultado");
                }

            }else{
                $resultado="usuario o contraseña incorrecta";
                 return $resultado;
            }
        }

    }

    public function roles($resultado1){
        $usuario=$_POST["usuario"];
        $contra=$_POST["contra"];
        if ($resultado1== false){


    }
    }

}


?>
