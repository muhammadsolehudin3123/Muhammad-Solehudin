<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Dosen</small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Default box -->
		<?php 
		if (!empty($this->session->flashdata('message'))) {
			$pesan = $this->session->flashdata('message');
			echo $pesan;
		}
		?>
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Selamat Datang</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					Selamat Datang di Aplikasi Penggajian , disini anda bisa melihat gaji bulan ini terlebih dahulu sebelum anda menerimanya dari bagian keuangan
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</section>
	</div>
