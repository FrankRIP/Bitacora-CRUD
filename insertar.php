<?php
include ("cn.php");

$nombre = $_POST["nombre"];
$proyecto = $_POST["proyecto"];
$descripcion = $_POST["descripcion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

$insertar = "INSERT INTO usuarios (nombre, proyecto, descripcion, fecha_inicio, fecha_termino)
VALUES ('$nombre', '$proyecto', '$descripcion', '$fecha_inicio', '$fecha_termino')";

#creo una variable para concatenar la funcion $conexion y $insertar
$resultado = mysqli_query($conexion, $insertar);

#si resultado funciona muestrra la siguiente alerta

if($resultado){
	echo "<script>alert('Se hizo registro del reporte');
	window.location='/Bitacora/bitacora.php'</script>";
}else{ #si no funcina la conexion  muestra la siguiente
	echo "<script>alert('No se pudo registrar');
	window.history.go(-1);</script>";
}