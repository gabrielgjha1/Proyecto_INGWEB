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
    function crear_usuario($usuario,$contrasena,$correo,$rol){
        $asunto="Su usuario y contraseña";
        $mensaje="su usuario es: $usuario \nSu contraseña es: $contrasena \nProceda a
        iniciar sesiòn y registrarse ";

        $insertar = "INSERT INTO Usuario (Contraseña,id_usuario,Roles_ID_rol)
         VALUES ('$contrasena','$usuario','$rol')";

        $resultado = mysqli_query($this->con, $insertar);
        if ($resultado) {

            $resultado = mysqli_query($this->con, $insertar);

            require 'a/PHPMailer.php';
            require 'a/SMTP.php';
            require 'a/Exception.php';
            require 'a/OAuth.php';

            $mail = new PHPMailer\PHPMailer\PHPMailer();

            $mail->isSMTP();
            /*
            Enable SMTP debugging
            0 = off (for production use)
            1 = client messages
            2 = client and server messages
            */
            $mail->SMTPDebug = 0;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'ts1';
            $mail->SMTPAuth = true;
            $mail->Username = "proyectoweb159@gmail.com";
            $mail->Password = "zgAfAVujEc3cxjg";
            $mail->setFrom('proyectoweb159@gmail.com', 'gabriel');
            $mail->addAddress($correo, 'gabriel');
            $mail->Subject = $asunto;
            $mail->Body = $mensaje;
            $mail->CharSet = 'UTF-8'; // Con esto ya funcionan los acentos
            $mail->IsHTML(false);

            if (!$mail->send()) {
                $respuesta= "Error al enviar el E-Mail: " . $mail->ErrorInfo;
            } else {
                $respuesta="E-Mail enviado y datos guardados";
            }

            return $resultado;

        } else {
            $respuesta = "Caso de prueba fallido";
        }

        return $respuesta;



    }
}

?>
