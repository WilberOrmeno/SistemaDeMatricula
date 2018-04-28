<?php include('header.php'); ?>
<?php
$con = conectar()?>

    <body >
		<?php include('navbar.php')?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>

                    <div class="row-fluid">

                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">STATISTICS</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">


                                <div class="span3">
                                    <div class="chart" data-percent=""></div>
                                    <div class="chart-bottom-heading"><strong>STUDENTS</strong>

                                    </div>
                                </div>



                                <div class="span3">
                                    <div class="chart" data-percent=""></div>
                                    <div class="chart-bottom-heading"><strong>CLASSES</strong>

                                    </div>
                                </div>


                                <div class="span3">
                                    <div class="chart" data-percent=""></div>
                                    <div class="chart-bottom-heading"><strong>NURSERY STUDENTS</strong>

                                    </div>
                                </div>


                                <div class="span3">
                                    <div class="chart" data-percent=""></div>
                                    <div class="chart-bottom-heading"><strong>PRIMARY STUDENTS</strong>

                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- /block -->

                    </div>
                    </div>

                </div>
            </div>

        </div>
	<?php include('script.php'); ?>
    </body>
</html>