<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
    <thead>
    <tr>
        <th>Cod. alumno</th>
        <th>Nombres</th>
        <th>Ape. Paterno</th>
        <th>Ape. Materno</th>
        <th>Nivel</th>
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
            <td><?php echo $row['nivel']; ?></td>
            <td><?php echo $row['grado']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#MyModal">Ver detalles</button></td>
            <div id="MyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Información de Wilber Javier Ormeño Vera</h4>
                        </div>
                        <div class="modal-body" >
                            <div class="body-message" id="imprimirEsto">
                                <div class="span3">
                                    <img class="img-circle"
                                         src="<?php echo $row['foto']; ?>"
                                         alt="User Pic">
                                </div>
                                <div id="capture" style="padding: 10px; background: #f5da55">
                                    <h4 style="color: #000; ">Hello world!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                            <button id="download" type="button" class="btn btn-success" >Imprimir</button>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script src="bootstrap/js/html2canvas.js"></script>
<script src="bootstrap/js/html2canvas.min.js"></script>
<script type="application/javascript">
       /* document.getElementById("btnPrint").onclick = function () {
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
        }*/
       var canvas = document.getElementById('example'),
           ctx = canvas[0].getContext("2d");

       /**
        * Demonstrates how to download a canvas an image with a single
        * direct click on a link.
        */
       function doCanvas() {
           /* draw something */
           ctx.fillStyle = '#f90';
           ctx.fillRect(0, 0, canvas.width, canvas.height);
           ctx.fillStyle = '#fff';
           ctx.font = '60px sans-serif';
           ctx.fillText('Code Project', 10, canvas.height / 2 - 15);
           ctx.font = '26px sans-serif';
           ctx.fillText('Click link below to save this as image', 15, canvas.height / 2 + 35);
       }

       /**
        * This is the function that will take care of image extracting and
        * setting proper filename for the download.
        * IMPORTANT: Call it from within a onclick event.
        */
       function downloadCanvas(link, canvasId, filename) {
           link.href = document.getElementById(canvasId).toDataURL();
           link.download = filename;
       }

       /**
        * The event handler for the link's onclick event. We give THIS as a
        * parameter (=the link element), ID of the canvas and a filename.
        */
       document.getElementById('download').addEventListener('click', function() {
           downloadCanvas(this, 'canvas', 'test.png');
       }, false);

       /**
        * Draw something to canvas
        */
       doCanvas();


       window.takeScreenShot = function() {
           /**
            *    Ken Fyrstenberg Nilsen
            *    Abidas Software
            */

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