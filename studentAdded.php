<?php
include("dbcon.php");
$con=conectar();
$dniNino = $_POST['dniNino'];
$dniApoderado = $_POST['dniApoderado'];
$partidaNacimiento = $_POST['partidaNacimiento'];
$certificadoEstudios = $_POST['certificadoEstudios'];
$resTraslado = $_POST['resTraslado'];
$pagoMatricula = $_POST['pagoMatricula'];
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
$foto=$_FILES["userprofile_picture"]["name"];
$ruta=$_FILES["userprofile_picture"]["tmp_name"];
$destino="FotosAlumnos/".$foto;
copy($ruta,$destino);
$query = "INSERT INTO `alumnos`(`cod_alumno`, `nombres`, `ape_materno`, `ape_paterno`, `sexo`, `nivel`, `grado`, `seccion`, `fecNacimiento`, `telefono`, `dni`, `email`, `direccion`, `foto`) 
VALUES ($CodAlumno,'$Nombres', '$ApeMaterno','$ApePaterno','$Sexo','$Nivel','$Grado', '$seccion','$FecNac','$Telefono','$DNI','$Email','$Direccion','$destino')";
$stmt = mysqli_query($con,$query);

$ApePaternoApoderado = $_POST['apePatApoderado'];
$ApeMaternoApoderado = $_POST['apeMatApoderado'];
$NombresApoderado = $_POST['nombresApoderado'];
$RelacionEstudiante = $_POST['relacionEstudiante'];
$celularApoderado = $_POST['celularApoderado'];
$emailApoderado = $_POST['emailApoderado'];


$query = "SELECT * FROM `alumnos`";
$stmt = mysqli_query($con,$query);
$id = 0;
while($extraido = mysqli_fetch_array($stmt) ) {
    $id = $extraido['id_alumno'];
}

$query2 = "INSERT INTO `apoderados`(`id_alumno`, `ape_paterno`, `ape_materno`, `nombres`, `relacion`, `celular`, `email`) 
VALUES ($id,'$ApePaternoApoderado', '$ApeMaternoApoderado','$NombresApoderado','$RelacionEstudiante','$celularApoderado','$emailApoderado')";
$stmt2 = mysqli_query($con,$query2);

$query3 = "INSERT INTO `documentos`(`id_alumno`, `dni_nino`, `dni_apoderado`, `partida_nacimiento`, `certificado`, `resTraslado`, `pagoMatricula`) 
VALUES ($id,'$dniNino', '$dniApoderado','$partidaNacimiento','$certificadoEstudios','$resTraslado','$pagoMatricula')";
$stmt3 = mysqli_query($con,$query3);


?>

