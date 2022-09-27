<?php
include ("cn.php");
$usuarios = "SELECT * FROM usuarios";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edicion</title>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
	</style>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<nav class="navBarra"><a href="bitacora.php"> <span>Inicio</span> </a> </nav>
	<div class="container_table_edit tablaEdicion">
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
			<div class="itemm" > <?php echo $row["nombre"] /*invoco $row para mostrar el arreglo con el valor de nombre*/ ?> </div>
			<div class="itemm" > <?php echo $row["proyecto"] ?> </div>
			<div class="itemm" > <?php echo $row["descripcion"] ?> </div>
			<div class="itemm" > <?php echo $row["fecha_inicio"] ?> </div>
			<div class="itemm" > <?php echo $row["fecha_termino"] ?> </div>
            <div class="table__item__edit">
                <a href="actualizar.php ?id=<?php echo $row["id"]#se imprime el id para decirle que voy a editar en base a ese ?>" class="table__item__link">Editar</a>
                
				<a href="eliminar.php ?id=<?php echo $row["id"] ?>" class="table__item__link link_eliminar">Eliminar</a>
            </div>
		<?php } mysqli_free_result($resultado);#libero la variable resultado para usarla despues ?>	
	</div>

	<script src="confirmacion.js"></script>
</body>
</html>