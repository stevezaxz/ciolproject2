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

