<div class="panel panel-default">
    <div class="panel-body">
        <!--<label class="col-lg-2">Category</label>-->
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        for ($x = 0; $x < count($photos); $x++) {
                            if ($x == 0) {
                                echo "<li data-target = '#myCarousel' data-slide-to = '$x' class = 'active'></li>";
                            } else {
                                echo "<li data-target = '#myCarousel' data-slide-to = '$x'></li>";
                            }
                        }
                        ?>
                        <!--                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                        <li data-target="#myCarousel" data-slide-to="3"></li>-->
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $x = 0;
                        foreach ($photos as $carouselphotos) {
                            $array = explode("/", $carouselphotos['photos_full_path']);
                            $photo_full_path = base_url() . $array[4] . "/" . $array[5] . "/" . $array[6];
                            if ($x == 0) {
                                echo " <div class='item active'>
                                     <img src='$photo_full_path'  />
                                         <div class='carousel-caption'>
                                            <h3>" . $carouselphotos['photos_title'] . "</h3>
                                           <p>" . $carouselphotos['photos_description'] . "</p>
                                          </div>
                                    </div>";
                                $x++;
                            } else {
                                echo "<div class = 'item'>
                                          <img src='$photo_full_path' />
                                        <div class = 'carousel-caption'>
                                             <h3>" . $carouselphotos['photos_title'] . "</h3>
                                           <p>" . $carouselphotos['photos_description'] . "</p>
                                        </div>
                                    </div>";
                                $x++;
                            }
                        }
                        ?>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
</div>  <!--END PANEL DEFAULT--> 

<div class="row">

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
        <li><a href="#profile" data-toggle="tab">Branches</a></li>

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
                    <table class="table table-hover table-responsive" style="font-size: 13">
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

                    <table class="table table-hover table-responsive" style="font-size: 13">
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
            <div class="row">
                <div class="col-md-12  ">
                    <!--<div class="well well-sm">-->
                    <div class="form-horizontal ">
                        <fieldset>
                            <!--<legend class="text-center">Contact us</legend>-->
                            <h4>Contact us</h4> 

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Name</label>
                                <div class="col-md-10">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Your E-mail</label>
                                <div class="col-md-10">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="message">Your message</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-2"></div>

                                <div class="col-md-5 text-right">
                                    <button type="submit" class="btn btn-primary " href='#myModalsendmessage' data-toggle='modal' id="submitmessage" >Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!--MODAL FOR MESSAGE SENT-->
        <div class="row">
            <!--<a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>-->
            <!-- Modal HTML -->
            <div id="myModalsendmessage" class="modal fade">
                <div class="modal-dialog" >
                    <div class="modal-content"  >
                        <div class="modal-body" >
                            <!--<h4>Are you sure to delete this photo?</h4>-->
                            <div id="loadingmessage" style="display:none">
                                <center><img id="loadingimage" src="<?php echo base_url("public/universal/loading_spinner.gif"); ?>" width="50px" height="50px " /></center> 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="company_id" value="<?php echo $companydetails['company_id']; ?>" />
                            <input type="hidden" id="company_email" value="<?php echo $head_office['head_office_email']; ?>" />
                            <!--<button type="button" class="btn btn-default" id="deletephoto" data-dismiss="modal">Delete</button>-->
                            <button id="modal_close" type="button" class="btn btn-primary"  data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-2"></div>

<!--       <div id="footer">
        <div class="container">
            <p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
        </div>
    </div>-->
</body>
<script type="text/javascript">
    $("#submitmessage").click(function () {
        $("#loadingmessage").show();
        $.ajax({
            url: "<?php echo site_url("Supplierc/sendmessage"); ?>",
            type: "POST",
            data: {
                company_id: $("#company_id").val(),
                name: $("#name").val(),
                email: $("#email").val(),
                message: $("#message").val(),
                company_email: $("#company_email").val()
            },
            success: function (res) {
                if (res == "success") {
                    $("#loadingimage").hide();
                    $("#loadingmessage").html("<center><h4>Thank you! Your Message has been sent!</h4></center>");
                    $("#name").val("");
                    $("#email").val("");
                    $("#message").val("");
                }
                else if (res == "error") {
                    $("#loadingimage").hide();
                    $("#loadingmessage").html("<center><h4>We cannot send your message right now, please try again later</h4></center>");
                }
            }
        });
    });
    $("#myModalsendmessage").on("hidden.bs.modal", function (e) {
        $("#loadingmessage").html(' <center><img id="loadingimage" src="<?php echo base_url("public/universal/loading_spinner.gif"); ?>" width="50px" height="50px " /></center> ');
        $("#loadingimage").show();

    });
</script>
</html>