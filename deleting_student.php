<?php
include("dbcon.php");
$con = conectar();
    $id = $_POST['id'];
    $query = "DELETE FROM `alumnos` WHERE `id_alumno` = $id";
$stmt = mysqli_query($con,$query);
echo "Eliminado";
header("Refresh:0; url=deleteStudent_table.php");
?>