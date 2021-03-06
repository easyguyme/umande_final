<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php include('sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DASHBOARD | ADMIN PANEL
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">
            <div class="row">

                <div class="box box-danger">
                    <div class="box-header with-border">

                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit Projects</a></span>
                                <span class="info-box-number"> <a  href="lin_project.php">click me</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit Events and Activities</a></span>
                                <span class="info-box-number"> <a  href="_event.php">click me</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit Plans and Budget</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#">click me</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->


                </div>

                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3> Ward & Women Profiles</h3>

                            <p>To edit Ward & Women Profiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-camera"></i>
                        </div>
                        <a href="#"  class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Area Profile Table</h3>

                            <p>To edit Area Profile Table</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="#pdMakina" data-toggle="modal" data-target="#pdMakina" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red-gradient">
                        <div class="inner">
                            <h3>Gallery</h3>

                            <p>To upload pictures on the gallery</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-camera"></i>
                        </div>
                        <a href="update_magallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!---->
                <!-- ./col -->
            </div>
            <!--            second row-->


            <!--            social media-->




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php include('hscripts.php'); ?>
<?php include('modal_delete.php'); ?>

<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>
<?php include('logo_modal.php'); ?>
<?php include('modals.php'); ?>
<style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
