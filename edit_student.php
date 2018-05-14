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
                            <form id="foo">
                           <!-- span 4 -->
                                <div class="uploader span2" onclick="$('#filePhoto').click()" style="height: 200px; width: 152px;" >
                                    <img id="imagePreview" src="images/uploadImage.jpg" style="">
                                    <input type="file" name="userprofile_picture" id="filePhoto" accept="image/*"/>
                                </div>

                                <div class="span5">
                                    <input type="text" class="input-block-level span9"  name="id" id="id" style="display: none" required>
                                    <label>CÓDIGO DE ALUMNO:</label>
                                    <input type="text" class="input-block-level span9"  name="codAlumno" id="codAlumno" required>
                                    <label>APELLIDO PATERNO:</label>
                                    <input type="text" class="input-block-level span9"  name="apePaterno" id="apePaterno" required>
                                    <label>APELLIDO MATERNO:</label>
                                    <input type="text" class="input-block-level span9"  name="apeMaterno" id="apeMaterno" required>
                                    <label>NOMBRES:</label>
                                    <input type="text" class="input-block-level span9"  name="nombres" id="nombres"required>

                                </div>
                                <div class="span5">
                                    <label>SEXO:</label>
                                    <select name="sexo" id="sexo" class="span9" required>
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
                                        <option value="1ro">1ro</option>
                                        <option value="2do">2do</option>
                                        <option value="3ro">3ro</option>
                                        <option value="4to">4to</option>
                                        <option value="5to">5to</option>
                                        <option value="6to">6to</option>

                                    </select>
                                    <label>FECHA DE NACIMIENTO:</label>
                                    <input type="date" class="input-block-level span9"  name="fecNac" id="fecNac" >
                                </div>
                                <div class="span12">
                                    <div class="span4">
                                        <label>TELÉFONO:</label>
                                        <input type="text" class="  span11"  name="telefono" id="telefono" required>
                                    </div>
                                    <div class="span4">
                                        <label>DNI:</label>
                                        <input type="text" class="input-block-level span11"  name="dni" id="dni" required>
                                    </div>
                                    <div class="span4">
                                        <label>EMAIL:</label>
                                        <input type="text" class="input-block-level span11"  name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="span12">

                                    <div class="span6 offset3">
                                        <label>DIRECCIÓN:</label>
                                        <input type="text" class="input-block-level span11"  name="direccion" id="direccion" required>
                                    </div>
                                </div>
                                <div class="span12">
                                    <center>
                                        <input type="button" class="btn btn-warning" onclick="cancelar()" value="Cancelar">
                                        <input type="button" href="javascript:;" onclick="realizaProceso($('#id').val(), $('#codAlumno').val()
                                            , $('#apePaterno').val(), $('#apeMaterno').val(), $('#nombres').val()
                                            , $('#sexo').val(), $('#nivel').val(), $('#grado').val()
                                            , $('#fecNac').val(), $('#telefono').val(), $('#dni').val()
                                            , $('#email').val(), $('#direccion').val());return false;" class="btn btn-info"  value="Actualizar"/>
                                    </center>
                                </div>

                                <br/>
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
    function realizaProceso(v1, v2, v3, v4, v5, v6, v7, v8, v9, v10 , v11, v12, v13){
        var parametros = {
            "id" : v1,
            "codigo" : v2,
            "apePaterno" : v3,
            "apeMaterno" : v4,
            "nombres" : v5,
            "sexo" : v6,
            "nivel" : v7,
            "grado" : v8,
            "fecNac" : v9,
            "telefono" : v10,
            "dni" : v11,
            "email" : v12,
            "direccion" : v13,
        };
        $.ajax({
            data:  parametros,
            url:   'updateStudent.php',
            type:  'post',
            beforeSend: function () {

            },
            success:  function (response) {
                $.jGrowl("Registro actualizado con éxito", { header: 'Actualizado' });
                setTimeout(location.reload.bind(location), 1500);
            }
        });
    }
</script>

