<?php include('header.php'); ?>
<body >
<?php include('navbar.php')?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php include('sidebar_editStudent.php'); ?>
        <div class="span9" id="">
            <div class="row-fluid">
                <!-- block -->
                <div  id="block_bg" class="block">
                    <form id="add_student" class="form-signin" method="post">

                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Lista de estudiantes</div>
                            <div class="muted pull-right">
                                Número de estudiantes: <span class="badge badge-info">0</span>
                            </div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12" id="studentTableDiv">
                                <h2 id="noch"> Lista de estudiantes</h2>
                                <?php include('editStudent_table.php'); ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('script.php'); ?>
</body>
<div class="hide" id="myDIV">
    <div class="container-fluid">
        <div class="row-fluid">

            <div class="span10 offset1" id="">
                <div class="row-fluid">
                    <!-- block -->
                    <div  id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Editar alumno</div>
                        </div>
                        <div class="block-content collapse in">
                            <form enctype="multipart/form-data" id="formuploadajax" method="post">
                                <div class="uploader span2" onclick="$('#filePhoto').click()" style="height: 150px; width: 120px;" >
                                    <img id="imagePreview" src="images/uploadImage.jpg" style="">
                                    <input type="file" name="userprofile_picture" value="images/uploadImage.jpg" id="filePhoto" accept="image/*"/>
                                </div>

                                <div class="span5">
                                    <input type="text" class="input-block-level span9"  name="id" id="id" style="display: none" required>
                                    <label>CÓDIGO DE ALUMNO:</label>
                                    <input type="text" class="input-block-level span9"  name="codAlumno" id="codAlumno" placeholder="Código de alumno" required>
                                    <label>APELLIDO PATERNO:</label>
                                    <input type="text" class="input-block-level span9" name="apePaterno"  id="apePaterno" placeholder="Apellido paterno" required>
                                    <label>APELLIDO MATERNO:</label>
                                    <input type="text" class="input-block-level span9" name="apeMaterno"  id="apeMaterno"     placeholder="Apellido materno"     required>
                                    <label>NOMBRES:</label>
                                    <input type="text" class="input-block-level span9" name="nombres" id="nombres"   placeholder="Nombres"  required>

                                </div>
                                <div class="span5">
                                    <label>SEXO:</label>
                                    <select id="sexo" name="sexo" class="span9" required>
                                        <option value=""><< Seleccione >></option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                    </select>
                                    <label>NIVEL:</label>
                                    <select name="nivel" id="nivel" class="span9" required>
                                        <option value=""><< Seleccione >></option>
                                        <option value="Inicial">Inicial</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Secundaria">Secundaria</option>
                                    </select>
                                    <label>GRADO:</label>
                                    <select name="grado" id="grado" class="span9" required>
                                        <option value=""><< Seleccione >></option>
                                    </select>
                                    <label>SECCIÓN:</label>

                                    <select name="seccion" id="seccion" class="span9" required>
                                        <option value=""><< Seleccione >></option>
                                    </select>
                                </div>
                                <div class="span12">
                                    <div class="span4">
                                        <label>FECHA DE NACIMIENTO:</label>
                                        <input type="date" class="input-block-level span9" name="fecNac" id="fecNac" placeholder="Date of Birth">
                                    </div>
                                    <div class="span4">
                                        <label>TELÉFONO:</label>
                                        <input type="text" class="span11" name="telefono" id="telefono" placeholder="Teléfono" required>
                                    </div>
                                    <div class="span4">
                                        <label>DNI:</label>
                                        <input type="text" class="input-block-level span11" name="dni" id="dni" placeholder="DNI" required>
                                    </div>


                                </div>
                                <div class="span12">
                                    <div class="span5 offset1">
                                        <label>EMAIL:</label>
                                        <input type="text" class="input-block-level span11" name="email" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="span5">
                                        <label>DIRECCIÓN:</label>
                                        <input type="text" class="input-block-level span11" name="direccion" id="direccion" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="span12">
                                    <center>
                                        <input type="button" class="btn btn-warning" onclick="formReset()" value="Cancelar">
                                        <input type="button" class="btn btn-info" id="guardar" value="Guardar"/>

                                    </center>
                                </div>
                            </form>

                            <script>
                                var imageLoader = document.getElementById('filePhoto');
                                imageLoader.addEventListener('change', handleImage, false);

                                function handleImage(e) {
                                    var reader = new FileReader();
                                    reader.onload = function (event) {
                                        $('.uploader img').attr('src',event.target.result);
                                    }
                                    reader.readAsDataURL(e.target.files[0]);
                                }
                                function cancelar() {
                                    var x = document.getElementById("myDIV");
                                    x.style.display = "none";

                                }
                            </script>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="application/javascript">
    var options="";
    $("#nivel").on('change',function(){
        var value=$(this).val();
        console.log(value)
        if(value=="Inicial")
        {
            options="<option><< Seleccione >></option>"
                +"<option value='3años'>3años</option>"
                +"<option value='4años'>4años</option>"
                +"<option value='5años'>5años</option>";
            $("#grado").html(options);
        }
        else if(value=="Primaria")
        {
            options='<option><< Seleccione >></option>'
                +'<option value="1ro">1ro</option>'
                +'<option value="2do">2do</option>'
                +'<option value="3ro">3ro</option>'
                +'<option value="4to">4to</option>'
                +'<option value="5to">5to</option>'
                +'<option value="6to">6to</option>';
            $("#grado").html(options);
        }
        else if(value=="Secundaria")
        {
            options='<option><< Seleccione >></option>'
                +'<option value="1ro">1ro</option>'
                +'<option value="2do">2do</option>'
                +'<option value="3ro">3ro</option>'
                +'<option value="4to">4to</option>'
                +'<option value="5to">5to</option>';
            $("#grado").html(options);
        }
        else
            $("#grado").find('option').remove()
    });

    $(function(){
        $("#guardar").on("click", function(e){
            e.preventDefault();
            var parametros = {
                "id" : document.getElementById("id").value,
                "codigo": document.getElementById("codAlumno").value,
                "apePaterno": document.getElementById("apePaterno").value,
                "apeMaterno": document.getElementById("apeMaterno").value,
                "nombres": document.getElementById("nombres").value,
                "sexo": document.getElementById("sexo").value,
                "nivel": document.getElementById("nivel").value,
                "grado": document.getElementById("grado").value,
                "seccion": document.getElementById("seccion").value,
                "fecNac": document.getElementById("fecNac").value,
                "telefono": document.getElementById("telefono").value,
                "dni": document.getElementById("dni").value,
                "email": document.getElementById("email").value,
                "direccion": document.getElementById("direccion").value,
            };
            $.ajax({
                url: "updateStudent.php",
                type: "post",
                data: parametros
            })
            .done(function(res){
                console.log(res);
                $.jGrowl("Registro agregado con éxito", { header: 'Agregado' });
                setTimeout(location.reload.bind(location), 133500);
            });
        });
    });


    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.uploader img').attr('src',event.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    }

    function formReset()
    {
        document.getElementById("add_student").reset();
    }
</script>
