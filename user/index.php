<!DOCTYPE html>
<html>
<head>
  <title>BelajarGit | User</title>
  <?php include '../layout/link.php'; ?>
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
        <i class="fa fa-users"></i> Dashboard User Data
        <small>Manajement data User</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i> Dashboard</li>
        <li class="active"><i class="fa fa-user"></i> User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <a href="create.php" class="btn btn-l btn-primary"><i class="fa fa-user-plus"></i> Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th style="width: 150px">Action</th>
                </tr>
                <?php 
                  include '../connection/connect.php';
                  $no   = 1;
                  $data = "SELECT * FROM users";
                  $res  = mysqli_query($connect, $data);
                  if (mysqli_num_rows($res)) {
                     while ($row = mysqli_fetch_assoc($res)) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td>
                          <a class="btn btn-warning btn-xs" href="edit.php?id=<?= $row['id']; ?>"><i class="fa fa-gear"></i> Edit</a>
                          <a class="btn btn-danger btn-xs" href="delete.php?id=<?= $row['id']; ?>" onclick="javascript:return confirm('Are you sure want to DELETE this?')"><i class="fa fa-user-times"></i> Delete</a>
                        </td>
                      </tr>
                      <?php
                     }
                   } 
                ?>
              </table>
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
