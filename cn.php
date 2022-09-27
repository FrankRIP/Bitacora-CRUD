<?php

$conexion = mysqli_connect("localhost", "root", "", "bdbitacora");

#operador de negacion
#! es devolver el valor contrario a la variable definida, o sea si $conexion es falso
#en vez de true que es su valor 
if(!$conexion){ #si falla la conexion a la bd, con la variable $conexion entonces imprime lo sig.
    echo 'Error al conectar a la base de datos';
}else{#si no falla la variable %conexion entonces imprie lo suguiente
    
}