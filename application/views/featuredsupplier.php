<!--<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>
</div>-->

<div class="alert alert-info" role="alert" style="width:350px;" id="hidden">
    <!--<button  type="button" class="close" data-dismiss="alert" id="close">&times;</button>-->
    <center><strong id="result"></strong> </center>
</div>
<div id="page-wrapper">
    <div class="row">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Advertisement</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <!--<form action="<?php // echo site_url("Adminc/uploadads");   ?>" method="POST">-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Advertisement Photos
                        <div class="pull-right">

                        </div>
                    </div>
                    <div class="panel-body">
                        <label class="col-md-2" for="textinput"> Select a Photo:</label>
                        <div class="col-md-5">
                            <form action="<?php echo site_url("Adminc/uploadads"); ?>" method="POST">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse&hellip; <input  type="file"   name="uploadads" id="uploadads">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <!--<span id=""> Select Photo:</span>-->    
                                <br/>
                                <button class="btn btn-primary btn-sm " id="upload">Upload</button>
                            </form>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-12">
                                <h1 class="page-header">Thumbnail Gallery</h1>
                            </div>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                <a class="thumbnail" href="#">
                                    <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                </a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            <!--</form>-->
        </div>
    </div>
    <div class="row">


    </div>
</div>
<style type="text/css">
    div#hidden.alert.alert-info{
        display:none;
    </style> 
    <style type="text/css">
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            background: red;
            cursor: inherit;
            display: block;
        }
        input[readonly] {
            background-color: white !important;
            cursor: text !important;
        }

        body {
            padding-top: 70px; /* Required padding for .navbar-fixed-top. Change if height of navigation changes. */
        }

        .thumb {
            margin-bottom: 30px;
        }

        footer {
            margin: 50px 0;
        }
    </style>

    <script type="text/javascript">
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });
        $(document).ready(function() {
            $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;
                if (input.length) {
                    input.val(log);
                } else {
                    if (log)
                        alert(log);
                }

            });
        });
    </script>

</body>
</html>
