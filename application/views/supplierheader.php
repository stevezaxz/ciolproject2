<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Suppliers Netzwerk</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/bootstrap/dist/css/bootstrap.css"); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.css"); ?>" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"); ?>" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/datatables-responsive/css/dataTables.responsive.css"); ?>" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="<?php echo base_url("public/startbootstrap/dist/css/timeline.css"); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url("public/startbootstrap/dist/css/sb-admin-2.css"); ?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/morrisjs/morris.css"); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url("public/startbootstrap/bower_components/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url("public/jquery.min.js"); ?>"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <style type="text/css">
        div#hidden.alert.alert-info{
            width:250px;
            height: 45px;
            position: fixed;
            right: 10px;
            top: 70px;
            float: right;
            z-index:100;
        }
        a {
            color:black;
        }
    </style> 
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url("Adminc/index"); ?>">Suppliers Netzwerk</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url("Loginc/logout"); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?php echo site_url("Adminc/index"); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Adminc/requestreg"); ?>"><i class="fa fa-dashboard fa-fw"></i> Upload Image for Carousel</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Adminc/requestup"); ?>"><i class="fa fa-dashboard fa-fw"></i> Update Information</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Adminc/viewcompanyprofile"); ?>"><i class="fa fa-dashboard fa-fw"></i> Change Pictures</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("Adminc/usermanage"); ?>"><i class="fa fa-dashboard fa-fw"></i> Messages</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>