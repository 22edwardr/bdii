<?php 
$Codigo=$_POST['Codigo'];
$Nombre1=$_POST['Nombre1'];
$Nombre2=$_POST['Nombre2'];
$Apellido1=$_POST['Apellido1'];
$Apellido2=$_POST['Apellido2'];
$Tipo_documento=$_POST['Tipo_documento'];
$Numero_documento=$_POST['Numero_documento'];


$Telefononuevo='tel0';
$i=0;
do{
	$Telefonos[$i]=$_POST[$Telefononuevo];
	echo $Telefonos[0];
	$partes= explode ("l",$Telefononuevo);
	$partes[1]++;
	$Telefononuevo="tel".$partes[1];
	$i++;
}while(isset($_POST[$Telefononuevo]));





$Direccionnuevo='dir0';
$i=0;
do{
	$Direcciones[$i]=$_POST[$Direccionnuevo];
	echo $Direcciones[$i];
	$partes= explode ("r",$Direccionnuevo);
	$partes[1]++;
	$Direccionnuevo="dir".$partes[1];
	$i++;
}while(isset($_POST[$Direccionnuevo]));




$Emailnuevo='mail0';
$i=0;
do{
	$Emails[$i]=$_POST[$Emailnuevo];
	echo $Emails[$i];
	$partes= explode ("l",$Emailnuevo);
	$partes[1]++;
	$Emailnuevo="mail".$partes[1];
	$i++;
}while(isset($_POST[$Emailnuevo]));

$Carrera=$_POST['Carrera'];
$Semestre=$_POST['Semestre'];


include 'bd.php';
$conexion= new bd;
$sql="INSERT INTO persona(Nombre1,Nombre2,Apellido1,Apellido2,Tipo_documento,Numero_documento) VALUES('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Tipo_documento','$Numero_documento')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO estudiante(Codigo,Numero_documento,Carrera,Semestre) VALUES('$Codigo','$Numero_documento','$Carrera','$Semestre')";
$result=$conexion->comandosql($sql);


$sql="INSERT INTO telefono(Codigo,Telefono) VALUES('$Codigo','$Telefonos[0]')";
$result=$conexion->comandosql($sql);


$sql="INSERT INTO direccion(Codigo,Direccion) VALUES('$Codigo','$Direcciones[0]')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO email(Codigo,Email) VALUES('$Codigo','$Emails[0]')";
$result=$conexion->comandosql($sql);
echo "Termine";
$conexion->desconectar();
//header ("Location: Registrar.html");*/
?>