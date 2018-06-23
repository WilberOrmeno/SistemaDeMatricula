<?php include('header.php'); ?>
<body >
<?php include('navbar.php')?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('sidebar_printEnrollment.php')?>
        <div class="span9" id="">
            <div class="row-fluid">
                <!-- block -->
                <div  id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de estudiantes</div>
                        <div class="muted pull-right">
                            Número de estudiantes: <span class="badge badge-info">0</span>
                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12" id="studentTableDiv">
                            <h2 id="noch"> Lista de estudiantes</h2>


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
                                        <td><button type="button" class="btn btn-info" onclick="printElement(<?php echo $row['cod_alumno']?>)">Imprimir</button></td>
                                    <div id="<?php echo "printThis".$row['cod_alumno'] ?>" style="display: block; position: absolute; z-index: -19; width: 900px; top: 50px">
                                            <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="col-xs-4 col-sm-4 text-left">
                                                        <img src="<?php echo $row['foto'] ?>" id="foto" style="height: 200px; border: 1px solid white; border-radius: 20px">
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 text-left"></div>
                                                    <div class="col-xs-4 col-sm-4 text-right">
                                                        <img src="images/cetapsi-sinfondo.png" id="logo" style="height: 200px;">
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-xs-offset divider" style="top: 30px; ">
                                                    <div class="col-xs-4 col-xs-offset-1">
                                                        <hr><b><h3 style="font-weight: bold;">Código:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Nombres: </h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Apellido Paterno: </h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Apellido Materno:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Sexo:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Nivel:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Grado:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Sección:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Teléfono:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Email:</h3></b>
                                                        <hr><b><h3 style="font-weight: bold;">Dirección:</h3></b><hr>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <hr><h3><?php echo $row['cod_alumno']?> </h3>
                                                        <hr><h3> <?php echo $row['nombres']; ?> </h3>
                                                        <hr><h3><?php echo $row['ape_paterno']; ?> </h3>
                                                        <hr><h3> <?php echo $row['ape_materno']; ?> </h3>
                                                        <hr><h3><?php echo $row['sexo']; ?> </h3>
                                                        <hr><h3><?php echo $row['nivel']; ?> </h3>
                                                        <hr><h3><?php echo $row['grado']; ?> </h3>
                                                        <hr><h3> <?php echo $row['seccion']; ?> </h3>
                                                        <hr><h3> <?php echo $row['telefono']; ?> </h3>
                                                        <hr><h3> <?php echo $row['email']; ?> </h3>
                                                        <hr><h3><?php echo $row['direccion']; ?> </h3><hr>
                                                    </div>
                                                    <div class="col-xs-5 col-xs-offset-7" style="top: 150px;">
                                                        <hr style="border-top:1px solid #000000 ;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <script>
                                $('link[id="bootstrap-css"]').prop('disabled', true);
                            </script>
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
<script type="application/javascript">

    function printElement(cod) {
        $('link[id="bootstrap-css"]').prop('disabled', false);
        var elem = document.getElementById("printThis"+cod);
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
        $('link[id="bootstrap-css"]').prop('disabled', true);
    }


</script>