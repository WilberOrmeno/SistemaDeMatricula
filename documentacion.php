<?php include('header.php'); ?>
    <body >
    <?php include('navbar.php')?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_documentacion.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <form id="add_student" class="form-signin" method="post">

                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Documentación de alumnos</div>
                                <div class="muted pull-right">
									Número de registros: <span class="badge badge-info">0</span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch"> Lista de estudiantes</h2>
									<?php include('documentacion_table.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>