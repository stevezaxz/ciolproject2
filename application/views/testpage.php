
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  
<?php echo link_tag("public/bootstrap/css/simplex.css", "stylesheet", "text/css"); ?>
        <script src="<?php echo base_url('public/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script><!--


     HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries 
    [if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]
  </head>

  <body>

     Wrap all page content here 
    <div id="wrap">

       Fixed navbar 
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>/.nav-collapse 
        </div>
      </div>

       Begin page content 
      <div class="container">
        <div class="page-header">
          <h1>Sticky footer with fixed navbar</h1>
        </div>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added within <code>#wrap</code> with <code>padding-top: 60px;</code> on the <code>.container</code>.</p>
        <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      </div>
    </div>


     Bootstrap core JavaScript
    ================================================== 
     Placed at the end of the document so the pages load faster 
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>-->


<form class="form-horizontal" action='' method="POST">
    <fieldset>
        <div id="legend">
            <legend class="">Register</legend>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                <p class="help-block">Please provide your E-mail</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                <p class="help-block">Password should be at least 4 characters</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
            <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                <p class="help-block">Please confirm password</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Register</button>
            </div>
        </div>
    </fieldset>
</form>