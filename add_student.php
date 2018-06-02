<?php include('header.php'); ?>
    <body>
    <?php include('navbar.php')?>

    <div class="container-fluid">
                <div class="row-fluid">
                <?php include('sidebar_addStudents.php'); ?>

                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block" style="height: 550px">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Registrar alumno</div>
						    </div>

                            <div class="block-content collapse in">
                                <form enctype="multipart/form-data" id="formuploadajax" method="post">
                                    <div id="documentacionAlumno" style="display: block; height: 550px">
                                        <div class="span12">
                                            <h3>DOCUMENTOS</h3>
                                        </div>
                                        <div class="span3 offset3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="dniNino" style="height: 40px;margin: -2px 0 0">COPIA DNI NIÑO
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="dniApoderado" style="height: 40px;margin: -2px 0 0">COPIA DNI APODERADO
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="partidaNacimiento" style="height: 40px;margin: -2px 0 0">PARTIDA DE NACIMIENTO
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="certificadoEstudios" style="height: 40px;margin: -2px 0 0">CERTIFICADO DE ESTUDIOS
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="resTraslado" style="height: 40px;margin: -2px 0 0">RESOLUCIÓN DE TRASLADO
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="1" name="pagoMatricula" style="height: 40px;margin: -2px 0 0">PAGO DE MATRÍCULA
                                            </label>
                                        </div>
                                        <div class="span5">
                                            <label class="checkbox-inline">
                                                <input type="file" value="" style="height: 40px;margin: -2px 0 0">
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="file" value="" style="height: 40px;margin: -2px 0 0">
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="file" value="" style="height: 40px;margin: -2px 0 0">
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="file" value="" style="height: 40px;margin: -2px 0 0">
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="file" value="" style="height: 40px;margin: -2px 0 0">
                                            </label>
                                        </div>

                                        <div class="span12" style="position: absolute; z-index: 100 !important;   top: 450px">

                                            <center>
                                                <input type="button" class="btn btn-warning" onclick="formReset()" value="Cancelar">
                                                <input type="button" id="next1" class="btn btn-info" value="Siguiente"/>
                                            </center>
                                        </div>
                                    </div>
                                    <div id="infoAlumno" style="display: none; height: 550px">
                                        <div class="span12">
                                            <h3>DATOS DEL ALUMNO</h3>
                                        </div>
                                        <div class="uploader span2" onclick="$('#filePhoto').click()" style="height: 150px; width: 120px;" >
                                            <img id="imagePreview" src="images/uploadImage.jpg" style="">
                                            <input type="file" name="userprofile_picture" value="images/uploadImage.jpg" id="filePhoto" accept="image/*"/>
                                        </div>

                                        <div class="span5">
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
                                            <label>SECCIÓN:</label>
                                            <select name="seccion" id="seccion" class="span9" required>
                                                <option value=""><< Seleccione >></option>
                                            </select>
                                        </div>
                                        <div class="span12">
                                            <div class="span4">
                                                <label>FECHA DE NACIMIENTO:</label>
                                                <input type="date" class="input-block-level span9"  id="fecNac" placeholder="Date of Birth">

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
                                            <div class="span6">
                                                <label>EMAIL:</label>
                                                <input type="text" class="input-block-level span11" name="email" id="email" placeholder="Email" required>

                                            </div>
                                            <div class="span6">
                                                <label>DIRECCIÓN:</label>
                                                <input type="text" class="input-block-level span11" name="direccion" id="direccion" placeholder="Dirección" required>
                                            </div>
                                        </div>
                                        <div class="span12" style="position: absolute; z-index: 100 !important;   top: 450px">
                                            <center>
                                                <input type="button" class="btn btn-success" id="previous1" value="Anterior">
                                                <input type="button" class="btn btn-warning" onclick="formReset()" value="Cancelar">
                                                <input type="button" id="next2" class="btn btn-info" value="Siguiente"/>

                                            </center>
                                        </div>
                                    </div>
                                    <div id="infoApoderado" style="display: none; height: 550px">
                                        <div class="span12">
                                            <h3>DATOS DEL APODERADO</h3>
                                        </div>
                                        <div class="span12">
                                            <div class="span6">
                                                <label>Apellido Paterno:</label>
                                                <input type="text" class="input-block-level span11"  name="apePatApoderado" placeholder="Apellido Paterno" required>
                                                <label>Apellido Materno:</label>
                                                <input type="text" class="input-block-level span11"  name="apeMatApoderado" placeholder="Apellido Materno" required>
                                                <label>Nombres:</label>
                                                <input type="text" class="input-block-level span11"  name="nombresApoderado" placeholder="Nombres" required>
                                            </div>
                                            <div class="span6">
                                                <label>Relación con el estudiante:</label>
                                                <input type="text" class="input-block-level span11"  name="relacionEstudiante" placeholder="Relación con el estudiante" required>
                                                <label>Celular:</label>
                                                <input type="text" class="input-block-level span11"  name="celularApoderado" placeholder="Celular" onkeydown='return(event.which >= 48 && event.which <= 57)
                                                || event.which ==8 || event.which == 46' maxlength ="9" required>
                                                <label for="emailApoderado">Correo electrónico</label>
                                                <input type="text" class="input-block-level span11" name="emailApoderado" placeholder="Correo electronico">
                                            </div>
                                        </div>
                                        <div class="span12" style="position: absolute; z-index: 500 !important;   top: 450px">
                                            <center>
                                                <input type="button" class="btn btn-success" id="previous2" value="Anterior">
                                                <input type="button" class="btn btn-warning" onclick="formResetAll()" value="Cancelar">
                                                <input type="submit" class="btn btn-info"  value="Guardar"/>
                                            </center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
                </div>
    </div>
    <div id="mensaje"></div>
		<?php include('script.php'); ?>
    </body>
<script type="application/javascript">
    var options="";
    var nivel;
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

    $(function(){
        $("#formuploadajax").on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formuploadajax"));
            formData.append("dato", "valor");
            $.ajax({
                url: "studentAdded.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                $.jGrowl("Registro agregado con éxito", { header: 'Agregado' });
                setTimeout(location.reload.bind(location), 1500);
            });
        });
    });

    $("#grado").on('change',function() {
        var grado = $(this).val();

        console.log();
        var parametros = {
            "grado" : grado,
            "nivel" : $("#nivel").val()
        };

        $.ajax({
            data:  parametros,
            url:   'getSecciones.php',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response) {
                var res2 = response.split(',');
                var res = res2.sort();
                options='<option><< Seleccione >></option>'
                for(var i = 1; i < res.length; i++){
                    options +='<option value="'+res[i]+'">'+res[i]+'</option>'
                }
                $("#seccion").html(options);
            }
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
        document.getElementById("formuploadajax").reset();
    }

    function formResetAll()
    {
        document.getElementById("formuploadajax").reset();
        $("#documentacionAlumno").show();
        $("#infoAlumno").hide();
        $("#infoApoderado").hide();
    }

    $("#next1").click(function(){
        $("#documentacionAlumno").hide();
        $("#infoAlumno").show();
        $("#infoApoderado").hide();
    });
    $("#next2").click(function(){
        $("#documentacionAlumno").hide();
        $("#infoAlumno").hide();
        $("#infoApoderado").show();
    });
    $("#previous1").click(function(){
        $("#documentacionAlumno").show();
        $("#infoAlumno").hide();
        $("#infoApoderado").hide();
    });
    $("#previous2").click(function(){
        $("#documentacionAlumno").hide();
        $("#infoAlumno").show();
        $("#infoApoderado").hide();
    });
</script>

</html>