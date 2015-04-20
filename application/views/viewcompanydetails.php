<div class="alert alert-info" role="alert" style="width:350px;" id="hidden">
    <!--<button  type="button" class="close" data-dismiss="alert" id="close">&times;</button>-->
    <center><strong id="result"></strong> </center>
</div>
<div id="page-wrapper">
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Company Profile</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">

        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
            <li><a href="#profile" data-toggle="tab">Branches</a></li>
            <li><a href="#photos" data-toggle="tab">Photos</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">
                <div class="row">
                    <div class="col-md-5">
                        <form class="form-horizontal">
                            <fieldset>
                                <h4>  Company Details</h4>
                                <div class="form-group ">
                                    <label class="col-md-6 control-label" for="company_registrants_name">Registrants Name:</label> <label id="company_registrants_name"  class="control-label" ><?php echo $companydetails['company_registrants_name']; ?> </label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_username">Username:</label>  <label id="company_username"  class="control-label" ><?php echo $companydetails['company_username']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_trade_name">Trade Name:</label>   <label id="company_trade_name"  class="control-label" ><?php echo $companydetails['company_trade_name']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_tin">TIN:</label>   <label id="company_tin"  class="control-label" ><?php echo $companydetails['company_tin']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_bir_registration_no">BIR Registration No:</label>   <label id="company_bir_registration_no"  class="control-label" ><?php echo $companydetails['company_bir_registration_no']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Website:</label>  <label id="company_website"  class="control-label" ><?php echo $companydetails['company_website']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Documents:</label>  
                                    <?php
                                    if (isset($upload_details)) {
                                        $docs = array();
                                        foreach ($upload_details as $uploads) {
                                            $docs = explode("-", $uploads);
                                            echo "<label class='col-md-9 control-label' ><a href=" . base_url($docs[1]) . " >" . $docs[0] . "</a></label>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Other Services:</label>  

                                    <?php
                                    if (isset($services)) {
                                        foreach ($services as $company_services) {
                                            echo "  <label class='col-md-9 control-label' >" . $company_services['description'] . "</label> ";
                                        }
                                    }
                                    ?>
                                </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <form class="form-horizontal">
                            <fieldset>
                                <h4> Head Office</h4>
                                <div class="form-group ">
                                    <label class="col-md-6 control-label" >Address:</label> <label  class="control-label" ><?php if (isset($head_office['head_office_address'])) echo $head_office['head_office_address']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >City/Municipality:</label>  <label  class="control-label" ><?php if (isset($head_office['head_office_city_municipality'])) echo $head_office['head_office_city_municipality']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >Province:</label>   <label  class="control-label" ><?php if (isset($head_office['head_office_province'])) echo $head_office['head_office_province']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >Region:</label>   <label   class="control-label" ><?php if (isset($head_office['head_office_region'])) echo $head_office['head_office_region']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >ZIP:</label>   <label   class="control-label" ><?php if (isset($head_office['head_office_zip'])) echo $head_office['head_office_zip']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >Telephone:</label>  <label   class="control-label" ><?php if (isset($head_office['head_office_telephone'])) echo $head_office['head_office_telephone']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >Fax:</label>  <label   class="control-label" ><?php if (isset($head_office['head_office_fax'])) echo $head_office['head_office_fax']; ?></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" >Email:</label>  <label   class="control-label" ><?php if (isset($head_office['head_office_email'])) echo $head_office['head_office_email']; ?></label> 
                                </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <h4>Contact Persons</h4>
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Telephone</th>
                                    <th>Fax</th>
                                    <th>Email</th>
                                    <th>Mobile 1</th>
                                    <th>Mobile 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($contact_person)) {
                                    foreach ($contact_person as $company_contact_person) {
                                        echo "<tr>";
                                        echo "<td>" . $company_contact_person['contact_person_name'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_department'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_telephone'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_fax'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_email'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_mobile1'] . "</td>";
                                        echo "<td>" . $company_contact_person['contact_person_mobile2'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr>";
                                    echo "<td><h4>No Data Found</h4></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <h4>Company Category and Sub Category</h4>

                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($category)) {
                                    foreach ($category as $company_category) {
                                        echo "<tr>";
                                        echo "<td>" . $company_category['category_name'] . "</td>";
                                        echo "<td>" . $company_category['category_sub_cat'] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr>";
                                    echo "<td><h4>No Data Found</h4></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile">
                <?php
                $num = 1;
                if (isset($branches)) {
                    foreach ($branches as $company_branches) {
                        echo " <div class='col-md-5'>
                    <form class='form-horizontal'>
                        <fieldset>
                            <h4>  Branch " . $num . "</h4>
                            <div class='form-group '>
                                <label class='col-md-6 control-label' >Contact Person:</label> <label  class='control-label' >" . $company_branches['branches_person'] . "</label> 
                            </div>
                            <div class='form-group'>
                                <label class='col-md-6 control-label' >Address:</label>  <label   class='control-label' >" . $company_branches['branches_address'] . "</label> 
                            </div>
                            <div class='form-group'>
                                <label class='col-md-6 control-label' >Province:</label>   <label class='control-label' >" . $company_branches['branches_province'] . "</label> 
                            </div>
                            <div class='form-group'>
                                <label class='col-md-6 control-label' >Telephone:</label>   <label class='control-label' >" . $company_branches['branches_telephone'] . "</label> 
                            </div>
                            <div class='form-group'>
                                <label class='col-md-6 control-label' >Fax:</label>   <label   class='control-label' >" . $company_branches['branches_fax'] . "</label> 
                            </div>
                            <div class='form-group'>
                                <label class='col-md-6 control-label' >Email:</label>  <label class='control-label' >" . $company_branches['branches_email'] . "</label> 
                            </div>
                        </fieldset>
                    </form>
                </div>";
                        $num++;
                    }
                } else {
                    echo "<h4>No Data Found</h4>";
                }
                ?>
            </div>
            <div class="tab-pane fade" id="photos">
                <div class="panel-body">
                    <label class="col-md-2" for="textinput"> Select a Photo:</label>
                    <div class="col-md-10">
                        <form action="<?php echo site_url("Adminc/uploadphotos"); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="company_id_upload" name="company_id_upload" value="<?php echo $companydetails['company_id']; ?>" />
                            <input type="hidden" id="company_id_name" name="company_id_name" value="<?php echo $companydetails['company_registrants_name']; ?>" />
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
                            <h1 class="page-header"> Gallery</h1>
                        </div>

                        <?php
                        if (isset($photos)) {
                            foreach ($photos as $value) {
                                $imgarr = explode("/", $value['photos_full_path']);
                                $path = "photos/" . $imgarr[5] . "/" . $imgarr[6];
                                if (file_exists($path)) {
                                    echo " <div class='col-lg-3 col-md-4 col-xs-6 thumb'>
                                            <a class='thumbnail' href='" . base_url($path) . "' data-lightbox='photos' >
                                              <img value='" . $value['photos_id'] . "' width='400' height='300' class='img-responsive' src='" . base_url($path) . "' data-lightbox='photos' >
                                            </a><button button value='" . $value['photos_id'] . "'href='#myModaldel' data-toggle='modal' class='clickdelete'>Delete</button ><button value='" . $value['photos_id'] . "'href='#myModal' data-toggle='modal' class='clickedit'>Edit</button>
                                           </div>";
                                }
                            }
                        } else {
                            echo "<h4>No data found</h4>";
                        }
                        ?>
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
                                        <br/>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ads_title">Title</label>  
                                            <div class="col-md-4">
                                                <input id="photos_title" name="photos_title" type="text" placeholder="" class="form-control input-md">

                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ads_description">Description</label>
                                            <div class="col-md-4">                     
                                                <textarea class="form-control" id="photos_description" name="photos_description"></textarea>
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
                <div class="row">
                    <!--<a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>-->
                    <!-- Modal HTML -->
                    <div id="myModaldel" class="modal fade">
                        <div class="modal-dialog" >
                            <div class="modal-content"  >
                                <div class="modal-body" >
                                    <h4>Are you sure to delete this photo?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" id="deletephoto" data-dismiss="modal">Delete</button>
                                    <button type="button" class="btn btn-primary"  data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">

</script>

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
    <script type="text/javascript">
        var photo_id = null;
        $(".clickedit").click(function() {
            photos_id = $(this).attr("value");
            $.post("<?php echo site_url("Adminc/getphotosdetails"); ?>", {photos_id: photos_id}, function(json) {
                jsonstring = jQuery.parseJSON(json);
                $("#photos_title").val(jsonstring.photos_title);
                $("#photos_description").val(jsonstring.photos_description);

            });
        });
        $("#save").click(function() {

            $.post("<?php echo site_url("Adminc/setphotos"); ?>", {photos_id: photos_id, photos_title: $("#photos_title").val(), photos_description: $("#photos_description").val()}, function(res) {
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
    <script type="text/javascript">
        var photo_id_delete = null;
        $(".clickdelete").click(function() {
            photo_id_delete = $(this).attr("value");
        });

        $("#deletephoto").click(function() {
            $.post("<?php echo site_url("Adminc/deletephoto"); ?>", {photo_id_delete: photo_id_delete}, function(res) {
//                alert(res);
                if (res === "success") {
                    $("#result").text("Image removed ");
                    $("#hidden").fadeIn(2000);
                    $("#hidden").fadeOut(2000).delay(800, function() {
                        location.reload();
                    });
                }
                else if (res === "error") {
                    $("#result").text("Image details could not be saved");
                    $("#hidden").fadeIn(5000);
                    $("#hidden").fadeOut(5000);
                }
            });
        });
    </script>


    <!--lightbox js-->

    <script src="<?php echo base_url("public/universal/js/lightbox.js"); ?>"></script>

</body>
</html>