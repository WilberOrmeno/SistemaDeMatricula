<?php

include("dbcon.php");
$con=conectar();
$newPeriod = $_POST["periodSelected"];

$insertado = "UPDATE `periodo` SET `periodo` = $newPeriod WHERE `periodo`.`id_periodo` = 1";
$stmt = mysqli_query($con,$insertado);
session_start();
header("location:elegirPeriodo.php");
exit();
?>