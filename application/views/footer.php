	<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/css/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  
  <script src="<?php echo base_url(); ?>assets/datatable/js/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/datatable/js/vfs_fonts.js"></script>
</body>
</html>

<script>
  $(document).ready(function(e){

    $('#country_data').change(function(e) {

      let country_id = $('#country_data').val();
      let data = {
        country_id : country_id
      }
      
      if (country_id != "") {
        $.ajax({
          url:'<?php echo base_url().'registration/fetch_state'?>',
          method:"POST",
          data: data,
          success:function(data)
          {
            let states = JSON.parse(data);
            // console.log(states);

            let output = "<option>Select State</option>";

            states.forEach(state => {
              // console.log(user);
               output +=
                        `
                          <option value = "${state.state_id}">${state.state_name}</option>
                        `
                      // $('#city_data').html('');
                // console.log(output);
            })

            document.getElementById('state_data').innerHTML = output;
            // $('#state_data').html(data);
          }
        });
      } else {
          $('#state_data').html('<option value="">Select State</option>');
          $('#city_data').html('<option value="">Select City</option>');
      }
    });

  // when we select our state
    $('#state_data').change(function(){
      let state_id = $('#state_data').val();
      let data = {
        state_id : state_id
      }
        if(state_id != '')
        {
          $.ajax({
                url:"<?php echo base_url(); ?>registration/fetch_city",
                method:"POST",
                data: data,
                success:function(data)
                {
                  let cities = JSON.parse(data);
                  // console.log(cities);

                  let output = "<option>Select City</option>";

                  cities.forEach(city => {
                    // console.log(user);
                     output +=
                              `
                                <option value = "${city.city_id}">${city.city_name}</option>
                              `
                            // $('#city_data').html('');
                      // console.log(output);
                  })

                  document.getElementById('city_data').innerHTML = output;
                          // console.log("hi");
                }
          });
        }
          else {
           
           $('#city_data').html('<option value="">Select City</option>');
          
        }
    });
    
    $('#ajaxInput').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    } );



    $('#getdata').click(function(e){
      e.preventDefault();

      $.ajax({
        type : 'GET',
        url : '<?php echo base_url().'registration/getdatabyajax'?>',
        success : function(data){ 
          let r = JSON.parse(data);
          // console.log(r);

          let output  = "";

          r.forEach(function(user,i){
            // console.log(user);
             output +=
                    `<tr>
                        <td>${++i}</td>
                        <td>${user.fname}</td>
                        <td>${user.lname}</td>
                        <td>${user.email}</td>
                        <td><img src="<?php echo base_url(); ?>assets/images/${user.img} ?>" alt="Smiley face" height="75" width="75"></td>
                     </tr>`
              // console.log(output);
          });
          document.getElementById('ajaxOutput').innerHTML = output;
        }
      });
    });
  });
</script>
