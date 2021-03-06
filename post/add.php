<!DOCTYPE html>
<html>
<head>
  <?php 
  session_start();
  if (isset($_SESSION['email'])) {
  include '../layout/link.php'; 
  ?>
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
        Add Post Data
        <small>Adding Data Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i> Dashboard</li>
        <li><i class="fa fa-book"></i> Post</li>
        <li class="active"><i class="fa fa-plus-circle"></i> Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<form role="form" action="proccess-add.php" method="POST">
                <div class="box-body">
                  <div class="form-group">
                    <label for="author">Author</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-tag"></i></span>
	                    <input type="text" class="form-control" name="author" id="author" placeholder="Enter author name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                      <input type="text" class="form-control"  name="title" id="title" placeholder="Enter title">
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control textarea" name="content" id="content" placeholder="Content"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label><br>
                    <label>
                    <label>
                      <input type="radio" name="status" class="flat-red" value="1">
                      Publish
                    </label>
                    <label>
                      <input type="radio" name="status" class="flat-red" value="0">
                      Draft
                    </label>
                  </div>
                </div>

                <!-- /.box-body -->

                <div class="box-footer">
                  <a href="index.php" class="btn btn-l btn-warning"><i class="fa fa-arrow-left"></i> Back</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
    $('#postAdd').addClass('active');
    $('#post').addClass('active');
  });
  function alertClick() {
    var al = document.getElementById('alert');
    al.style.display = "block";
  }
  function alertCancel() {
    var al = document.getElementById('alert');
    al.style.display = "none";
  }
</script>

<?php 
  } else {
    echo "Please Login First";
    header('refresh:2;URL=../index.php');
  }
?>
</body>
</html>
