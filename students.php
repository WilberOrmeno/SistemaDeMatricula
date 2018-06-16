<?php include('header.php'); ?>
    <body >
    <?php include('navbar.php')?>
        <div class="container-fluid">
            <div class="row-fluid">
                    <?php include('sidebar_students.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <form id="add_student" class="form-signin" method="post">

                            <div class="navbar navbar-inner block-header">

                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de estudiantes</div>
                                <div class="muted pull-right">
                                    <button type="button" class="btn btn-warning" style="margin-top: -5px" onclick="allStudents()">Todos los alumnos</button>

                                    <button type="button" class="btn btn-info" style="margin-top: -5px" onclick="buscarPorSeccion()"
                                            data-toggle="modal" data-target="#myModal">Buscar por sección</button>
									Número de estudiantes: <span class="badge badge-info">0</span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch"> Lista de estudiantes</h2>
                                    <?php include('students_table.php'); ?>
                                    <?php include('grades.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
        </div>
		<?php include('script.php'); ?>
    </body>
<script>
    function buscarPorSeccion() {
        $("#example").hide();
        $("#imprimirEsto").show();
    }
    function allStudents() {
        $("#example").show();
        $("#imprimirEsto").hide();
    }
</script>
</html>