<?php
    include("dbcon.php");
    $con = conectar();
    $id = $_POST['id'];
    $query = "DELETE FROM `alumnos` WHERE `id_alumno` = $id";
    $query2 = "DELETE FROM `apoderados` WHERE `id_alumno` = $id";

    $stmt = mysqli_query($con,$query);
    $stmt2 = mysqli_query($con,$query2);
echo "Eliminado";
?>