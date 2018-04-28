
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
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>20140143C</td>
            <td>Wilber Javier</td>
            <td>Ormeño</td>
            <td>Vera</td>
            <td>5°</td>
            <td>994318344</td>
            <td>wilber.ormeno@uni.pe</td>
            <td><button id="abajo" class="btn btn-info" onclick="myFunction()">Editar</button></td>
        </tr>
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