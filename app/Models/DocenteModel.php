<?php

class Docente_Model
{
    private $con;
    private $docente;
    private $titulo;
    private $familiar;
    private $capacitaciones;
    private $resultado;

    function __construct()
    {
        $this->con = Conexion::conectar();
        $this->docente = array();
        $this->titulo= array();
        $this->familiar= array();
        $this->capacitaciones= array();
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
    public function Datos_titulos(){
        $consulta = $this->con->query("select * from Docente_prep_academico;");
        while ($datos = $consulta->fetch_assoc()) {
            $this->titulo[] = $datos;
        }
        return $this->titulo;
    }
    public function Datos_capacitaciones(){
        $consulta = $this->con->query("select * from capacitaciones;");
        while ($datos = $consulta->fetch_assoc()) {
            $this->capacitaciones[] = $datos;
        }
        return $this->capacitaciones;
    }

    public function Traer_datos(){
        $cedula1=$_SESSION['cedula'];
        if($resultado = mysqli_query($this->con, "SELECT * FROM Docente WHERE cedula = '$cedula1';", MYSQLI_USE_RESULT)) {
            $formulario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        }
        return $formulario;
    }
    public function Modificar_datos($cedula1,$nombre,$apellido2,$apellido1,$nombre2,$cedula){


        $cambios=mysqli_query($this->con,"UPDATE Docente set nombre='$nombre',Segundo_apellido='$apellido2',primer_apellido='$apellido1'
                    ,Segundo_nombre='$nombre2',cedula='$cedula' WHERE cedula='$cedula1'");

        if ($cambios){
            return "modificado correctamente, presione actualizar para ver los cambios";
        }else{
            return "Error al modificar datos";
        }


    }


    public function Registro($nombre,$apellido2,$apellido1,$nombre2,$cedula,$genero,$civil,$sangre,$usuario,$provincia,$distrito,$corregimiento,$ubicesp,$telefono,$categoria, $ubi,$departamento,$cargoadm,$gobierno)
    {

        //echo $_SESSION['usuario'];

        $insertar = "INSERT INTO Docente(nombre,Segundo_apellido,primer_apellido,Segundo_nombre,cedula,
                                genero,Estado_civil,Tipo_sangre,Usuario_Id_usuario,provincia,Distrito,
                                corregimiento,Direccion_especifica, Telefono,categoria_docente,ubicacion,
                                departamento,cargo_adm,Gobierno_Repre) VALUES('$nombre','$apellido2','$apellido1','$nombre2','$cedula',
                                '$genero','$civil','$sangre','$usuario','$provincia','$distrito','$corregimiento','$ubicesp','$telefono',
                                '$categoria','$ubi','$departamento','$cargoadm','$gobierno');";

        $_SESSION['cedula']=$cedula;

        $this->resultado = mysqli_query($this->con, $insertar);
        if ($this->resultado) {
            return  $this->resultado = 1;
        } else {
            return  $this->resultado = 2;
        }


    }

    public function Registrar_titulos($titulo_ob,$institucion,$tituload,$nivel,$año){
        $cedula=$_SESSION['cedula'];
        if ($tituload!=""){


        $insertar="INSERT INTO Docente_prep_academico (Titulo_obtenido,Nivel,Año,Institucion,Titulo_adjunto,Docente_cedula)
                    VALUES ('$titulo_ob','$nivel','$año','$institucion','$tituload','$cedula')";

        $resltado=mysqli_query($this->con,$insertar);

        if ($resltado){
            return 1;
        }
        else{
            return 2;
        }
        return 0;
        }


    }

    public function Registrar_capacitaciones($nombrecap,$horas,$año){
        $cedula=$_SESSION['cedula'];
        $insertar="INSERT INTO capacitaciones (nombre_capacita,horas,Año,Docente_cedula)
                    VALUES ('$nombrecap','$horas','$año','$cedula')";

        $resltado=mysqli_query($this->con,$insertar);

        if ($resltado){
            return 1;
        }
        else {
            return 2;
        }

    }

    public function Registrar_familiares($Parentezco,$Nombre,$Locali,$prioridad,$telefono_of,$telefono_res,$celular,$correo){
        $cedula=$_SESSION['cedula'];
        $insertar="INSERT INTO Docente_familiar  (parentezco, nombre_completo, locallizacion, prioridad, telefono_residencial, telefono_oficina, celular, correo, Docente_cedula)
                    VALUES ('$Parentezco','$Nombre','$Locali','$prioridad','$telefono_res','$telefono_of','$celular','$correo','$cedula')";

        $resltado=mysqli_query($this->con,$insertar);

        if ($resltado){
            return 1;
        }
        else {
            return 2;
        }
    }


}
?>
