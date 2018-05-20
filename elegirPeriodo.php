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
        <?php include('sidebar_periodo.php'); ?>
        <div class="span9" id="content">
            <div class="row-fluid">
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
                                    <div class="input-group">
                                        <input type='text' class="form-control" name="periodSelected" id="datepicker" maxlength="4" onkeypress="return isNumberKey(event)" placeholder="--Click para seleccionar--" required/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </center>
                                </div>
                                <div class="span4"></div>
                                <div class="span4"></div>
                                <div class="span4"></div>
                                <div class="span4">
                                <center>
                                    <input type="button" href="javascript:;" onclick="realizaProceso($('#datepicker').val());return false;" class="btn btn-info"  value="Confirmar"/>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<script language=Javascript>
    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true,
    });
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    function realizaProceso(periodo){
        if(periodo == 0 || periodo == null || periodo ==""){
            $.jGrowl("No has ingresado un periodo válido", {
                theme:  'warning',
                speed:  'slow',
                header: '¡Alto!' });
        }else{
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
                    $.jGrowl("Periodo actualizado con éxito", {

                        header: 'Actualizado' });
                    setTimeout(location.reload.bind(location), 2000);
                }
            });
        }

    }

</script>
