<?php
include ("cn.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$proyecto = $_POST["proyecto"];
$descripcion = $_POST["descripcion"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_termino = $_POST["fecha_termino"];

//Actualizo datos
$actualizar = "UPDATE usuarios SET nombre = '$nombre', proyecto = '$proyecto', 
descripcion = '$descripcion', fecha_inicio = '$fecha_inicio', fecha_termino = '$fecha_termino'
WHERE id = '$id'";

$resultado = mysqli_query($conexion, $actualizar);

#si resultado funciona muestrra la siguiente alerta
if($resultado){
	echo "<script>alert('Se actualizo el registro del reporte');
	window.location='/Bitacora/bitacora.php'</script>";
}else{ #si no funcina la conexion  muestra la siguiente
	echo "<script>alert('No se pudo actualizar el registro del reporte');
	window.history.go(-1);</script>";
}
?>