<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mithra Seva Samtithi Admin Pannel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrapValidator.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/admin/css/_all-skins.min.css">
  <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrapValidator.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrap.min.js"></script>


</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>SS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mss</b> Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          
          <?php  //echo '<pre>';print_r($details);exit; ?>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			 <?php if($details['profile_pic']==''){  ?>
                <img src="<?php echo base_url(); ?>assets/vendor/images/user2-160x160.jpg" class="user-image" alt="User Image">
			  <?php }else{  ?>
				<img src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" class="user-image" alt="<?php echo isset($details['name'])?$details['name']:''; ?>">
			  <?php }  ?>
              <span class="hidden-xs"><?php echo isset($details['name'])?$details['name']:''; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
			  <?php if($details['profile_pic']==''){  ?>
                <img src="<?php echo base_url(); ?>assets/vendor/images/user2-160x160.jpg" class="img-circle" alt="User Image">
			  <?php }else{  ?>
				<img src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" class="img-circle" alt="<?php echo isset($details['name'])?$details['name']:''; ?>">
			  <?php }  ?>
                <p>
                  <?php echo isset($details['name'])?$details['name']:''; ?>
                  <small>Member since <?php echo isset($details['created_at'])?$details['created_at']:''; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <?php if($details['profile_pic']==''){  ?>
                <img src="<?php echo base_url(); ?>assets/vendor/images/user2-160x160.jpg" class="img-circle" alt="User Image">
			  <?php }else{  ?>
				<img src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" class="img-circle" alt="<?php echo isset($details['name'])?$details['name']:''; ?>">
			  <?php }  ?>
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url('dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            
            </span>
          </a>
         
        </li> 
		<li class="treeview">
          <a href="banners.php">
            <i class="fa fa-dashboard"></i> <span>Home Page Sliders</span>
            <span class="pull-right-container">
             
            </span>
          </a>
         
        </li> 
		<li class="treeview">
          <a href="ourcases.php">
            <i class="fa fa-dashboard"></i> <span>Our Causes</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li> 
		<li class="treeview">
          <a href="gallery.php">
            <i class="fa fa-dashboard"></i> <span>Gallery</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li> 
	
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
       
       
    </section>
    <!-- /.sidebar -->
  </aside>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
  <!-- =============================================== -->