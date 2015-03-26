<div class="alert alert-info" role="alert" style="width:350px;" id="hidden">
    <!--<button  type="button" class="close" data-dismiss="alert" id="close">&times;</button>-->
    <center><strong id="result"></strong> </center>
</div>
<div id="page-wrapper">
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> List of Applicants
                    <div class="pull-right">

                    </div>
                </div>


                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-hover" id="dataTables-example">
                            <thead>
                                <tr>
<!--                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>-->

                                    <th>Company ID</th>
                                    <th>Registrants Name</th>
                                    <th>Username</th>
                                    <th>Trade Name</th>
                                    <th>TIN</th>
                                    <th>BIR Registration No.</th>
                                    <th>Actions</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($requestreg)) {
                                    foreach ($requestreg as $value) {
                                        echo "<tr>";
                                        echo "<td>" . $value['company_id'] . "</td>";
                                        echo "<td>" . $value['company_registrants_name'] . "</td>";
                                        echo "<td>" . $value['company_username'] . "</td>";
                                        echo "<td>" . $value['company_trade_name'] . "</td>";
                                        echo "<td>" . $value['company_tin'] . "</td>";
                                        echo "<td>" . $value['company_bir_registration_no'] . "</td>";
//                                        echo "<td>" . $value['company_website'] . "</td>";
                                        echo "<td ><button class='approve btn btn-success btn-sm' value='" . $value['company_id'] . "'><span class='glyphicon glyphicon-ok'></span></button></td>";
                                        echo "<td ><button class='disapproved btn btn-primary btn-sm' value='" . $value['company_id'] . "'><span class='glyphicon glyphicon-remove'></span></button></td>";
                                        echo "<td ><button href='#myModal' data-toggle='modal' class='details btn btn-success btn-sm' value='" . $value['company_id'] . "'>View Details</button></td>";
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
    <!-- /.row -->
    <div class="row">

        <!--<a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>-->

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog" >
                <div class="modal-content" style="width: 200%; left:-50%;" >
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> <button type="button" class="btn btn-default" data-dismiss="modal">View Company Full Profile</button></h4> 
                    </div>
                    <div class="" >

<!--                        <p>Do you want to save changes you made to document before closing?</p>
   <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>-->
                        <div class="col-md-3">
                            <form class="form-horizontal">
                                <!--<fieldset>-->

                                <!-- Form Name -->
                                <h4>  Company Details</h4>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_registrants_name">Registrants Name</label> <label id="company_registrants_name"  class="control-label" ></label> 

                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_username">Username</label>  <label id="company_username"  class="control-label" ></label> 
                                    <!--                                    <div class="col-md-6">
                                                                            <input disabled id="company_username" name="company_username" type="text" placeholder="" class="form-control input-md">
                                    
                                                                        </div>-->
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_trade_name">Trade Name</label>   <label id="company_trade_name"  class="control-label" ></label> 

                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_tin">TIN</label>   <label id="company_tin"  class="control-label" ></label> 
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_bir_registration_no">BIR Registration No</label>   <label id="company_bir_registration_no"  class="control-label" ></label> 
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Website</label>  <label id="company_website"  class="control-label" ></label> 
                                </div>

                                <!-- Textarea -->
                                <!--                                <div class="form-group">
                                                                    <label class="col-md-2 control-label" for="company_history">Company History</label>
                                                                    <div class="col-md-6">                     
                                                                        <textarea  cols="2" rows="5"  class="form-control" id="company_history" name="company_history"></textarea>
                                                                    </div>
                                                                </div>-->

                                <!--                                </fieldset>-->
                            </form>
                        </div>
                        <div class="col-md-5">
                            <form class="form-horizontal">
                                <!--<fieldset>-->

                                <!-- Form Name -->
                                <h4> Head Office Details</h4>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_registrants_name">Address</label> <label id="company_registrants_name"  class="control-label" ></label> 

                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_username">City/Municpality</label>  <label id="company_username"  class="control-label" ></label> 
                                    <!--                                    <div class="col-md-6">
                                                                            <input disabled id="company_username" name="company_username" type="text" placeholder="" class="form-control input-md">
                                    
                                                                        </div>-->
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_trade_name">Province</label>   <label id="company_trade_name"  class="control-label" ></label> 

                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_tin">Region</label>   <label id="company_tin"  class="control-label" ></label> 
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_bir_registration_no">Zip</label>   <label id="company_bir_registration_no"  class="control-label" ></label> 
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Telephone</label>  <label id="company_website"  class="control-label" ></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Email</label>  <label id="company_website"  class="control-label" ></label> 
                                </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="company_website">Fax</label>  <label id="company_website"  class="control-label" ></label> 
                                </div>

                                <!-- Textarea -->
                                <!--                                <div class="form-group">
                                                                    <label class="col-md-2 control-label" for="company_history">Company History</label>
                                                                    <div class="col-md-6">                     
                                                                        <textarea  cols="2" rows="5"  class="form-control" id="company_history" name="company_history"></textarea>
                                                                    </div>
                                                                </div>-->

                                <!--                                </fieldset>-->
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form class="form-horizontal">
                                <!--<fieldset>-->

                                <!-- Form Name -->
                                <h4>  Services</h4>

                                <!-- Text input-->
                                <div class="form-group">
                                    <!--<label class="col-md-6 control-label" for="company_registrants_name">Registrants Name</label> <label id="company_registrants_name"  class="control-label" ></label>--> 
                                    <div class="col-md-6 ">
                                        <ul>
                                            <li>1</li>
                                            <li>1</li>
                                            <li>1</li>
                                            <li>1</li>
                                        </ul>
                                    </div>

                                </div>


                            </form>
                        </div>
                        <div class="col-md-1">
                            <form class="form-horizontal">
                                <!--<fieldset>-->

                                <!-- Form Name -->
                                <h4>  Documents</h4>

                                <!-- Text input-->
                                <div class="form-group">

                                    <ul>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                    </ul>    
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <!--<button type="button" class="btn btn-primary">Close</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
</div>

<!-- /#page-wrapper -->
<script type="text/javascript">
    $(".approve").click(function(e) {


        $.post("<?php echo site_url("Adminc/approvecompany"); ?>", {company_id: $(this).val()}, function(res) {

            if (res == 'success') {
//                alert(1);
                $("#result").text("Company registration details approved");
                $("#hidden").fadeIn(5000);
                $("#hidden").fadeOut(5000).delay(800, function() {
                    location.reload();
                });


            }
            else {

            }
        });

    });
    $(".disapproved").click(function() {
        //alert($(this).val());
        $.post("<?php echo site_url("Adminc/disapprovecompany"); ?>", {company_id: $(this).val()}, function(res) {

            if (res == 'success') {

                $("#result").text("Company registration details disapproved");
                $("#hidden").fadeIn(5000);
                $("#hidden").fadeOut(5000).delay(800, function() {
                    location.reload();
                });


            }
            else {

            }
        });
    });
    $(".details").click(function() {
        $.post("<?php echo site_url("Adminc/getcompanydetails"); ?>", {company_id: $(this).val()}, function(json) {
            jsonstring = jQuery.parseJSON(json);
            $("#company_registrants_name").text(jsonstring.company_registrants_name);
            $("#company_username").text(jsonstring.company_username);
            $("#company_trade_name").text(jsonstring.company_trade_name);
            $("#company_tin").text(jsonstring.company_tin);
            $("#company_bir_registration_no").text(jsonstring.company_bir_registration_no);
            $("#company_website").text(jsonstring.company_website);
            $("#company_history").val(jsonstring.company_history);
        });
    });

</script>

<style type="text/css">
    div#hidden.alert.alert-info{
        display:none;
    </style> 

