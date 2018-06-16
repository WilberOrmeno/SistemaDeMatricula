<div class="span3" id="sidebar">

<!--<img src="images/.png">-->
	<center>
		<img src="images/cetapsi-sinfondo.png" id="logo" style="height: 200px">
        <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
            <li class="active"><a href="dashboard.php"><i class="icon-chevron-right icon-large"></i><i class="icon-home icon-large"></i> Inicio</a></li>
            <li ><a href="#" onclick="mostrar()"><i class="icon-chevron-right icon-large"></i><i class="icon-group icon-large"></i> Alumnos</a></li>
            <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" id="segundo" style="display: none;">
                <li class="active"><a href="dashboard.php"><i class="icon-chevron-right icon-large"></i><i class="icon-home icon-large"></i> Inicio</a></li>
                <li ><a href="#"><i class="icon-chevron-right icon-large"></i><i class="icon-group icon-large"></i> Alumnos</a></li>
                <li><a href="secciones.php"><i class="icon-chevron-right icon-large"></i><i class="icon-th-list icon-large"></i> Agregar aula</a></li>
                <li><a href="grades.php"><i class="icon-chevron-right icon-large"></i><i class="icon-th-list icon-large"></i> Grado</a></li>
                <li><a href="elegirPeriodo.php"><i class="icon-chevron-right icon-large"></i><i class="icon-money icon-large"></i> Periodo</a></li>
            </ul>
            <li><a href="secciones.php"><i class="icon-chevron-right icon-large"></i><i class="icon-th-list icon-large"></i> Secciones</a></li>
            <li><a href="grades.php"><i class="icon-chevron-right icon-large"></i><i class="icon-th-list icon-large"></i> Grado</a></li>
            <li><a href="elegirPeriodo.php"><i class="icon-chevron-right icon-large"></i><i class="icon-money icon-large"></i> Periodo</a></li>
        </ul>
	</center>
</div>

<script>
    function mostrar() {
        $("#segundo").show();
    }

</script>
		