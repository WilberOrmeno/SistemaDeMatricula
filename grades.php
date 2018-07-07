
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="show()">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
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
                                   class="btn btn-info"  value="Buscar alumnos"
                                   data-dismiss="modal"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="show()">Close</button>
            </div>
        </div>

    </div>
</div>


<div id="imprimirEsto" style="display: none">
        <table cellpadding="0" cellspacing="0" border="0" class="table" id="tabla" style="display: none;">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Ape. Paterno</th>
            <th>Ape. Materno</th>
            <th>Teléfono</th>
            <th>DNI</th>
            <th>Dirección</th>
        </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
    </table>
</div>

</div>
<script language=Javascript>
    function show() {
        $("#example").show();
        $("#imprimirEsto").hide();
    }
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
            show();
        }else{
            $("#tbody   ").empty();
            $("#imprimir").show();
            $("#lgr").show();
            $("#gr").show();
            $("#niv").show();
            $("#lniv").show();
            $("#sec").show();
            $("#lsec").show();

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
                        var data = response.split('|');
                        var i = 0;
                        $.each(data, function (index, element) {
                            var res = element.split(',');
                            if(i<res.length-1)
                            {
                                var nuevafila= "<tr><td>" +
                                    res[1] + "</td><td>" +
                                    res[4] + "</td><td>" +
                                    res[2] + "</td><td>" +
                                    res[3] + "</td><td>" +
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
<script src="bootstrap/js/html2canvas.js"></script>
<script src="bootstrap/js/html2canvas.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script>
    function printDiv(){

        var element = document.getElementById("imprimirEsto");
        html2canvas(element,{  width: 650}).then(function(canvas) {
            var imgData = canvas.toDataURL(
                'image/png', 1.0);
            var doc = new jsPDF('p', 'mm', [297, 210]); //210mm wide and 297mm high

            doc.addImage(imgData, 'PNG', 10, 10);
            doc.save('ListaAlumnos.pdf');

        });
    }
</script>