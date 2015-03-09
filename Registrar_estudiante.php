<?php 
$Codigo=$_POST['Codigo'];
$Nombre1=$_POST['Nombre1'];
$Nombre2=$_POST['Nombre2'];
$Apellido1=$_POST['Apellido1'];
$Apellido2=$_POST['Apellido2'];
$Tipo_documento=$_POST['Tipo_documento'];
$Numero_documento=$_POST['Numero_documento'];
$Telefono1=$_POST['Telefono1'];
$Telefono2=$_POST['Telefono2'];
$Direccion1=$_POST['Direccion1'];
$Direccion2=$_POST['Direccion2'];
$Email1=$_POST['Email1'];
$Email2=$_POST['Email2'];
$Carrera=$_POST['Carrera'];
$Semestre=$_POST['Semestre'];


include 'bd.php';
$conexion= new bd;
$sql="INSERT INTO estudiante(Codigo,Nombre1,Nombre2,Apellido1,Apellido2,Tipo_documento,Numero_documento,Carrera,Semestre) VALUES('$Codigo','$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Tipo_documento','$Numero_documento','$Carrera','$Semestre')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO Telefono(Codigo,Telefono1,Telefono2) VALUES('$Codigo','$Telefono1','$Telefono2')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO Direccion(Codigo,Direccion1,Direccion2) VALUES('$Codigo','$Direccion1','$Direccion2')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO Email(Codigo,Email1,Email2) VALUES('$Codigo','$Email1','$Email2')";
$result=$conexion->comandosql($sql);

$conexion->desconectar();
header ("Location: Registrar.html");
?>