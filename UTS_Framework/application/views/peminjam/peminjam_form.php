<?php
//$file = "anggota_form";
$attributes = array('file' => 'peminjam_form');
$this->load->view('Templates/Head-Forms');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation', $attributes);
?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<div class="box box-default">
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>Nama Lengkap</label>
										<input type="text" name="nama_peminjam" class="form-control" placeholder="" value="<?php echo $nama_peminjam;?>">
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<select class="form-control select2" name="jenis_kelamin" style="width: 100%;">
											<option selected="selected">Laki-laki</option>
											<option>Perempuan</option>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Status Peminjam</label>
										<select class="form-control select2" name="status_peminjam" style="width: 100%;">
											<option selected="selected">Aktif</option>
											<option>Non aktif</option>
										</select>
									</div>
									<label>Alamat</label>
										<input type="text" name="alamat_peminjam" value="<?php echo $alamat_peminjam;?>" class="form-control" placeholder="">
									<!-- /.form-group -->
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username_peminjam" value="<?php echo $username_peminjam;?>" class="form-control" placeholder="">
									</div>
									<!-- /.form-group -->
							<!-- /.form-group -->
									<input type="hidden" name="id_peminjam" value="<?php echo $id_peminjam;?>">
									<center>
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('peminjam'); ?>" class="btn btn-default">Kembali</a>
										<input type="reset" class="btn btn-default">
									</center>
								</form>
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</section>
		<!-- /.content -->
		</div> 
		<!-- /.content-wrapper -->
		<?php
		$this->load->view('Templates/Footer-Forms');
		?>