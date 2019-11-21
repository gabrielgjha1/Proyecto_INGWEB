<?php
class Conexion
{

public static function conectar()
{
$conexion = new mysqli("mysql", "root", "clave123", "bd_docentes");
$conexion->query("SET NAMES 'utf8'");
return $conexion;
}

}

?>