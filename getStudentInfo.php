<?php
include("dbcon.php");
$con = conectar();
$id = $_POST['id'];
$query = "SELECT * FROM `alumnos` WHERE `id_alumno` = '$id'";
$stmt = mysqli_query($con,$query);
$data = [];
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['nombres'].' '.$extraido['ape_paterno'].' '.$extraido['ape_materno'];

}
    echo $data[0];
?>