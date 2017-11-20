<?php
//$file = "petugas_form";
$attributes = array('file' => 'pengurus_form');
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
								
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Nama Pengurus</label>
										<input type="text" name="nama_pengurus" class="form-control" placeholder="" value="<?php echo $nama_pengurus;?>">
									</div>
									<div class="form-group">
										<label>Alamat Pengurus</label>
										<input type="text" name="alamat_pengurus" class="form-control" placeholder="" value="<?php echo $alamat_pengurus;?>">
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" class="form-control" placeholder="" value="<?php echo $username;?>">
										<input type="hidden" name="id_pengurus" class="form-control" placeholder="" value="<?php echo $id_pengurus;?>">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="" value="<?php echo $password;?>">
									</div>
							
									<!-- /.form-group -->
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