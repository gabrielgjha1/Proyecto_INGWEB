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
    function Registro(){
        $nombre=$_POST["nombre"];
        $apellido2=$_POST["apellido2"];
        $apellido1=$_POST["apellido1"];
        $nombre2=$_POST["nombre2"];
        $cedula=$_POST["cedula"];
        $genero=$_POST["genero"];
        $civil=$_POST["civil"];
        $sangre=$_POST["sangre"];
        $usuario=$_POST["usuario"];
        $provincia=$_POST["provincia"];
        $distrito=$_POST["distrito"];
        $corregimiento=$_POST["corregimiento"];
        $ubicesp=$_POST["ubicesp"];
        $telefono=$_POST["telefono"];
        $categoria=$_POST["categoria"];
        $ubi=$_POST["ubi"];
        $departamento=$_POST["departamento"];
        $cargoadm=$_POST["cargoadm"];
        $gobierno=$_POST["gobierno"];
        $insertar="INSERT INTO Docente(nombre,Segundo_apellido,primer_apellido,Segundo_nombre,cedula
                                genero,Estado_civil,Tipo_sangre,Usuario_Id_usuario,provincia,Distrito,
                                corregimiento,Direccion_especifica, Telefono,categoria_docente,ubicacion,
                                departamento,cargo_adm,Gobierno_Repre) VALUES('$nombre','$apellido2','$apellido1','$nombre2','$cedula',
                                '$genero','$civil','$sangre','$usuario','$provincia','$distrito','$corregimiento','$ubicesp','$telefono',
                                '$categoria','$ubi','$departamento','$cargoadm','$gobierno')";

        $resultado=mysqli_query($this->con,$insertar);

        return $gobierno;
    }
}


?>
