
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
                                        echo "<td ><button class='deny btn btn-primary btn-sm' value='" . $value['company_id'] . "'><span class='glyphicon glyphicon-remove'></span></button></td>";
                                        echo "<td ><button class='details btn btn-success btn-sm' value='" . $value['company_id'] . "'>View Details</button></td>";
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

        <!-- /.col-lg-8 -->

        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<script type="text/javascript">
    $(".approve").click(function() {
        alert($(this).val());
    });
    $(".deny").click(function() {
        alert($(this).val());
    });
    $(".details").click(function() {
        alert($(this).val());
    });

</script>
