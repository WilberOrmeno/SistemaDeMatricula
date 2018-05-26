<?php
include "dbcon.php";
$con = conectar();
$nivel = $_POST['nivel'];
$grado = $_POST['grado'];
$seccion = $_POST['seccion'];
$query = "SELECT * FROM `alumnos` WHERE ( `nivel`='$nivel' AND `grado`='$grado' AND `seccion`='$seccion')";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data = $extraido['id_alumno'].','
        .$extraido['cod_alumno'].','
        .$extraido['ape_paterno'].','
        .$extraido['ape_materno'].','
        .$extraido['nombres'].','
        .$extraido['telefono'].','
        .$extraido['dni'].','
        .$extraido['direccion'].'|';
}
echo $data;
?>


