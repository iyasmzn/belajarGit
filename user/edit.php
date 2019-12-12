<!DOCTYPE html>
<html>
<head>
  <title>BelajarGit | User Edit</title>
  <?php include '../layout/link.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../AdminLTE2/index2.html" class="logo">
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
        <i class="fa fa-gear"></i> User Edit Data
        <small>Edit data User</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i> Dashboard</li>
        <li><a href="http://localhost/git/github/belajarGit/user/index.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><i class="fa fa-gear"></i> User Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <h3><i class="fa fa-user"></i>Edit User Login</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="proccessEdit.php" method="POST">
                <?php 
                  include '../connection/connect.php';
                  $ID       = $_GET['id'];
                  $userData = "SELECT * FROM users WHERE id = '$ID'";
                  $query    = mysqli_query($connect, $userData);
                  $row      = mysqli_fetch_assoc($query);
                ?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="<?= $row['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control"  name="email" id="email" placeholder="Enter email" value="<?= $row['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $row['password'] ?>">
                  </div>
                </div>
                <!-- /.box-body -->
                <input type="hidden" name="id" value="<?= $ID ?>">
                <div class="box-footer">
                  <a href="index.php" class="btn btn-l btn-warning"><i class="fa fa-arrow-left"></i>Back</a>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-gear"></i> Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
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
    $('#user').addClass('active');
    $('#userDash').addClass('active');
  });
</script>
</body>
</html>
