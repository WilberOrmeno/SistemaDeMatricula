<?php
    include('dbcon.php');
    $con = conectar();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count > 0){
        echo 'true';
    }
    else{
            echo 'false';
    }
    ?>