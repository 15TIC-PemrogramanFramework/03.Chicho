<?php
$attributes = array('file' => 'pengembalian_list');
$this->load->view('Templates/Head-Tables');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation', $attributes);
?>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Left side column. contains the logo and sidebar -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<!-- /.box -->

						<div class="box">
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th style="text-align:center; vertical-align:middle;">No</th>
											<th style="text-align:center; vertical-align:middle;">Nama Petugas</th>
											<th style="text-align:center; vertical-align:middle;">Nama Anggota</th>
											<th style="text-align:center; vertical-align:middle;">Judul Buku</th>
											<th style="text-align:center; vertical-align:middle;">Tanggal Pengembalian</th>
											<th style="text-align:center; vertical-align:middle;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($pengembalian as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_petugas;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_anggota;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->judul;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->tanggal_kembali;?></td>
						<td align="center" style="vertical-align:middle;">
							<?php echo anchor(site_url("peminjaman/edit/".$value->kode_kembali),
								'<i class="fa fa-pencil"></i>', 
								'class="btn btn-warning"');?>
							<?php 
							$jabatan = $this->session->userdata('jabatan'); 
							if($jabatan == 'Administrator'){
								echo anchor(site_url("peminjaman/delete/".$value->kode_kembali),
									'<i class="fa fa-trash"></i>', 
									'class="btn btn-danger"');
							}
							?>
						</td>
					</tr>
					<?php } ?> 
										</tbody>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php
			$this->load->view('Templates/Footer-Tables');
			?>