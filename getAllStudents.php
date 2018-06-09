<?php
include "dbcon.php";
$con = conectar();
$query = "SELECT * FROM `alumnos`";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id_alumno'];
}
echo $data;
?>

