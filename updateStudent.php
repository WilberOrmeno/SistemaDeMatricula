<?php
include("dbcon.php");
$con=conectar();
$Id = $_POST['id'];
$CodAlumno = $_POST['codAlumno'];
$ApePaterno = $_POST['apePaterno'];
$ApeMaterno = $_POST['apeMaterno'];
$Nombres = $_POST['nombres'];
$Sexo = $_POST['sexo'];
$Nivel= $_POST['nivel'];
$Grado = $_POST['grado'];
$Seccion = $_POST['seccion'];
$FecNac = $_POST['fecNac'];
$Telefono = $_POST['telefono'];
$DNI = $_POST['dni'];
$Email = $_POST['email'];
$Direccion = $_POST['direccion'];

$query = "UPDATE `alumnos` SET `cod_alumno`='$CodAlumno', `nombres`='$Nombres', `seccion`='$Seccion', `ape_materno`='$ApeMaterno', `ape_paterno`='$ApePaterno',
 `sexo` = '$Sexo', `nivel` = '$Nivel', `grado` = '$Grado', `fecNacimiento` = '$FecNac', `telefono` = '$Telefono', `dni` = '$DNI', 
 `email` = '$Email', `direccion` = '$Direccion' WHERE  `id_alumno`=$Id";
$stmt = mysqli_query($con,$query);
?>
