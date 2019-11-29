<?php
class Docente_Model{
    private $con;
    private $docente;

    function __construct()
    {
        $this ->con=Conexion::conectar();
        $this->docente=array();
    }

    public function Datos(){
        $consulta=$this->con->query("select * from Docente;");
        while($datos=$consulta->fetch_assoc()){
            $this->docente[]=$datos;
        }
        return $this->docente;
    }
    public function Registro($nombre,$apellido2,$apellido1,$nombre2,$cedula,$genero,$civil,$sangre,
                      $usuario,$provincia,$distrito,$corregimiento,$ubicesp,$telefono,$categoria,$ubi,$departamento,$cargoadm,
                      $gobierno){

        $insertar="INSERT INTO Docente(nombre,Segundo_apellido,primer_apellido,Segundo_nombre,cedula,
                                genero,Estado_civil,Tipo_sangre,Usuario_Id_usuario,provincia,Distrito,
                                corregimiento,Direccion_especifica, Telefono,categoria_docente,ubicacion,
                                departamento,cargo_adm,Gobierno_Repre) VALUES('$nombre','$apellido2','$apellido1','$nombre2','$cedula',
                                '$genero','$civil','$sangre','$usuario','$provincia','$distrito','$corregimiento','$ubicesp','$telefono',
                                '$categoria','$ubi','$departamento','$cargoadm','$gobierno');";

        $resultado=mysqli_query($this->con,$insertar);
        if ($resultado){
            $respuesta="Caso de prueba exitoso";
        }
        else {
            $respuesta="Caso de prueba fallido";
        }
        return $respuesta;
    }
}


?>
