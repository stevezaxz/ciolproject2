<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
            <div style="color: white;
                 padding: 15px 50px 5px 50px;
                 float: right;
                 font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?php echo base_url("public/assets/img/find_user.png"); ?>" class="user-image img-responsive"/>
                    </li>


                    <li>
                        <a class="active-menu"  href="<?php echo site_url("Adminc/index"); ?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url("Adminc/requestreg"); ?>"><i class="fa fa-desktop fa-3x"></i> Request of Registration</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url("Adminc/requestup"); ?>"><i class="fa fa-qrcode fa-3x"></i> Request of Update</a>
                    </li>
                    <li  >
                        <a   href="<?php echo site_url("Adminc/usermanage"); ?>"><i class="fa fa-bar-chart-o fa-3x"></i> User Management</a>
                    </li>	
                    <li  >
                        <a  href="<?php echo site_url("Adminc/featuredsupplier"); ?>"><i class="fa fa-table fa-3x"></i> Featured Supplier</a>
                    </li>
                    <!--                    <li  >
                                            <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                                        </li>				
                                        <li  >
                                            <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                                        </li>	
                                        <li  >
                                            <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                                        </li>	
                    
                                        <li>
                                            <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="#">Second Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Second Level Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                                    <ul class="nav nav-third-level">
                                                        <li>
                                                            <a href="#">Third Level Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Third Level Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Third Level Link</a>
                                                        </li>
                    
                                                    </ul>
                    
                                                </li>
                                            </ul>
                                        </li>  
                                        <li  >
                                            <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                                        </li>	-->
                </ul>

            </div>

        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr />

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Responsive Table Example
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>User No.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>100090</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>100090</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>100090</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>100090</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                                <td>100090</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                                <td>100090</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->