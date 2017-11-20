<?php
//$file = "peminjaman_list";
$attributes = array('file' => 'transaksi_list');
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
											<th style="text-align:center; vertical-align:middle;">Id Transaksi</th>
											<th style="text-align:center; vertical-align:middle;">Nama Barang</th>
											<th style="text-align:center; vertical-align:middle;">Nama Peminjam</th>
											<th style="text-align:center; vertical-align:middle;">Nama Pengurus</th>
											<th style="text-align:center; vertical-align:middle;">Tanggal Peminjaman</th>
											<th style="text-align:center; vertical-align:middle;">Tanggal Pengembalian</th>
											<th style="text-align:center; vertical-align:middle;">Status</th>
											<th style="text-align:center; vertical-align:middle;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($peminjaman as $key => $value) { ?>
					<tr>
								<td align="center" style="vertical-align:middle;"><?php echo $value->id_transaksi;?></td>
						<td align="center" style="vertical-align:middle;"><a href="barang"><?php echo $value->nama_barang;?></td>
						<td align="center" style="vertical-align:middle;"><a href="peminjam"><?php echo $value->nama_peminjam;?></td>
						<td align="center" style="vertical-align:middle;"><a href="pengurus"><?php echo $value->nama_pengurus;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->tgl_peminjaman;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->tgl_pengembalian;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->status_transaksi;?></td>
						<td align="center" style="vertical-align:middle;">
							<?php echo anchor(site_url("transaksi/edit/".$value->id_transaksi),
								'<i class="fa fa-pencil"></i>', 
								'class="btn btn-warning"');?>
								<?php
												echo anchor(site_url("transaksi/delete/".$value->id_transaksi),
													'<i class="fa fa-trash"></i>', 
													'class="btn btn-danger"');
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