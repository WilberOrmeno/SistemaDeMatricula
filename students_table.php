<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
    <thead>
    <tr>
        <th>Cod. alumno</th>
        <th>Nombres</th>
        <th>Ape. Paterno</th>
        <th>Ape. Materno</th>
        <th>Nivel</th>
        <th>Grado</th>
        <th>Sección</th>
        <th>Telefono</th>
        <th>Email</th>
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
                    <td><?php echo $row['seccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php
            }
            ?>

    </tbody>
</table>

