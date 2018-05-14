<?php
include "dbcon.php";
$con = conectar();
$id = $_POST['id'];
$query = "SELECT * FROM `alumnos` WHERE `id_alumno` = '$id'";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id_alumno'].','
        .$extraido['cod_alumno'].','
        .$extraido['ape_paterno'].','
        .$extraido['ape_materno'].','
        .$extraido['nombres'].','
        .$extraido['sexo'].','
        .$extraido['nivel'].','
        .$extraido['grado'].','
        .$extraido['fecNacimiento'].','
        .$extraido['telefono'].','
        .$extraido['dni'].','
        .$extraido['email'].','
        .$extraido['direccion'];
}
echo $data;
?>


