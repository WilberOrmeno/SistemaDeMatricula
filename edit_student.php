<?php include('header.php'); ?>
<body >
<?php include('navbar.php')?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('sidebar_editStudent.php'); ?>
        <div class="span9" id="">
            <div class="row-fluid">
                <!-- block -->
                <div  id="block_bg" class="block">
                    <form id="add_student" class="form-signin" method="post">

                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de estudiantes</div>
                            <div class="muted pull-right">
                                Número de estudiantes: <span class="badge badge-info">0</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12" id="studentTableDiv">
                                <h2 id="noch"> Lista de estudiantes</h2>
                                <?php include('editStudent_table.php'); ?>
                            </div>
                        </div>

                </div>

            </div>

        </div>

    </div>
</div>
<div style="z-index: 100" le>
    <?php include("editting_student.php"); ?>
</div>
<?php include('script.php'); ?>
</body>

