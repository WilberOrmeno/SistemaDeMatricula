<?php
$con=conectar();

$Tipo = $_POST['txtTipoUsuario'];
$ID = $_POST['txtID'];
$Login = $_POST['txtLogin'];
$Password = $_POST['txtPassword'];
$Nombre = $_POST['txtNombre'];
$Fecha = $_POST['txtFecha'];
$Estado = $_POST['txtEstado'];


$insertado = "INSERT INTO `biblioteca`.`Usuarios` (`UsuarioID`, `UsuarioLogin`, `UsuarioNombre`, `UsuarioPassword`, `UsuarioNivel`,`UsuarioFecha`,`UsuarioEstado`) 
VALUES ('$ID', '$Login', '$Nombre ', '$Password', '$Tipo','$Fecha','$Estado');
";
$stmt = mysqli_query($con,$insertado);

?>

<html>
<body style="background-image: url(images/libros.jpg); color: white; font">
<br><br><br><br><br>

<center><h2 style="color: white;">////////Usuario Correctamente Registrado//////////</h2></center><br><br><br>
<center><form action="AgregarUsuario.php" method="POST"	>
        <button class="btn-lg btn-danger" type="submit" value=""> Regresar </button>
    </form></center>
</body>
</html>
