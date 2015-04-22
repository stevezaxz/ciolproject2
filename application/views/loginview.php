<!--<div class="container" style="margin-top:40px">-->
<!--    <div class="row">
       
        <div class="col-sm-6 col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo site_url('loginc/auth'); ?>" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account! <a href="#" onClick=""> Sign Up Here </a>
                </div>
            </div>
        </div>
    </div>

</body>
<style type="text/css">
    .panel-heading {
        padding: 5px 15px;
    }

    .panel-footer {
        padding: 1px 15px;
        color: #A0A0A0;
    }

    .profile-img {
        width: 96px;
        height: 96px;
        margin: 0 auto 10px;
        display: block;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
    }
</style>-->
<html>
    <head>

        <title>Login</title>
        <?php echo link_tag("public/bootstrap/css/simplex.css", "stylesheet", "text/css"); ?> 
        <?php // echo link_tag("public/bootstrap/css/ubuntu.css", "stylesheet", "text/css"); ?> 
        <!-- <?php echo link_tag("public/bootstrap/css/superhero.css", "stylesheet", "text/css"); ?> -->		
        <!--< ?php echo link_tag("public/bootstrap/css/flatly.css", "stylesheet", "text/css"); ?>-->
        <script src="<?php echo base_url('public/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 login ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-lock"></span> Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo site_url('Loginc/auth'); ?>">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">
                                        Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" placeholder="Username" required name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required name="password">
                                    </div>
                                </div>
                                <!--                                <div class="form-group">
                                                                    <div class="col-sm-offset-3 col-sm-9">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox"/>
                                                                                Remember me
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">
                                    </label>
                                    <div class="col-sm-9">
                                        <span style="color:RED;"><?php if (isset($incorrect_msg)) echo $incorrect_msg; ?></span>          </div>
                                </div>

                                <div class="form-group last">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Sign in</button>
                                        <!--                                        <button type="reset" class="btn btn-default btn-sm">
                                                                                    Reset</button>-->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--                        <div class="panel-footer">
                                                    Not Registred? <a href="http://www.jquery2dotnet.com">Register here</a></div>-->
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            body { 
                /*background: url(http://lorempixel.com/1920/1920/city/9/) no-repeat center center fixed;*/ 
                background: url(<?php // echo base_url('public/bundeswehr_military_history_museum-wallpaper-2048x1152.jpg');   ?>) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .panel-default {
                opacity: 0.9;
                margin-top:30px;
            }
            .form-group.last { margin-bottom:0px; }

            .login {
                margin-top:15%;
            }
        </style>
</html>