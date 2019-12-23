<!DOCTYPE html>
<html>
<head>
  <?php 
    session_start();
    if (isset($_SESSION['email'])) {
    include '../layout/link.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost/git/github/belajarGit/AdminLTE2/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php include '../layout/header.php'; ?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    	<?php include '../layout/sidebar.php'; ?>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Git Learning
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-home"></i> Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Count</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
              <?php 
                include '../config/connect.php';
                
                $user_sql = "SELECT * FROM users";
                $user_res = mysqli_query($connect, $user_sql);
                $user_num = mysqli_num_rows($user_res);

                $post_sql1 = "SELECT * FROM post WHERE status = 1";
                $post_sql0 = "SELECT * FROM post WHERE status = 0";
                $post_res1 = mysqli_query($connect, $post_sql1);
                $post_res0 = mysqli_query($connect, $post_sql0);
                $post_num1 = mysqli_num_rows($post_res1);
                $post_num0 = mysqli_num_rows($post_res0);
              ?>
        <div class="box-body">
           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $user_num ?></h3>
              <p><br> USERS</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="http://localhost/git/github/belajarGit/user" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $post_num1 ?> | <?= $post_num0 ?></h3>
              <p>Publish | Draft <br>POST</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="http://localhost/git/github/belajarGit/post" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- footer -->
	<?php include '../layout/footer.php'; ?> 
<!-- /footer -->

  <!-- Control Sidebar -->
 	<?php include '../layout/controlSidebar.php'; ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
	<?php 
		include '../layout/jQuery3.php'; 
	?>	
<!-- /jQuery 3 -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#dashboard').addClass('active');
  });
</script>
<?php
  } else{
    ?>
      <h1>ANDA BELOM LOGIN</h1>
    <?php
    header('refresh: 3;URL = ../index.php');
  }
?>
</body>
</html>
