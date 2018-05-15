<?php
include("dbcon.php");
$con=conectar();
$CodAlumno = $_POST['codigo'];
$ApePaterno = $_POST['apePaterno'];
$ApeMaterno = $_POST['apeMaterno'];
$Nombres = $_POST['nombres'];
$Sexo = $_POST['sexo'];
$Nivel= $_POST['nivel'];
$Grado = $_POST['grado'];
$FecNac = $_POST['fecNac'];
$Telefono = $_POST['telefono'];
$DNI = $_POST['dni'];
$Email = $_POST['email'];
$Direccion = $_POST['direccion'];

$query = "INSERT INTO `alumnos`(`cod_alumno`, `nombres`, `ape_materno`, `ape_paterno`, `sexo`, `nivel`, `grado`, `fecNacimiento`, `telefono`, `dni`, `email`, `direccion`) 
VALUES ($CodAlumno,'$Nombres', '$ApeMaterno','$ApePaterno','$Sexo','$Nivel','$Grado','$FecNac','$Telefono','$DNI','$Email','$Direccion')";
$stmt = mysqli_query($con,$query);

echo "Realizado";

?>
