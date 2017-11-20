<?php
$file = "ubah_password";
$this->load->view('Templates/Head-Forms');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation');
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
								
									
									<!-- /.form-group -->
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>Password Lama</label>
										<input type="password" name="passworddulu" class="form-control" placeholder="" value="">
									</div>
									<!-- /.form-group -->
						
									<div class="form-group">
										<label>Password Baru</label>
										<input type="password" name="passwordakan" class="form-control" placeholder="" value="">
									</div>
							
									<input type="hidden" name="username" value="<?php echo $username; ?>">
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