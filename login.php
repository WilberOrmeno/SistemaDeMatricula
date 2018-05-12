<?php
    include('dbcon.php');
    $con = conectar();
    $username = 'admin';//$_POST['username'];
    $password = 'admin123';//$_POST['password'];
    /* student */
    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    if($count > 0){
        echo 'true';
        //mysqli_query($con,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
    }
    else{
            echo 'false';
    }
    ?>