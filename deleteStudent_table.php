
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Ape. Paterno</th>
            <th>Ape. Materno</th>
            <th>Nivel</th>
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
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['ape_paterno']; ?></td>
                    <td><?php echo $row['ape_materno']; ?></td>
                    <td><?php echo $row['nivel']; ?></td>
                    <td><?php echo $row['grado']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><input type="button" id="<?php echo $id?>" class="btn btn-info" data-toggle="modal" data-target="#MyModal" value="Borrar" ></td>
                    <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">¿Estás seguro de que quieres eliminar a <span id="resultado">0</span>?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="body-message" id="imprimirEsto">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <center>
                                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">NO</button>
                                        <button id="btnDelete" type="button" class="btn btn-success" data-dismiss="modal">SI</button>
                                    </center>
                                </div>

                            </div>
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
                            var res = response.split(",");
                            console.log(res);
                            $("#resultado").html(res[4]+' '+res[2]+' '+res[3]);
                        }
                    });
                });

                $('#btnDelete' ).click(function() {
                        $.ajax({
                            data:  parametros,
                            url:   'deleting_student.php',
                            type:  'post',
                            beforeSend: function () {
                            },
                            success:  function (response) {
                                $.jGrowl("Registro eliminado con éxito", { header: 'Eliminado' });
                                setTimeout(location.reload.bind(location), 1500);
                            }
                        });
                    });


            </script>



        </tbody>

    </table>