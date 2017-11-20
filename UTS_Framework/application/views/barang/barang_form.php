<?php
//$file = "buku_form";
$attributes = array('file' => 'barang_form');
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
										<label>Jenis Barang</label>
										<select class="form-control select2" name="jenis_barang" style="width: 100%;">
											<option selected="selected">DVD</option>
											<option>Komik</option>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Nama Barang</label>
										<input type="text" name="nama_barang" class="form-control" placeholder="" value="<?php echo $nama_barang;?>">
									</div>
									<input type="hidden" name="id_barang" value="<?php echo $id_barang;?>">
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