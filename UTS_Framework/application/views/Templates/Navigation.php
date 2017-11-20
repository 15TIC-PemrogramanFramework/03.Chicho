<?php $jabatan = $this->session->userdata('jabatan'); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Peminjam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($file == 'peminjam_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('peminjam'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
            <li <?php if($file == 'peminjam_form') { ?> class="active" <?php } ?>><a href="<?php echo site_url('peminjam/tambah_peminjam'); ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i> <span>Pengurus</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($file == 'pengurus_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('pengurus'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
            <li <?php if($file == 'pengurus_form') { ?> class="active" <?php } ?>><a href="<?php echo site_url('pengurus/tambah_pengurus'); ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($file == 'barang_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('barang'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
            <li <?php if($file == 'barang_form') { ?> class="active" <?php } ?>><a href="<?php echo site_url('barang/tambah_barang'); ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mail-forward"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($file == 'transaksi_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('transaksi'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
            <li <?php if($file == 'transaksi_form') { ?> class="active" <?php } ?>><a href="<?php echo site_url('transaksi/tambah_transaksi'); ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
         
    </section>
    <!-- /.sidebar -->
  </aside>