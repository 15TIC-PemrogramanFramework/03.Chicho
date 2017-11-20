<?php
//$file = "petugas_list";
$attributes = array('file' => 'pengurus_list');
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
											<th style="text-align:center; vertical-align:middle;">Id Pengurus</th>
											<th style="text-align:center; vertical-align:middle;">Nama Pengurus</th>
											<th style="text-align:center; vertical-align:middle;">Alamat Pengurus</th>
											<th style="text-align:center; vertical-align:middle;">Username</th>
											<th style="text-align:center; vertical-align:middle;">Aksi</th>
										
										</tr>
									</thead>
									<tbody>
										<?php foreach ($pengurus as $key => $value) { ?>
					<tr>
						<td align="center" style="vertical-align:middle;"><?php echo $value->id_pengurus;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->nama_pengurus;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->alamat_pengurus;?></td>
						<td align="center" style="vertical-align:middle;"><?php echo $value->username;?></td>
						<td align="center" style="vertical-align:middle;">
							<?php echo anchor(site_url("pengurus/edit/".$value->id_pengurus),
								'<i class="fa fa-pencil"></i>', 
								'class="btn btn-warning"');?>
							<?php echo anchor(site_url("pengurus/delete/".$value->id_pengurus),
								'<i class="fa fa-trash"></i>', 
								'class="btn btn-danger"');?>
							</td>
								<?php }?>
						</tr>
					
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
			