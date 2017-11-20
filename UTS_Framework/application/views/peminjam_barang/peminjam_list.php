<?php
//$file = "buku_list";
$attributes = array('file' => 'barang_list');
$this->load->view('Templates/Head-Tables');
$this->load->view('Templates/Header');
$this->load->view('Templates/Navigation_peminjam', $attributes);
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
											<th style="text-align:center; vertical-align:middle;">Id Barang</th>
											<th style="text-align:center; vertical-align:middle;">Jenis Barang</th>
											<th style="text-align:center; vertical-align:middle;">Nama Barang</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($barang as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $value->id_barang;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->jenis_barang;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_barang;?></td>
						<td align="center" style="vertical-align:middle;">
						
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