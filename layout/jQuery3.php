<script src="http://localhost/git/github/belajarGit/AdminLTE2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/dist/js/demo.js"></script>
<!-- iCheck 1.0.1 -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/plugins/iCheck/icheck.min.js"></script>
<!-- CK Editor -->
<script src="http://localhost/git/github/belajarGit/AdminLTE2/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content');
  });
</script>