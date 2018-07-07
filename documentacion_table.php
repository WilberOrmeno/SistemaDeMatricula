<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
    <thead>
    <tr>
        <th>Cód. Alumno</th>
        <th>Alumno</th>
        <th>DNI ALUMNO</th>
        <th>DNI APODERADO</th>
        <th>PARTIDA NAC.</th>
        <th>CERT. ESTUDIOS</th>
        <th>RES. TRASLADO</th>
        <th>PAGO MATRÍCULA</th>

    </tr>
    </thead>
    <tbody>
            <?php
            $query = mysqli_query(conectar(),"SELECT documentos.*, alumnos.nombres 
                                                    AS nombres_alumno, alumnos.ape_paterno AS apelPat_alumno, alumnos.ape_materno AS apeMat_alumno
                                                    FROM documentos
                                                    INNER JOIN alumnos
                                                    ON documentos.id_alumno=alumnos.id_alumno")or die(mysqli_error(conectar()));
            while($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                ?>

                <tr align="center"  >
                    <td align="center"><?php echo $row['id'] ?></td>
                    <td align="center"><?php echo $row['nombres_alumno'].' '.$row['apelPat_alumno'].' '.$row['apeMat_alumno']; ?></td>
                    <td align="center">
                        <?php if($row['dni_nino']==1){
                                echo '<input type="checkbox" checked disabled>';
                                }
                                else{
                                    echo '<input type="checkbox" disabled>';
                                }
                            ?>
                    </td>
                    <td align="center">
                        <?php if($row['dni_apoderado']==1){
                            echo '<input type="checkbox" checked disabled>';
                        }
                        else{
                            echo '<input type="checkbox" disabled>';
                        }
                        ?>
                    </td>
                    <td align="center">
                        <?php if($row['partida_nacimiento']==1){
                            echo '<input type="checkbox" checked disabled>';
                        }
                        else{
                            echo '<input type="checkbox" disabled>';
                        }
                        ?></td>
                    <td align="center">
                        <?php if($row['certificado']==1){
                            echo '<input type="checkbox" checked disabled>';
                        }
                        else{
                            echo '<input type="checkbox" disabled>';
                        }
                        ?>

                        </td>
                    <td align="center">
                        <?php if($row['resTraslado']==1){
                            echo '<input type="checkbox" checked disabled>';
                        }
                        else{
                            echo '<input type="checkbox" disabled>';
                        }
                        ?>

                    </td>
                    <td align="center">
                        <?php if($row['pagoMatricula']==1){
                            echo '<input type="checkbox" checked disabled>';
                        }
                        else{
                            echo '<input type="checkbox" disabled>';
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>

    </tbody>
</table>

