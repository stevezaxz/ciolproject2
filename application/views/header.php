<html>
    <head>
        <title><?php echo $title; ?></title>
        <?php echo link_tag("public/bootstrap/css/simplex.css", "stylesheet", "text/css"); ?> 
        <!-- <?php echo link_tag("public/bootstrap/css/superhero.css", "stylesheet", "text/css"); ?> -->		
        <script src="<?php echo base_url('public/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <style type="text/css">
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
            }

            .navbar .navbar-collapse {
                text-align: center;
            }


        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!--Group to be responsive for Handheld Devices-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo site_url("/");?>">Suppliers Netzerk</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class ="active"><a href="<?php echo site_url('Regc/index'); ?>">Register Now!</a></li>
                                <li><a href="<?php echo site_url('Loginc/login'); ?>">Login</a></li>
                                <li><a href="<?php echo site_url('Aboutc/test'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('Supplierc/supplierprofile'); ?>">Contact</a></li>
                            </ul>


                        </div>
                    </div>
                </nav>
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <!--                    <nav class="navbar navbar-default navbar-fixed-top ">
                                                    
                                            <div class="container-fluid">
                                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                                    <div class="navbar-header">    
                    
                                                        <a href="<?php echo site_url('/'); ?>" class="navbar-brand">Logo</a>
                                                    </div>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li class ="active"><a href="<?php echo site_url('Regc/index'); ?>">Register Now!</a></li>
                                                        <li><a href="<?php echo site_url('Loginc/login'); ?>">Login</a></li>
                                                        <li><a href="<?php echo site_url('Aboutc/test'); ?>">About Us</a></li>
                                                        <li><a href="<?php echo site_url('Supplierc/supplierprofile'); ?>">Contact</a></li>
                                                    </ul>
                                                </div>
                                                    
                                            </div>
                                        </nav>-->
                    <br>
                    <br>
                    <br>
                    <br>