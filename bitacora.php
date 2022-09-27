<?php
include ("cn.php");
$usuarios = "SELECT * FROM usuarios";
$ejecutar = mysqli_query($conexion, $usuarios);#metodo para hacer la con
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bitacora</title>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Raleway&display=swap');
	</style>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<form action="insertar.php" method="post" class="container-add">
		<h2 class="container__title">Bitacora</h2>
		<div class="container__form">
		
			<label class="container__label">Nombre:</label>
			<select class="container__input" name ="nombre">
			<?php foreach ($ejecutar as $opciones): ?>
				<option value=" <?php echo $opciones ['nombre'] ?>"> <?php echo $opciones ['nombre']?></option>
			<?php endforeach?>
			</select>

			<label class="container__label">Proyecto:</label>
			<select class="container__input" name="proyecto">
			<?php foreach ($ejecutar as $opciones): ?>
			<option value=" <?php echo $opciones ['proyecto'] ?>"> <?php echo $opciones ['proyecto']?></option>
			<?php endforeach?>
			</select>

			<label class="container__label">Descripcion:</label>
			<input name="descripcion" type="text" class="container__input" placeholder="Escribe la correción del problema">

			<label class="container__label">Fecha de Inicio:</label>
			<input name="fecha_inicio" type="date" class="container__input" placeholder="Escribe la fecha en que inicio la solucion">

			<label class="container__label">Fecha de Termino:</label>
			<input name="fecha_termino" type="date" class="container__input" placeholder="Escribe la fecha en que termino la solucion">	

			<input type="submit"  value="Registrar" class="container__input_button">
			

		</form>
	</div>

	<div class="containerEdicion" >
	<a class="editarRegistros" href="edicion.php">Editar Datos Registrados</a> 
	</div>

	<div class="container_table">
		<div class="table_title">Datos Registrados</div>

		<div class="headerT">Nombre</div>
		<div class="headerT">Proyecto</div>
		<div class="headerT">Descripcion</div>
		<div class="headerT">Fecha de Inicio</div>
		<div class="headerT">Fecha de Termino</div>
		
		<?php
		$resultado = mysqli_query ($conexion, $usuarios);
		#$row es para devolver un array
		while ($row = mysqli_fetch_assoc($resultado)) {?>
			<div class="itemm" > <?php echo $row["nombre"]; /*invoco $row para mostrar el arreglo con el valor de nombre*/ ?> </div>
			<div class="itemm" > <?php echo $row["proyecto"]; ?> </div>
			<div class="itemm" > <?php echo $row["descripcion"]; ?> </div>
			<div class="itemm" > <?php echo $row["fecha_inicio"]; ?> </div>
			<div class="itemm" > <?php echo $row["fecha_termino"]; ?> </div>
		<?php } mysqli_free_result($resultado);#libero la variable resultado para usarla despues ?>	
	</div>
	

</body>
</html>