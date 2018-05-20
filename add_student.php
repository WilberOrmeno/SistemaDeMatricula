<?php include('header.php'); ?>
<style>
    .uploader {
        top: 50px;
        left: 10px;
        overflow:hidden;
        background:#f3f3f3;
        border:2px dashed #e8e8e8;
    }

    #filePhoto{
        width:120px;
        height:150px;
        cursor:pointer;
    }
    .uploader img{
        top:-1px;
        left:-1px;
        border:none;
    }
</style>
    <body>
    <?php include('navbar.php')?>

    <div class="container-fluid">
                <div class="row-fluid">
                <?php include('sidebar_addStudents.php'); ?>

                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Registrar alumno</div>
						    </div>
                            <div class="block-content collapse in">
                                <div class="uploader span2" onclick="$('#filePhoto').click()" style="height: 150px; width: 120px;" >
                                    <img id="imagePreview" src="images/uploadImage.jpg" style="">
                                    <input type="file" name="userprofile_picture" id="filePhoto" accept="image/*"/>
                                </div>

                                <div class="span5">
                                    <label>CÓDIGO DE ALUMNO:</label>
                                    <input type="text" class="input-block-level span9"  id="codAlumno" placeholder="Código de alumno" required>
                                    <label>APELLIDO PATERNO:</label>
                                    <input type="text" class="input-block-level span9"  id="apePaterno" placeholder="Apellido paterno" required>
                                    <label>APELLIDO MATERNO:</label>
                                    <input type="text" class="input-block-level span9"  id="apeMaterno"     placeholder="Apellido materno"     required>
                                    <label>NOMBRES:</label>
                                    <input type="text" class="input-block-level span9"  id="nombres"  placeholder="Nombres"  required>

                                </div>
                                <div class="span5">
                                    <label>SEXO:</label>
                                    <select id="sexo" class="span9" required>
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
                                    <label>FECHA DE NACIMIENTO:</label>
                                    <input type="date" class="input-block-level span9"  id="fecNac" placeholder="Date of Birth">
                                </div>
                                <div class="span12">
                                    <div class="span4">
                                        <label>TELÉFONO:</label>
                                        <input type="text" class="  span11"  id="telefono" placeholder="Teléfono" required>
                                    </div>
                                    <div class="span4">
                                        <label>DNI:</label>
                                        <input type="text" class="input-block-level span11"  id="dni" placeholder="DNI" required>
                                    </div>
                                    <div class="span4">
                                        <label>EMAIL:</label>
                                        <input type="text" class="input-block-level span11"  id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="span12">

                                    <div class="span6 offset3">
                                        <label>DIRECCIÓN:</label>
                                        <input type="text" class="input-block-level span11"  id="direccion" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="span12">
                                    <center>
                                        <input type="button" class="btn btn-warning" onclick="formReset()" value="Cancelar">
                                        <input type="button" href="javascript:;" onclick="realizaProceso($('#codAlumno').val()
                                            , $('#apePaterno').val(), $('#apeMaterno').val(), $('#nombres').val()
                                            , $('#sexo').val(), $('#nivel').val(), $('#grado').val()
                                            , $('#fecNac').val(), $('#telefono').val(), $('#dni').val()
                                            , $('#email').val(), $('#direccion').val());return false;" class="btn btn-info"  value="Guardar"/>

                                    </center>

                                <script type="application/javascript">
                                    var parametros = {};
                                    $('input[type=button]' ).click(function() {
                                        this.sId = (this.id) ; // button ID
                                        parametros = {
                                            "id" : this.id
                                        };
                                        $.ajax({
                                            data:  parametros,
                                            url:   'getStudentInfo.php',
                                            type:  'post',
                                            beforeSend: function () {
                                                $("#resultado").html("Procesando, espere por favor...");
                                            },
                                            success:  function (response) {

                                                $("#resultado").html(response);
                                            }
                                        });
                                    });

                                    $('#btnDelete' ).click(function() {
                                        $.ajax({
                                            data:  parametros,
                                            url:   'deleting_student.php',
                                            type:  'post',
                                            beforeSend: function () {
                                                $("#").html("Procesando, espere por favor...");

                                            },
                                            success:  function (response) {
                                                $.jGrowl("Registro eliminado con éxito", { header: 'Eliminado' });
                                                setTimeout(location.reload.bind(location), 1500);
                                                $("#").html(response);
                                            }
                                        });
                                    });


                                </script>

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


            function formReset()
            {
                document.getElementById("add_student").reset();
            }
			</script>

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
        </div>
		<?php include('script.php'); ?>
    </body>
<script type="application/javascript">
    var options="";
    $("#nivel").on('change',function(){
        var value=$(this).val();
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

    function realizaProceso(v2, v3, v4, v5, v6, v7, v8, v9, v10 , v11, v12, v13){
        var parametros = {
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
            url:   'studentAdded.php',
            type:  'post',
            beforeSend: function () {

            },
            success:  function (response) {
                $.jGrowl("Registro guardado con éxito", { header: 'Guardado' });
                setTimeout(location.reload.bind(location), 2000);
            }
        });
    }
</script>

</html>