<?php
class Docente_Model
{
    private $con;
    private $docente;
    private $resultado;

    function __construct()
    {
        $this->con = Conexion::conectar();
        $this->docente = array();
        $this->resultado;
    }

    public function Datos()
    {
        $consulta = $this->con->query("select * from Docente;");
        while ($datos = $consulta->fetch_assoc()) {
            $this->docente[] = $datos;
        }
        return $this->docente;
    }

    public function Traer_datos(){
        if($resultado = mysqli_query($this->con, "SELECT * FROM Docente WHERE cedula = '8-888-888';", MYSQLI_USE_RESULT)) {
            $formulario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        }
        return $formulario;
    }
    public function Modificar_datos(){
        $nombre=$_POST["nombre"];
        $apellido2=$_POST["apellido2"];
        $apellido1=$_POST["apellido1"];
        $nombre2=$_POST["nombre2"];
        $cedula=$_POST["cedula"];

        $cambios=mysqli_query($this->con,"UPDATE Docente set nombre='$nombre',Segundo_apellido='$apellido2',primer_apellido='$apellido1'
                    ,Segundo_nombre='$nombre2',cedula='$cedula' WHERE cedula='$cedula'");

        if ($cambios){
            return "modificado correctamente, presione actualizar para ver los cambios";
        }else{
            return "Error al modificar datos";
        }


    }


    public function Registro($nombre,$apellido2,$apellido1,$nombre2,$cedula,$genero,$civil,$sangre,$usuario,$provincia,$distrito,$corregimiento,$ubicesp,$telefono,$categoria, $ubi,$departamento,$cargoadm,$gobierno)
    {


        $insertar = "INSERT INTO Docente(nombre,Segundo_apellido,primer_apellido,Segundo_nombre,cedula,
                                genero,Estado_civil,Tipo_sangre,Usuario_Id_usuario,provincia,Distrito,
                                corregimiento,Direccion_especifica, Telefono,categoria_docente,ubicacion,
                                departamento,cargo_adm,Gobierno_Repre) VALUES('$nombre','$apellido2','$apellido1','$nombre2','$cedula',
                                '$genero','$civil','$sangre','$usuario','$provincia','$distrito','$corregimiento','$ubicesp','$telefono',
                                '$categoria','$ubi','$departamento','$cargoadm','$gobierno');";

        $this->resultado = mysqli_query($this->con, $insertar);
        if ($this->resultado) {
            return  $this->resultado = 1;
        } else {
            return  $this->resultado = 2;
        }



    }

    public function Registrar_titulos($titulo_ob,$institucion,$tituload,$nivel,$año){


        if ($titulo_ob!="" && $institucion!="" && $tituload!="" && $nivel!="" && $año!=""){

        $insertar="INSERT INTO Docente_prep_academico (Titulo_obtenido,Nivel,Año,Institucion,Titulo_adjunto,Docente_cedula)
                    VALUES ('$titulo_ob','$nivel','$año','$institucion','$tituload','1-884-587')";

        $resltado=mysqli_query($this->con,$insertar);

        if ($resltado){
            $respuesta="Registro Exitoso, si desea insertar otro titulo hagalo";
        }
        else{
            $respuesta="Error,verificar datos";
        }

        }
        else{
            $respuesta="Error,verificar datos";
        }
        return $resltado;
    }

    function crear_usuario($usuario, $contrasena, $correo, $rol)
    {
        $asunto = "Su usuario y contraseña";
        $mensaje = "su usuario es: $usuario \nSu contraseña es: $contrasena \nProceda a
        iniciar sesiòn y registrarse ";


        $insertar = "INSERT INTO Usuario (Contraseña,id_usuario,Roles_ID_rol)
         VALUES ('$contrasena','$usuario','$rol')";

        $resultado = mysqli_query($this->con, $insertar);
        if ($resultado) {

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
                $resultado = "Error al enviar el E-Mail: " . $mail->ErrorInfo;
            } else {

                $resultado = "E-Mail enviado y datos guardados";

            }


        } else {
            $resultado= "Error,revisar datos";


        }
        return $resultado;

    }
}
?>
