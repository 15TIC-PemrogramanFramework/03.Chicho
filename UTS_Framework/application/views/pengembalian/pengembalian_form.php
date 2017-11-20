<?php
$attributes = array('file' => 'pengembalian_form');
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
										<label>Nama Petugas</label>
										<select class="form-control select2" name="username" id="petugas" style="width: 100%;">
											<?php foreach ($petugas as $key => $value) { ?>
										<option value="<?php echo $value->username; ?>"><?php echo $value->nama;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									
									<!-- /.form-group -->
									<div class="form-group">
										<label>Nama Anggota</label>
										<select class="form-control select2" name="kode_anggota" id="anggota" style="width: 100%;">
											<?php foreach ($anggota as $key => $value) { ?>
										<option value="<?php echo $value->kode_anggota; ?>"><?php echo $value->nama;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Judul Buku</label>
										<select class="form-control select2" name="kode_buku" id="buku" style="width: 100%;">
											<?php foreach ($buku as $key => $value) { ?>
										<option value="<?php echo $value->kode_buku; ?>"><?php echo $value->judul;?></option>
										<?php } ?>
										</select>
									</div>
									<!-- /.form-group -->
									<div class="form-group">
										<label>Tanggal Pengembalian</label>
										<input type="date" name="tanggal_kembali" value="<?php echo $tanggal_kembali;?>" class="form-control pull-right" placeholder="">
									</div>
									<!-- /.form-group -->
									<input type="hidden" name="kode_kembali" value="<?php echo $kode_kembali; ?>">
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
					var indexAnggota = <?php echo $nomor_anggota; ?>;
					var indexPetugas = <?php echo $nomor_petugas; ?>;
					var indexBuku = <?php echo $nomor_buku; ?>;
					document.getElementById("anggota").selectedIndex = indexAnggota;
					document.getElementById("petugas").selectedIndex = indexPetugas;
					document.getElementById("buku").selectedIndex = indexBuku;
				}
			</script>
		<?php
		$this->load->view('Templates/Footer-Forms');
		?>