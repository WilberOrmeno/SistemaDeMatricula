<?php
include("header.php");
?>
<body >
<?php include('navbar.php')?>

<div class="container-fluid" id="">

    <div class="row-fluid">
        <?php include('sidebar_periodo.php'); ?>
        <!--/span-->
        <div class="span9" id="content">
            <div class="row-fluid"></div>

            <div class="row-fluid">

                <!-- block -->
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">ELEGIR PERIODO</div>
                    </div>
                    <div class="block-content collapse in">

                        <div class="span12">

                            <div class="span4">

                            </div>


                            <div class="span4">
                                <center>

                                    <center>
                                        <div class="input-group">
                                            <input type='text' class="form-control" name="periodSelected" id="datepicker" maxlength="4" onkeypress="return isNumberKey(event)" placeholder="--Click para seleccionar--" required/>
                                            <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                    </center>

                                    <script type="application/javascript">
                                        $("#datepicker").datepicker({
                                            format: "yyyy",
                                            viewMode: "years",
                                            minViewMode: "years",
                                            autoclose: true,
                                        });</script>
                                </center>
                            </div>
                            <div class="span4"></div>
                            <div class="span4"></div>
                            <div class="span4"></div>
                            <div class="span4">
                                <center>
                                    <input type="button" href="javascript:;" onclick="realizaProceso($('#periodSelected').val());return false;" class="btn btn-info"  value="Confirmar"/>
                                </center>
                            </div>



                        </div>

                    </div>
                    <!-- /block -->

                </div>
            </div>

        </div>
    </div>

</div>
<SCRIPT language=Javascript>
    <!--
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
    function realizaProceso(periodo){
        var parametros = {
            "periodo" : periodo,
        };
        $.ajax({
            data:  parametros,
            url:   'actualizarPeriodo.php',
            type:  'post',
            beforeSend: function () {

            },
            success:  function (response) {
               // $.jGrowl("Periodo actualizado con éxito", { header: 'Actualizado' });
                setTimeout(location.reload.bind(location), 2000);
            }
        });
    }

    //-->
</SCRIPT>
</body>