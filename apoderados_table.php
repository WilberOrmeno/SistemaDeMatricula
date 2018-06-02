<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
    <thead>
    <tr>
        <th>Alumno</th>
        <th>Apoderado</th>
        <th>Relación</th>
        <th>Celular</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
            <?php
            $query = mysqli_query(conectar(),"SELECT apoderados.id_apoderado, apoderados.ape_paterno, apoderados.ape_materno, apoderados.nombres, apoderados.relacion, apoderados.celular, apoderados.email, alumnos.nombres 
                                                    AS nombres_alumno, alumnos.ape_paterno AS apelPat_alumno, alumnos.ape_materno AS apeMat_alumno
                                                    FROM apoderados
                                                    INNER JOIN alumnos
                                                    ON apoderados.id_alumno=alumnos.id_alumno")or die(mysqli_error(conectar()));
            while($row = mysqli_fetch_array($query)) {
                $id = $row['id_apoderado'];
                ?>
                <tr>
                    <td><?php echo $row['nombres_alumno'].' '.$row['apelPat_alumno'].' '.$row['apeMat_alumno']; ?></td>
                    <td><?php echo $row['nombres'].' '.$row['ape_paterno'].' '.$row['ape_materno']; ?></td>
                    <td><?php echo $row['relacion']; ?></td>
                    <td><?php echo $row['celular']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php
            }
            ?>

    </tbody>
</table>

