<?php
$host='localhost';
$user='root';
$password='';
$db='ejemplo_factura';

$conection=@mysqli_connect($host,$user,$password,$db);

if(!$conection){
	echo "Error en la conexión";
}
/*else{
	echo "Conexión establecida";
}*/	
?>