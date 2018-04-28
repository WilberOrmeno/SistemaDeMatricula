<?php include('header.php'); ?>
  <body id="login">
    <div class="container" style="margin-top:120px;">
	<?php include('navbar_index.php'); ?>
    <form id="login_form" class="form-signin" method="post" style="color: lightgrey">
        <center>
            <b><h1 class="form-signin-heading" style="color: red;">CETAPSI</h1></b>

            <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Usuario" required>
            <input type="password" class="input-block-level" id="password" name="password" placeholder="Contraseña" required>
            <button data-placement="top" title="Click para acceder" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Acceder</button>
            <script type="text/javascript">
                </center><script type="text/javascript">
            $(document).ready(function(){
                $('#login1').tooltip('show');
                $('#login1').tooltip('hide');
            });
        </script>
	</form>
        <script>
            jQuery(document).ready(function(){
            jQuery("#login_form").submit(function(e){
                    e.preventDefault();
                    var formData = jQuery(this).serialize();
                    $.ajax({
                        type: "POST",
                        url: "login.php",

                        data: formData,
                        success: function(html){
                         if (html == 'true'){
                            $.jGrowl("Cargando, espere por favor......", { sticky: true });
                            $.jGrowl("Welcome to Delaroy Studios School System", { header: 'Access Granted' });
                        var delay = 1000;
                            setTimeout(function(){ window.location = 'dashboard.php'  }, delay);
                        }else
                        {
                        $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                        }
                        }
                    });
                    return false;
                });
            });
        </script>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>