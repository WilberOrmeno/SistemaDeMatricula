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
        <?php include('sidebar_secciones.php'); ?>
        <div class="span9" id="content">
            <div class="row-fluid">
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">AGREGAR SECCIÓN</div>
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
                                <label align="left" style="margin-left: 15px" >SECCIÓN:</label>
                                <input type="text" class="input-block-level span11" maxlength="1" id="seccion" name="seccion" placeholder="Sección" required>
                                <input type="button" class="btn btn-warning" onclick="formResetAll()" value="Cancelar">
                                <input type="button" href="javascript:;" onclick="guardar($('#nivel').val(),
                                                                                                 $('#grado').val(),
                                                                                                 $('#seccion').val());return false;"
                                       class="btn btn-info"  value="Guardar"/>
                            </div>
                        </div>
                    </div>
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
                url:   'agregarSeccion.php',
                type:  'post',
                beforeSend: function () {
                },
                success:  function (response) {
                    $.jGrowl("Sección agregada con éxito", {

                        header: 'Agregado' });
                    setTimeout(location.reload.bind(location), 2000);
                }
            });
        }

    }

</script>
