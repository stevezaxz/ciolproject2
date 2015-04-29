<div class="alert alert-info" role="alert" style="width:350px;" id="hidden">
    <button  type="button" class="close" data-dismiss="alert" id="close"></button>
    <center><strong id="result"></strong> </center>
</div>
<div id="page-wrapper">
    <div class="row">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Advertisement</h1>
            </div>

        </div>
        <!--OLD ADVERTISEMENT CODE-->
        <!--        <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Advertisement Photos
                                <div class="pull-right">
                                </div>
                            </div>
                            <div class="panel-body">
                                <label class="col-md-2" for="textinput"> Select a Photo:</label>
                                <div class="col-md-10">
                                    <form action="<?php echo site_url("Adminc/uploadads"); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse&hellip; <input  type="file"   name="uploadads1" id="uploadads">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
        
                                        <br/>
                                        <button type="submit" class="btn btn-primary btn-sm " id="upload">Upload</button>
                                    </form>
                                </div>
                                <br/>
        
                                <div class="col-md-12">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">Thumbnail Gallery</h1>
                                    </div>
        
                                                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                                                    <a class="thumbnail" href="#">
                                                                        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
                                                                    </a>
                                                                </div>
        <?php
//                            if (isset($ads)) {
//
//                                foreach ($ads as $value) {
//                                    $imgarr = explode("/", $value['ads_full_path']);
//                                    $path = $imgarr[4] . "/" . $imgarr[5];
//                                    echo " <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
//                                            <a class='thumbnail' href='#'>
//                                              <img value='" . $value['ads_id'] . "'href='#myModal' data-toggle='modal' width='400' height='300' class='img-responsive clickimg' src='" . base_url($path) . "' >
//                                            </a>
//                                           </div>";
//                                }
//                            } else {
//                                echo "<h4>No data found</h4>";
//                            }
        ?>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>-->
        <div class="row">
            <!--<form action="" method="">-->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> List of Company
                        <div class="pull-right">

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Company ID</th>
                                        <th>Trade Name</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($companylist)) {
                                        foreach ($companylist as $value) {
                                            echo "<tr>";
                                            echo "<td>" . $value['company_id'] . "</td>";
                                            echo "<td>" . $value['company_trade_name'] . "</td>";
                                            echo "<td ><button class=' btn btn-success btn-sm' value='" . $value['company_id'] . "' id='company_id' name='company_id' >Add</button></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
            <!--</form>-->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> List of Company
                    <div class="pull-right">

                    </div>
                </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Company ID</th>
                                    <th>Trade Name</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($companylist)) {
                                    foreach ($companylist as $value) {
                                        echo "<tr>";
                                        echo "<td>" . $value['company_id'] . "</td>";
                                        echo "<td>" . $value['company_trade_name'] . "</td>";
                                        echo "<td ><button class=' btn btn-success btn-sm' value='" . $value['company_id'] . "' id='company_id' name='company_id' >Add</button></td>";
                                        echo "</tr>";
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--<a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>-->
        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog" >
                <div class="modal-content"  >
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Description </h4> 
                    </div>
                    <div class="" >
                        <!--<div class="col-md-3">-->
                        <form class="form-horizontal">
                            <!-- Form Name -->
                            <!--<legend>Form Name</legend>-->
                            <br/>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ads_title">Title</label>  
                                <div class="col-md-4">
                                    <input id="ads_title" name="ads_title" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ads_description">Description</label>
                                <div class="col-md-4">                     
                                    <textarea class="form-control" id="ads_description" name="ads_description"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="button" class="btn btn-primary" id="save"  data-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
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
            /*padding-top: 70px;  Required padding for .navbar-fixed-top. Change if height of navigation changes. */
        }

        .thumb {
            margin-bottom: 30px;
        }

        footer {
            margin: 50px 0;
        }
    </style>

    <script type="text/javascript">
        $(document).on('change', '.btn-file :file', function () {
            var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
        });
        $(document).ready(function () {
            $('.btn-file :file').on('fileselect', function (event, numFiles, label) {

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
    <script type="text/javascript">
        var ads_id = null;
        $(".clickimg").click(function () {
            ads_id = $(this).attr("value");
            $.post("<?php echo site_url("Adminc/getadsdetail"); ?>", {ads_id: ads_id}, function (json) {
                jsonstring = jQuery.parseJSON(json);
                $("#ads_title").val(jsonstring.ads_title);
                $("#ads_description").val(jsonstring.ads_description);

            });
        });
        $("#save").click(function () {

            $.post("<?php echo site_url("Adminc/setads"); ?>", {ads_id: ads_id, ads_title: $("#ads_title").val(), ads_description: $("#ads_description").val()}, function (res) {
                if (res === "success") {
                    $("#result").text("Image details saved");
                    $("#hidden").fadeIn(5000);
                    $("#hidden").fadeOut(5000);
                }
                else if (res === "error") {
                    $("#result").text("Image details could not be saved");
                    $("#hidden").fadeIn(5000);
                    $("#hidden").fadeOut(5000);
                }
            });

        });
    </script>
</body>
</html>
