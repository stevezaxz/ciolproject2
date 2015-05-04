</div>
<!-- /#wrapper -->


<!-- jQuery -->


<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("public/startbootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url("public/startbootstrap/bower_components/metisMenu/dist/metisMenu.min.js"); ?>"></script>

<!-- Morris Charts JavaScript -->
<!--<script src="<?php echo base_url("public/startbootstrap/bower_components/raphael/raphael-min.js"); ?>"></script>
<script src="<?php echo base_url("public/startbootstrap/bower_components/morrisjs/morris.min.js"); ?>"></script>
<script src="../js/morris-data.js"></script>-->
<!-- DataTables JavaScript -->
<script src="<?php echo base_url("public/startbootstrap/bower_components/DataTables/media/js/jquery.dataTables.min.js"); ?>"></script>
<script src="<?php echo base_url("public/startbootstrap/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"); ?>"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url("public/startbootstrap/dist/js/sb-admin-2.js"); ?>"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
      
    });
    $(document).ready(function() {
        $('#dataTables-example1').DataTable({
            responsive: true
        });
      
    });
</script>
</body>

</html>