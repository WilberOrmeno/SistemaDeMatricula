
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
        <div class="pull-right">
            <!--
           <a href="add_student.php" class="btn btn-inverse"><i class="icon-plus-sign icon-large"></i> Agregar alumno</a>-->
        </div>
        <thead>
        <tr>
            <th>Cod. alumno</th>
            <th>Nombres</th>
            <th>Ape. Paterno</th>
            <th>Ape. Materno</th>
            <th>Grado</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Editar</th>
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
                <td><button id="abajo" class="btn btn-info" onclick="myFunction()">Editar</button></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

<script type="application/javascript">
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    var altura = $(document).height();

    $("#abajo").click(function(){
        $("html, body").animate({scrollTop:altura+"px"});
    });
</script>