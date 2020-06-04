
	<div class="footer" style="text-align: center;">
        <div class="container">
            <b class="copyright">&copy; 2020 Administrator - mysite.com </b>All rights reserved.
        </div>
    </div>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
          <!-- <script src="<?php echo base_url(); ?>assets/datatable/js/jquery-3.3.1.js"></script> -->
          <!-- <script src="<?php echo base_url(); ?>assets/datatable/js/jquery.dataTables.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/dataTables.buttons.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.flash.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.html5.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.print.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/jszip.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/pdfmake.min.js"></script>
          <script src="<?php echo base_url(); ?>assets/datatable/js/vfs_fonts.js"></script> -->

        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets_dashboard/scripts/common.js" type="text/javascript"></script>
		<!-- <script type="text/javascript" src="../wp-content/themes/piha/js/top-bar.js" ></script> -->
		<!-- <script type="text/javascript" src="../wp-content/themes/piha/js/bsa-ads.js" ></script> -->
<script type="text/javascript">
    // $(document).ready(function () {
        // console.log(2);

      function uStatus(id,status) {
        // console.log(id);
        let data = {
          id : id,
          status : status
        }
        if (confirm('Are you sure you wanna change the current status of the country.')) {
          $.ajax({
              type : 'POST',
              url : '<?php echo base_url().'admin/admin_login/country_status'?>',
              data : data,
              success : function () {
                console.log(1);
                $("#mytable").load ( window.location + " #mytable ");
                  alert("Country status updated successfully.");
              }
          });
        }
      }

      function stateStatus(id,status) {
        let data = {
          id : id ,
          status : status
        }

        if (confirm('Are you sure you wanna change the current status of the state.')) {
          $.ajax({
            type : 'POST',
            url : '<?php echo base_url().'admin/admin_login/state_status' ?>',
            data : data,
            success : function () {
                $("#mytable").load ( window.location + " #mytable ");
                  alert("State status updated successfully.");
            }
          });
        }
      }

      function cityStatus(id,status) {
        let data = {
          id : id ,
          status : status
        }

        if (confirm('Are you sure you wanna change the current status of the city.')) {
          $.ajax({
            type : 'POST',
            url : '<?php echo base_url().'admin/admin_login/city_status' ?>',
            data : data,
            success : function () {
                $("#mytable").load ( window.location + " #mytable ");
                alert("City status updated successfully.");
            }
          });
        }
      }
       // $('#ustatus').click(function () {

        // let data ={
        //     country_id : country_id,
        //     status : status
        // }
        //     $.ajax({
        //         type : 'POST',
        //         url : '<?php echo base_url().'admin/admin_login/user_status'?>',
        //         data : data,
        //         success : function () {
                    // console.log("hi");
            
                // }
            // });
       // });
    // });
</script>
</body>
</html>
