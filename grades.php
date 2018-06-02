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
                        <input type="button" id="imprimir" onclick="printDiv()" class="btn btn-danger" style="display: none; margin-left: 500px" value="Imprimir"/>
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
                                </select>
                                <input type="button" href="javascript:;" onclick="obtener($('#nivel').val(),
                                                                                                 $('#grado').val(),
                                                                                                 $('#seccion').val());return false;"
                                       class="btn btn-info"  value="Buscar alumnos"/>
                            </div>
                        </div>
                    </div>
                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="tabla" style="display: none;">
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
    function obtener(nivel, grado, seccion){
        if(seccion == "" || seccion == null || seccion == undefined){
            $.jGrowl("No has ingresado una sección válida", {
                theme:  'warning',
                speed:  'slow',
                header: '¡Alto!' });
        }else{
            $("#imprimir").show();

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
                    $("#tabla").show();
                    console.log(response);
                    console.log('');
                    var data = response.split('|');
                    var i = 0;
                    $.each(data, function (index, element) {
                        var res = element.split(',');
                        if(i<res.length-1)
                        {
                            var nuevafila= "<tr><td>" +
                                res[1] + "</td><td>" +
                                res[2] + "</td><td>" +
                                res[3] + "</td><td>" +
                                res[4] + "</td><td>" +
                                res[5] + "</td><td>" +
                                res[6] + "</td><td>" +
                                res[7] + "</td></tr>";
                            $("#tabla").append(nuevafila);
                            i++;
                        }

                    });
                }
            });
        }

    }

</script>
<script>
    function printDiv(){
        var printContents = document.getElementById("tabla").innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>