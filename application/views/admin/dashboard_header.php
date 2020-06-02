<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title>
      <link type="text/css" href="<?php echo base_url(); ?>assets_dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" href="<?php echo base_url(); ?>assets_dashboard/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link type="text/css" href="<?php echo base_url(); ?>assets_dashboard/css/theme.css" rel="stylesheet">
      <link type="text/css" href="<?php echo base_url(); ?>assets_dashboard/images/icons/css/font-awesome.css" rel="stylesheet">
      <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
      
      <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

           ga('create', 'UA-59852500-1', 'auto');
           ga('send', 'pageview');
      </script>
  </head>
  <body data-post="http://www.egrappler.com/responsive-bootstrap-admin-template-edmin/">

  <div class="navbar navbar-fixed-top">
<div class="navbar-inner">
  <div class="container" style="margin-top:50px;">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <i class="icon-reorder shaded"></i></a><a class="brand" href="assets_dashboard/index.html">Administrator </a>
      <div class="nav-collapse collapse navbar-inverse-collapse">
          <ul class="nav nav-icons">
              <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
              <li><a href="#"><i class="icon-eye-open"></i></a></li>
              <li><a href="#"><i class="icon-bar-chart"></i></a></li>
          </ul>
          <form class="navbar-search pull-left input-append" action="#">
          <input type="text" class="span3">
          <button class="btn" type="button">
              <i class="icon-search"></i>
          </button>
          </form>
          <ul class="nav pull-right">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Item No. 1</a></li>
                      <li><a href="#">Don't Click</a></li>
                      <li class="divider"></li>
                      <li class="nav-header">Example Header</li>
                      <li><a href="#">A Separated link</a></li>
                  </ul>
              </li>
              <li><a href="#">Support</a></li>
              <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets_dashboard/images/user.png" class="nav-avatar" />
                  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#">My Profile</a></li>
                      <li><a href="#">Edit Profile</a></li>
                      <li><a href="#">Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url(); ?>admin/admin_login/admin_logout">Logout</a></li>
                  </ul>
              </li>
          </ul>
      </div>
      <!-- /.nav-collapse -->
  </div>
  </div>
  <!-- /navbar-inner -->
  </div>
  <!-- /navbar -->
  <div class="wrapper">
  <div class="container">
  <div class="row">
      <div class="span3">
          <div class="sidebar">
              <ul class="widget widget-menu unstyled">
                  <li class="active"><a href="<?php echo base_url(); ?>admin/admin_login/chk_session"><i class="menu-icon icon-dashboard"></i>Dashboard
                  </a></li>
                  <li><a href="<?php echo base_url(); ?>admin/admin_login/getcountries"><i class="menu-icon icon-bullhorn"></i>Countries</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/admin_login/getstates"><i class="menu-icon icon-bullhorn"></i>State</a></li>
                  <li><a href="<?php echo base_url(); ?>admin/admin_login/getcities"><i class="menu-icon icon-bullhorn"></i>City</a></li>
                  <li><a href="<?php echo base_url(); ?>assets_dashboard/message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                      11</b> </a></li>
                  <li><a href="<?php echo base_url(); ?>assets_dashboard/task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                      19</b> </a></li>
              </ul>
              <!--/.widget-nav-->
              
              
              <ul class="widget widget-menu unstyled">
                  <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                  <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                  <li><a href="<?php echo base_url(); ?>assets_dashboard/form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                  <li><a href="<?php echo base_url(); ?>assets_dashboard/table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                  <!-- <li><a href="<?php echo base_url(); ?>assets_dashboard/charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li> -->
              </ul>
              <!--/.widget-nav-->
              <ul class="widget widget-menu unstyled">
                  <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                  </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                  </i>More Pages </a>
                      <ul id="togglePages" class="collapse unstyled">
                          <li><a href="<?php echo base_url(); ?>assets_dashboard/other-login.html"><i class="icon-inbox"></i>Login </a></li>
                          <li><a href="<?php echo base_url(); ?>assets_dashboard/other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                          <li><a href="<?php echo base_url(); ?>assets_dashboard/other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                      </ul>
                  </li>
                  <li><a href="<?php echo base_url(); ?>admin/admin_login/admin_logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
              </ul>
          </div>
          <!--/.sidebar-->
      </div>

