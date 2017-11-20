<?php
//$file = "peminjaman_form";
$attributes = array('file' => 'peminjaman_form');
$this->load->view('Templates/Head-Forms');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation', $attributes);
?>
<body class="hold-transition skin-blue sidebar-mini" onload="matchIndex()">
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
										<label>Id Barang</label>
										<select class="form-control select2" name="id_barang" id="barang" style="width: 100%;">
											<?php foreach ($barang as $key => $value) { ?>
										<option value="<?php echo $value->id_barang; ?>"><?php echo $value->id_barang;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									
									<!-- /.form-group -->
									<div class="form-group">
										<label>Id Peminjam</label>
										<select class="form-control select2" name="id_peminjam" id="peminjam" style="width: 100%;">
											<?php foreach ($peminjam as $key => $value) { ?>
										<option value="<?php echo $value->id_peminjam; ?>"><?php echo $value->id_peminjam;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Id Pengurus</label>
										<select class="form-control select2" name="id_pengurus" id="pengurus" style="width: 100%;">
											<?php foreach ($pengurus as $key => $value) { ?>
										<option value="<?php echo $value->id_pengurus; ?>"><?php echo $value->id_pengurus;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>Tanggal Peminjaman</label>
										<input type="date" name="tgl_peminjaman" class="form-control" placeholder="" value="<?php echo $tgl_peminjaman;?>">
									</div>
									<div class="form-group">
									<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
										<label>Tanggal Pengembalian</label>
										<input type="date" name="tgl_pengembalian" class="form-control" value="<?php echo $tgl_pengembalian;?>">
									</div>

									<div class="form-group">
										<label>Status Transaksi</label>
										<select class="form-control select2" name="status_transaksi" style="width: 100%;">
											<option selected="selected">Peminjaman</option>
											<option>Dikembalikan</option>
										</select>
									</div>

									<!-- /.form-group -->
									<input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi; ?>">
									<center>
									<div style="margin-top: 50px;">
										<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
										<a href="<?php echo site_url('anggota'); ?>" class="btn btn-default">Kembali</a>
										<input type="reset" class="btn btn-default">
										</div>
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
		<script>
				function matchIndex() {
					var indexPeminjam = <?php echo $id_peminjam; ?>;
					var indexPengurus = <?php echo $id_pengurus; ?>;
					var indexBuku = <?php echo $nomor_buku; ?>;
					document.getElementById("anggota").selectedIndex = indexAnggota;
					document.getElementById("petugas").selectedIndex = indexPetugas;
					document.getElementById("buku").selectedIndex = indexBuku;
				}
			</script>
		<?php
		$this->load->view('Templates/Footer-Forms');
		?>