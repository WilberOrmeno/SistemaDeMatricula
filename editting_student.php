
<style>
    .form-group {
        text-align: left;
    }
    .uploader {
        position:relative;
        overflow:hidden;
        background:#f3f3f3;
        border:2px dashed #e8e8e8;
    }

    #filePhoto{
        position:absolute;
        width:150px;
        height:200px;
        top:0px;
        left:0;
        z-index:2;
        opacity:0;
        cursor:pointer;
    }

    .uploader img{
        position:absolute;
        top:-1px;
        left:-1px;
        z-index:1;
        border:none;
    }
</style>
<body>
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
                        <form id="add_student" class="form-signin" method="post">
                            <!-- span 4 -->
                            <div class="uploader span2" onclick="$('#filePhoto').click()" style="height: 200px; width: 152px;" >
                                <img id="imagePreview" src="images/uploadImage.jpg" style="">
                                <input type="file" name="userprofile_picture" id="filePhoto" accept="image/*"/>
                            </div>

                            <div class="span5">
                                <label>CÓDIGO DE ALUMNO:</label>
                                <input type="text" class="input-block-level span9"  name="fname" placeholder="Código de alumno" required>
                                <label>APELLIDO PATERNO:</label>
                                <input type="text" class="input-block-level span9"  name="fname" placeholder="Apellido paterno" required>
                                <label>APELLIDO MATERNO:</label>
                                <input type="text" class="input-block-level span9"  name="mname"     placeholder="Apellido materno"     required>
                                <label>NOMBRES:</label>
                                <input type="text" class="input-block-level span9"  name="lname"  placeholder="Nombres"  required>

                            </div>
                            <div class="span5">
                                <label>SEXO:</label>
                                <select name="student_class" class="span9" required>
                                    <option value=""> </option>
                                </select>
                                <label>GRADO:</label>
                                <select name="student_class" class="span9" required>
                                    <option value=""> </option>
                                </select>
                                <label>FECHA DE NACIMIENTO:</label>
                                <input type="date" class="input-block-level span9"  name="dob" placeholder="Date of Birth">
                                <!--<label>ADDRESS:</label>
                                <input type="text" Placeholder="Permanent Address" name="address" class="my_message" required>


                                <dt><label>TRANSPORT:</label></dt>
                                        <dd><label class="radio-inline"><input type="radio" name="transport" value="yes" checked='true'> Yes </label></dd>
                                        <dd><label class="radio-inline"><input type="radio" name="transport" value="no"> No</label></dd>

                                <label>ROUTE:</label>
                                        <input type="text" Placeholder="Route Name" name="route" class="my_message">
                                <br>
                                <br>
                                <button class="btn btn-success" name="save"><i class="icon-save icon-large"></i> Save </button>
                                    -->

                            </div>
                            <div class="span12">
                                <div class="span4">
                                    <label>TELÉFONO:</label>
                                    <input type="text" class="input-block-level span11"  name="fname" placeholder="Teléfono" required>
                                </div>
                                <div class="span4">
                                    <label>DNI:</label>
                                    <input type="text" class="input-block-level span11"  name="fname" placeholder="DNI" required>
                                </div>
                                <div class="span4">
                                    <label>EMAIL:</label>
                                    <input type="text" class="input-block-level span11"  name="fname" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="span12">

                                <div class="span6 offset3">
                                    <label>DIRECCIÓN:</label>
                                    <input type="text" class="input-block-level span11"  name="fname" placeholder="Dirección" required>
                                </div>
                            </div>
                            <div class="span12">
                                <center>
                                    <button class="btn btn-warning">Cancelar</button>
                                    <button class="btn btn-success">Guardar</button>
                                </center>
                            </div>
                        </form>
                        <script>
                            /*jQuery(document).ready(function($){
                                $("#add_student").submit(function(e){
                                    e.preventDefault();
                                    var this = $(e.target);
                                    var formData = $(this).serialize();
                                    $.ajax({
                                        type: "POST",
                                        url: "save_stud.php",
                                        data: formData,
                                        success: function(html){
                                            $.jGrowl("Student Successfully  Added", { header: 'Student Added' });
                                            window.location = 'students.php';
                                        }
                                    });
                                });
                            });*/
                            var imageLoader = document.getElementById('filePhoto');
                            imageLoader.addEventListener('change', handleImage, false);

                            function handleImage(e) {
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    $('.uploader img').attr('src',event.target.result);
                                }
                                reader.readAsDataURL(e.target.files[0]);
                            }
                        </script>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
</div>
</body>
