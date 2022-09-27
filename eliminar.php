<?php
include ("cn.php");

$id = $_GET["id"];

$eliminar ="DELETE FROM usuarios WHERE id = '$id'";

$resultado = mysqli_query($conexion, $eliminar);

#si resultado funciona muestrra la siguiente alerta
if($resultado){
	header ("location: /Bitacora/edicion.php");
}else{ #si no funcina la conexion  muestra la siguiente
	echo "<script>alert('No se pudo eliminar el registro del reporte');
	window.history.go(-1);</script>";
}