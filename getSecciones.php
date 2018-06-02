<?php
include "dbcon.php";
$con = conectar();
$nivel = $_POST['nivel'];
$grado = $_POST['grado'];
$query = "SELECT * FROM `seccion` WHERE (`nivel` = '$nivel' AND `grado` = '$grado')";
$stmt = mysqli_query($con,$query);
$data = '';
while($extraido = mysqli_fetch_array($stmt) ) {
    $data .= $extraido['seccion'].',';
}
echo $data;
?>


