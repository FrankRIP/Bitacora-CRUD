<?php
include ("cn.php");
$id = $_GET["id"];#voy a recibir elementos con la variable id
$usuarios = "SELECT * FROM usuarios WHERE id = '$id'";#de todos los usuarios selecciona solo id
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar</title>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
	</style>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<form class="container_table tablaEdicion" action="guardarActualizacion.php" method="post">
		<div class="table_title tituloEdicion">Datos Registrados</div>

		<div class="headerT">Nombre</div>
		<div class="headerT">Proyecto</div>
		<div class="headerT">Descripcion</div>
		<div class="headerT">Fecha de Inicio</div>
		<div class="headerT">Fecha de Termino</div>
        <div class="headerT">Modificación</div>
		
		<?php
		$resultado = mysqli_query ($conexion, $usuarios);
		#$row es para devolver un array
		while ($row = mysqli_fetch_assoc($resultado)) {?>
            <input type="hidden" class="itemm" value="<?php echo $row["id"]; ?>" name="id">
            <input type="text" class="itemm" value="<?php echo $row["nombre"]; ?>" name="nombre">
            <input type="text" class="itemm" value="<?php echo $row["proyecto"]; ?>" name="proyecto">
            <input type="text" class="itemm" value="<?php echo $row["descripcion"]; ?>" name="descripcion">
            <input type="date" class="itemm" value="<?php echo $row["fecha_inicio"]; ?>" name="fecha_inicio">
			<input type="date" class="itemm" value="<?php echo $row["fecha_termino"]; ?>" name="fecha_termino">
		 
            <input type="submit" class="botonAct" value="Guardar">
		<?php } mysqli_free_result($resultado);#libero la variable resultado para usarla despues ?>	
        </form>

</body>
</html>