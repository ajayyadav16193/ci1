<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Codeigniter Project</title>
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatable/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatable/css/jquery.dataTables.min.css">
  </head>

  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4"></div>
            
            <div class="col-sm-4 offset-md-1 py-4">
              <ul class="list-unstyled">
                <!-- <li><a href="<?php echo base_url(); ?>registration/getdatabyajax" class="text-white">See All Data Using Ajax</a></li> -->
                <!-- <input type="button" id="gettabdata" class="btn btn-link" value ="Get Table Data" style=" color:#fff; padding: 0px 0px 0px 0px;"><br> -->
                <!-- <li><a href="<?php echo base_url(); ?>registration/gettabdata" class="text-white">Get Table Data</a></li> -->

                <li><a href="<?php echo base_url(); ?>registration/startajax" class="text-white">Get Ajax Data</a></li>
                 

                <li><a href="<?php echo base_url(); ?>registration/getAllData" class="text-white">See All Data</a></li>
                <?php 
                    if ($this->session->has_userdata('profile_data')) {
                      // echo "signout";
                ?>
                      <li><a href="<?php echo base_url(); ?>registration/signout" class="text-white">Signout</a></li>
                
                <?php
                    } else {
                ?>
                
                <li><a href="<?php echo base_url(); ?>registration/login" class="text-white">Sign In</a></li>
                
                <?php     
                    }
                ?>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo base_url(); ?>" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Codeigniter Project</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    

    