
	<form action="delete_stud.php" method="post">

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
                    <th>Imprimir</th>
		</tr>
		</thead>
		<tbody>
        <?php
        $query = mysqli_query(conectar(),"select * from alumnos")or die(mysqli_error(conectar()));
        while($row = mysqli_fetch_array($query)) {
            $id = $row['id_alumno'];
            ?>
            <tr>
                <td><?php echo $row['cod_alumno']?></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['ape_paterno']; ?></td>
                <td><?php echo $row['ape_materno']; ?></td>
                <td><?php echo $row['grado']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal">Ver detalles</button></td>
                <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

                    <div class="modal-dialog modal-lg">

                        <!-- Modal Content: begins -->
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="gridSystemModalLabel">Información de Wilber Javier Ormeño Vera</h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <div class="body-message" id="imprimirEsto">
                                    {{Toda la info aqui}}
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                                <button id="btnPrint" type="button" class="btn btn-success">Imprimir</button>
                            </div>

                        </div>
                        <!-- Modal Content: ends -->

                    </div>
                </div>
            </tr>
            <?php
        }
        ?>

        </tbody>
	</table>
	</form>
    <script type="application/javascript">
        document.getElementById("btnPrint").onclick = function () {
            printElement(document.getElementById("imprimirEsto"));
        }

        function printElement(elem) {
            var domClone = elem.cloneNode(true);

            var $printSection = document.getElementById("printSection");

            if (!$printSection) {
                var $printSection = document.createElement("div");
                $printSection.id = "printSection";
                document.body.appendChild($printSection);
            }

            $printSection.innerHTML = "";
            $printSection.appendChild(domClone);
            window.print();
        }
    </script>

    <style>
        @media screen {
            #printSection {
                display: none;
            }
        }
        @media print {
            body * {
                visibility:hidden;
            }
            #printSection, #printSection * {
                visibility:visible;
            }
            #printSection {
                position:absolute;
                left:0;
                top:0;
            }
        }
    </style>