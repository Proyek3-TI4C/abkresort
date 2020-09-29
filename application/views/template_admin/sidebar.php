<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="<?= base_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ABK</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>ABK</b>Resort</span>
      </a>

      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php foreach($admin as $list) : ?>
                <img src="<?= base_url('foto/adminFoto/')?><?= $list->foto ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $this->session->userdata("nama_lengkap"); ?></span>
                <?php endforeach;?>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <?php foreach($admin as $list) : ?>
                  <img src="<?= base_url('foto/adminFoto/')?><?= $list->foto ?>" class="img-circle" alt="User Image">
                <?php endforeach;?>
                  <p>
                    <?= $this->session->userdata("nama_lengkap"); ?>
                    <small>Member since <?= date_format(date_create($this->session->userdata('post_date')),"d - m - Y"); ?></small>
                  </p>
                </li>
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url('Admin/myprofile') ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-info"></i></a>
            </li>
          </ul>
        </div>

      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
          <?php foreach($admin as $list) : ?>
            <img src="<?= base_url('foto/adminFoto/')?><?= $list->foto ?>" class="img-circle" alt="User Image">
          <?php endforeach;?>
          </div>
          <div class="pull-left info">
            <p><?= $this->session->userdata("email_admin"); ?></p>
            <!-- // SETTING EMAIL ADMIN -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

          <!-- TAMBAH DATA -->
          <?php if (($this->uri->segment(2) == "tambah_penginapan") || ($this->uri->segment(2) == "tambah_transport") || ($this->uri->segment(2) == "tambah_wisata") || ($this->uri->segment(2) == "tambah_paket") || ($this->uri->segment(2) == "tambah_user") || ($this->uri->segment(2) == "tambah_admin") || ($this->uri->segment(2) == "tambah_list"))  : ?>
            <li class="active treeview menu-open">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if ($this->uri->segment(2) == "tambah_penginapan") : ?>
                  <li class="active"><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
                <?php elseif ($this->uri->segment(2) == "tambah_transport") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
                <?php elseif ($this->uri->segment(2) == "tambah_wisata") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
                <?php elseif ($this->uri->segment(2) == "tambah_paket") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
                <?php elseif ($this->uri->segment(2) == "tambah_user") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
                <?php elseif ($this->uri->segment(2) == "tambah_admin") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>

                <?php elseif ($this->uri->segment(2) == "tambah_list") : ?>
                  <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                  <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                  <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                  <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                  <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                  <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                  <li class="active"><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>

                <?php endif; ?>
              </ul>
            </li>
            </li>
          <?php else : ?>
            <li class="treeview ">
              <a href="#">
                <i class="fa fa-user-plus"></i>
                <span>Tambah Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('Admin/tambah_penginapan') ?>"><i class="fa fa-circle-o"></i> Data Penginapan</a></li>
                <li><a href="<?= base_url('Admin/tambah_transport') ?>"><i class="fa fa-circle-o"></i> Data Transport</a></li>
                <li><a href="<?= base_url('Admin/tambah_wisata') ?>"><i class="fa fa-circle-o"></i> Data Wisata</a></li>
                <li><a href="<?= base_url('Admin/tambah_paket') ?>"><i class="fa fa-circle-o"></i> Data Paket</a></li>
                <li><a href="<?= base_url('Admin/tambah_user') ?>"><i class="fa fa-circle-o"></i> Data User</a></li>
                <li><a href="<?= base_url('Admin/tambah_admin') ?>"><i class="fa fa-circle-o"></i> Data Admin</a></li>
                <li><a href="<?= base_url('Admin/tambah_list') ?>"><i class="fa fa-circle-o"></i> Data List</a></li>
              </ul>
            </li>
            </li>
          <?php endif; ?>
          <!-- LIST USER -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i> <span>List User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> User Aktif</a></li>
              <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> User NonAktif</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('Admin/transaksi') ?>"><i class="fa fa-money"></i> <span>Transaksi</span></a></li>
          <li><a href="<?= base_url('Admin/laporan') ?>"><i class="fa fa-book"></i> <span>Laporan</span></a></li>
          <li><a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?= base_url('Admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <?php
          // print_r($this->uri->segment(1));
          // die;
          ?>
          <?php
          if ($this->uri->segment(2) == "tambah_penginapan") : ?>
            <li class="active">Tambah Penginapan</li>
          <?php elseif ($this->uri->segment(2) == "tambah_transport") : ?>
            <li class="active">Tambah Transport</li>
          <?php elseif ($this->uri->segment(2) == "tambah_wisata") : ?>
            <li class="active">Tambah Wisata</li>
          <?php elseif ($this->uri->segment(2) == "tambah_paket") : ?>
            <li class="active">Tambah Paket</li>
          <?php elseif ($this->uri->segment(2) == "tambah_user") : ?>
            <li class="active">Tambah User</li>
          <?php elseif ($this->uri->segment(2) == "tambah_admin") : ?>
            <li class="active">Tambah Admin</li>
            <!-- LIST TRANSPORT DLL -->
          <?php elseif ($this->uri->segment(2) == "tambah_list") : ?>
            <li class="active">Tambah List </li>
            <!-- END LIST -->
          <?php elseif ($this->uri->segment(2) == "transaksi") : ?>
            <li class="active">Transaksi</li>
          <?php elseif ($this->uri->segment(2) == "laporan") : ?>
            <li class="active">Laporan</li>
            <!-- PROFILE ADMIN -->
          <?php elseif ($this->uri->segment(2) == "myprofile") : ?>
            <li class="active">My Profile</li>
          <?php elseif ($this->uri->segment(2) == "editprofile") : ?>
            <li class="active">Edit Profile</li>
            <!-- END PROFILE ADMIN -->
          <?php else : ?>
            <li class="active">Dashboard</li>
          <?php endif;
          ?>
        </ol>
      </section>