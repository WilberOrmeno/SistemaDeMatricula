
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
        <th>Nivel</th>
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
            <td><?php echo $row['nivel']; ?></td>
            <td><?php echo $row['grado']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><input id="abajo" onclick="myFunction(<?php echo $id?>)" name="<?php echo $id?>" class="btn btn-info" style="width: 40px" value="Editar"></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>



    <script type="application/javascript">

    var altura = $(document).height();
    var contador = 0;
     function myFunction(name)  {

        var x = document.getElementById("myDIV");
        x.style.display = "block";
        contador++;
        console.log(contador)
        if(x.style.display = "block")
            x.style.display = "block";

         $("html, body").animate({scrollTop:altura+"px"});
        console.log(name);

        parametros = {
            "id" : name
        };

        $.ajax({
            data:  parametros,
            url:   'getStudentInfo.php',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response) {
                console.log(response);
                var res = response.split(",");
                document.getElementById('id').value = res[0];
                document.getElementById('codAlumno').value = res[1];
                document.getElementById('apePaterno').value = res[2];
                document.getElementById('apeMaterno').value = res[3];
                document.getElementById('nombres').value = res[4];
                document.getElementById('sexo').value = res[5];
                document.getElementById('nivel').value = res[6];
                document.getElementById('grado').value = res[7];
                document.getElementById('fecNac').value = res[8];
                document.getElementById('telefono').value = res[9];
                document.getElementById('dni').value = res[10];
                document.getElementById('email').value = res[11];
                document.getElementById('direccion').value = res[12];
                document.getElementById('imagePreview').src = res[13];

            }
        });

    };

</script>