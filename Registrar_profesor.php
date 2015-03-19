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
	$partes= explode ("l",$Telefononuevo);
	$partes[1]++;
	$Telefononuevo="tel".$partes[1];
	$i++;
}while(isset($_POST[$Telefononuevo]));
$telefonos_a_registrar=$i-1;



$Direccionnuevo='dir0';
$i=0;
do{
	$Direcciones[$i]=$_POST[$Direccionnuevo];
	$partes= explode ("r",$Direccionnuevo);
	$partes[1]++;
	$Direccionnuevo="dir".$partes[1];
	$i++;
}while(isset($_POST[$Direccionnuevo]));
$direcciones_a_registrar=$i-1;



$Emailnuevo='mail0';
$i=0;
do{
	$Emails[$i]=$_POST[$Emailnuevo];
	$partes= explode ("l",$Emailnuevo);
	$partes[1]++;
	$Emailnuevo="mail".$partes[1];
	$i++;
}while(isset($_POST[$Emailnuevo]));
$emails_a_registrar=$i-1;


$Tipo=$_POST['Tipo'];
$Linea=$_POST['Linea'];


include 'bd.php';
$conexion= new bd;
$sql="INSERT INTO persona(Nombre1,Nombre2,Apellido1,Apellido2,Tipo_documento,Numero_documento) VALUES('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Tipo_documento','$Numero_documento')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO profesor(Codigo,Numero_documento,Tipo,Cod_linea) VALUES('$Codigo','$Numero_documento','$Tipo','$Linea')";
$result=$conexion->comandosql($sql);

for($i=0;$i<=$telefonos_a_registrar;$i++){
$sql="INSERT INTO telefono(Codigo,Telefono) VALUES('$Numero_documento','$Telefonos[$i]')";
$result=$conexion->comandosql($sql);
}
for($i=0;$i<=$direcciones_a_registrar;$i++){
$sql="INSERT INTO direccion(Codigo,Direccion) VALUES('$Numero_documento','$Direcciones[$i]')";
$result=$conexion->comandosql($sql);
}

for($i=0;$i<=$emails_a_registrar;$i++){
$sql="INSERT INTO email(Codigo,Email) VALUES('$Numero_documento','$Emails[$i]')";
$result=$conexion->comandosql($sql);
}

$conexion->desconectar();
header ("Location: Registrar.html");
?>