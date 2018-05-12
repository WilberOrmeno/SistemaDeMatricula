
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <div class="pull-right">
            <!--
           <a href="add_student.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Agregar alumno</a>-->
        </div>
        <!--<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i> Delete</a>
    -->
        <thead>
        <tr>
            <th>Cod. alumno</th>
            <th>Nombres</th>
            <th>Ape. Paterno</th>
            <th>Ape. Materno</th>
            <th>Grado</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Borrar</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query(conectar(),"select * from alumnos")or die(mysqli_error(conectar()));
            $i=0;

            while($row = mysqli_fetch_array($query)) {
            $id = $row['id_alumno'];
            $i++;
            ?>
                <tr >
                    <td><?php echo $row['cod_alumno']?></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['ape_paterno']; ?></td>
                    <td><?php echo $row['ape_materno']; ?></td>
                    <td><?php echo $row['grado']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><input type="button" id="<?php echo $id?>" class="btn btn-primary" data-toggle="modal" data-target="#MyModal" value="Borrar"></td>
                    <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                        <div class="modal-dialog modal-lg">

                            <!-- Modal Content: begins -->
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">¿Estás seguro de que quieres eliminar a <span id="resultado">0</span>?</h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div class="body-message" id="imprimirEsto">

                                    </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <center>
                                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">NO</button>
                                        <button id="btnDelete" type="button" class="btn btn-success" data-dismiss="modal">SI</button>
                                    </center>
                                </div>

                            </div>
                            <!-- Modal Content: ends -->

                        </div>
                    </div>
                </tr>
            <?php
            }
            ?>

            <script type="application/javascript">
                var parametros = {};
                $('input[type=button]' ).click(function() {
                    this.sId = (this.id) ; // button ID
                    parametros = {
                        "id" : this.id
                    };
                    $.ajax({
                        data:  parametros,
                        url:   'getStudentInfo.php',
                        type:  'post',
                        beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                        },
                        success:  function (response) {

                            $("#resultado").html(response);
                        }
                    });
                });

                $('#btnDelete' ).click(function() {
                        $.ajax({
                            data:  parametros,
                            url:   'deleting_student.php',
                            type:  'post',
                            beforeSend: function () {
                                $("#").html("Procesando, espere por favor...");

                            },
                            success:  function (response) {
                                $.jGrowl("Registro eliminado con éxito", { header: 'Eliminado' });
                                setTimeout(location.reload.bind(location), 1500);
                                $("#").html(response);
                            }
                        });
                    });


            </script>



        </tbody>

    </table>
    Resultado: