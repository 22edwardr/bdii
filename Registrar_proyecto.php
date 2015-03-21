<?php 
$Codigo=$_POST['Codigo'];
$Fecha=$_POST['Fecha'];
$Titulo=$_POST['Titulo'];
$Descripcion=$_POST['Descripcion'];
$Director=$_POST['Director'];
$Programa=$_POST['Programa'];
$Estado=$_POST['Estado'];
$Linea=$_POST['Linea'];



$Estudiantenuevo='est0';
$i=0;
do{
	$Estudiantes[$i]=$_POST[$Estudiantenuevo];
	$partes= explode ("t",$Estudiantenuevo);
	$partes[1]++;
	$Estudiantenuevo="est".$partes[1];
	$i++;
}while(isset($_POST[$Estudiantenuevo]));
$estudiantes_a_registrar=$i-1;


include 'bd.php';
$conexion= new bd;

$sql="INSERT INTO proyecto(Codigo,Fecha,Titulo,Descripcion,Cod_director,Cod_programa,Estado) VALUES('$Codigo','$Fecha','$Titulo','$Descripcion','$Director','$Programa','$Estado')";
$result=$conexion->comandosql($sql);

$sql="INSERT INTO linea_proyecto(Codigo_proyecto,Codigo_linea) VALUES('$Codigo','$Linea')";
$result=$conexion->comandosql($sql);

for($i=0;$i<=$estudiantes_a_registrar;$i++){	
$sql="UPDATE estudiante SET Cod_proyecto='$Codigo' WHERE Numero_documento='$Estudiantes[$i]'";
$result=$conexion->comandosql($sql);
}

$conexion->desconectar();
header ("Location: Registrar.html");
?>