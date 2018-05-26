<?php include("header.php") ?>
<?php include('navbar.php') ?>
<style>
    div.warning {
        background-color: 		red;
        color: 					orange;
    }
</style>
<link href="vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
<script src="vendors/jGrowl/jquery.jgrowl.js"></script>
<div class="container-fluid" id="">
    <div class="row-fluid">
        <?php include('sidebar_grades.php'); ?>
        <div class="span9" id="content">
            <div class="row-fluid">
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">BUSCAR POR SECCIÓN</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <div class="span2"></div>
                            <div class="span4">
                                <label>NIVEL:</label>
                                <select name="nivel" id="nivel" class="span9" required>
                                    <option value=""><< Seleccione >></option>
                                    <option value="Inicial">Inicial</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                </select>
                            </div>
                            <div class="span4">
                                <label>GRADO:</label>
                                <select name="grado" id="grado" class="span9" required>
                                    <option value=""><< Seleccione >></option>
                                </select>
                            </div>
                            <div class="span2"></div>
                            <div class="span4"></div>
                            <div class="span4" align="center">
                                <label align="left" style="margin-left: 45px" >SECCIÓN:</label>
                                <select name="seccion" id="seccion" class="span9" required>
                                    <option value=""><< Seleccione >></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                </select>
                                <input type="button" href="javascript:;" onclick="guardar($('#nivel').val(),
                                                                                                 $('#grado').val(),
                                                                                                 $('#seccion').val());return false;"
                                       class="btn btn-info"  value="Buscar alumnos"/>
                            </div>
                        </div>
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                        <thead>
                        <tr>
                            <th>Cod. alumno</th>
                            <th>Nombres</th>
                            <th>Ape. Paterno</th>
                            <th>Ape. Materno</th>
                            <th>Teléfono</th>
                            <th>DNI</th>
                            <th>Dirección</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><label id="codAlumno"></label></td>
                                <td><label id="nombres"></label></td>
                                <td><label id="apePaterno"></label></td>
                                <td><label id="apeMaterno"></label></td>
                                <td><label id="telefono"></label></td>
                                <td><label id="dni"></label></td>
                                <td><label id="direccion"></label></td>
                            </tr>

                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>

</div>
<script language=Javascript>
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

    function guardar(nivel, grado, seccion){
        if(seccion == "" || seccion == null || seccion == undefined){
            $.jGrowl("No has ingresado una sección válida", {
                theme:  'warning',
                speed:  'slow',
                header: '¡Alto!' });
        }else{
            var parametros = {
                "nivel" : nivel,
                "grado" : grado,
                "seccion" : seccion
            };

            $.ajax({
                data:  parametros,
                url:   'getStudentsByGrade.php',
                type:  'post',
                beforeSend: function () {
                },
                success:  function (response) {
                    console.log(response);
                    var res = response.split(",");
                    console.log(res)
                    $("#codAlumno").html(res[1]);
                    $("#apePaterno").html(res[2]);
                    $("#apeMaterno").html(res[3]);
                    $("#nombres").html(res[4]);
                    $("#telefono").html(res[5]);
                    $("#dni").html(res[6]);
                    $("#direccion").html(res[7]);

                }
            });
        }

    }

</script>
