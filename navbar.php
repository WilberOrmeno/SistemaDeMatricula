<?php
$query= mysqli_query(conectar(),"select * from periodo")or die(mysqli_error(conectar()));
$periodo = mysqli_fetch_array($query);
?>

<div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-fluid" style="background-color: #4d9200 ">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </a>
                <span class="brand" href="#">Sistema de matrícula - Periodo <?php echo $periodo[0]?></span>
                <div id="coll" class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li>
                            <a href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php /*echo $row['firstname']." ".$row['lastname']; */ ?> Cerrar sesión <i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
                                <li>
                                    <a tabindex="-1" href="change_password.php" class="jkl">Change Password</a>
                                </li>
                                <li class="divider"></li>
                                <li><a  class="jkl" tabindex="-1" href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
</div>