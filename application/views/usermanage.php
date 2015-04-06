<div class="alert alert-info" role="alert" style="width:350px;" id="hidden">
    <!--<button  type="button" class="close" data-dismiss="alert" id="close">&times;</button>-->
    <center><strong id="result"></strong> </center>
</div>
<div id="page-wrapper">
    <div class="row">
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Company User Management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <form action="<?php echo site_url("Adminc/viewcompanydetails"); ?>" method="POST">
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
//                                                echo "<td>" . $value['company_trade_name'] . "</td>";
                                                if ($value['status'] == 'Active') {
                                                    echo "<td><span value='" . $value['company_id'] . "'  class='dblclickchanger label label-success'>Active</span><input type='hidden' value='" . $value['company_id'] . "' /></td>";
                                                } elseif ($value['status'] == 'Inactive') {
                                                    echo "<td><span value='" . $value['company_id'] . "'  class='dblclickchanger label label-danger'>Inactive</span><input type='hidden' value='" . $value['company_id'] . "' /></td>";
                                                }
//                                                echo "<td ><button class='approve btn btn-success btn-sm' value='" . $value['company_id'] . "' id='company_id' name='company_id' >View Company Profile</button></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        ?>
<!--                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.row -->
    <div class="row">

        <!-- /.col-lg-8 -->

        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<script type="text/javascript">
    $(".dblclickchanger").dblclick(function() {
        if ($(this).hasClass("label label-success")) {
            $(this).removeClass("label label-success").addClass("label label-danger");
            $(this).html("Inactive");
            $.post("<?php echo site_url("Adminc/editcompanystatus"); ?>", {company_id: $(this).next().val(), flag: 1}, function(info) {
                $("#result").html(info)
            });
            $("#hidden").fadeIn(3000);
            $("#hidden").fadeOut(3000);
        }
        else if ($(this).hasClass("label label-danger")) {
            $(this).removeClass("label label-danger").addClass("label label-success");
            $(this).html("Active");
            $.post("<?php echo site_url("Adminc/editcompanystatus"); ?>", {company_id: $(this).next().val(), flag: 2}, function(info) {
                $("#result").html(info)
            });
            $("#hidden").fadeIn(3000);
            $("#hidden").fadeOut(3000);
        }
    });
</script>
<style type="text/css">
    div#hidden.alert.alert-info{
        display:none;
    </style> 

