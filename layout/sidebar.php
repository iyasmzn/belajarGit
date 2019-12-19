<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost/git/github/belajarGit/AdminLTE2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li id="dashboard">
          <a id="dashA" href="http://localhost/git/github/belajarGit/">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li id="post" class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="postDash"><a id="postDashA" href="http://localhost/git/github/belajarGit/post/index.php"><i class="fa fa-navicon"></i> Dashboard Post</a></li>
            <li id="postAdd"><a href="http://localhost/git/github/belajarGit/post/add.php"><i class="fa fa-plus"></i> Add Post</a></li>
          </ul>
        </li>
        <li class="header">SETTING</li>
        <li id="user" class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="userDash"><a id="userDashA" href="http://localhost/git/github/belajarGit/user"><i class="fa fa-user"></i> Dashboard User</a></li>
            <li id="userAdd"><a href="http://localhost/git/github/belajarGit/user/create.php"><i class="fa fa-user-plus"></i> Add User</a></li>
          </ul>
        </li>
      </ul>
    </section>