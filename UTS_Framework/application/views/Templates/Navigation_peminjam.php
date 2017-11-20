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
            <li <?php if($file == 'peminjam_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('peminjam_peminjam'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>

          </ul>
        </li>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Barang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($file == 'barang_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('barang_peminjam'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
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
            <li <?php if($file == 'transaksi_list') { ?> class="active" <?php } ?>><a href="<?php echo site_url('transaksi_peminjam'); ?>"><i class="fa fa-eye"></i>Lihat Data</a></li>
         
    </section>
    <!-- /.sidebar -->
  </aside>