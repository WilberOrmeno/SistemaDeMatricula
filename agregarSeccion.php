<?php

include("dbcon.php");
$con=conectar();
$nivel = $_POST["nivel"];
$grado = $_POST["grado"];
$seccion = $_POST["seccion"];

$insertado = "INSERT INTO `seccion`(`nivel`, `grado`, `seccion`) 
              VALUES ('$nivel', '$grado', '$seccion')";
$stmt = mysqli_query($con,$insertado);
echo "Realizado"
?>