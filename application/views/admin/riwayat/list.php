<style>
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    	padding: 8px;
    	line-height: 1.42857143;
    	vertical-align: top;
    	border-top: 1px solid #ddd;
    	font-family: 'Quicksand', 'sans-serif';
	}
	a.btn-danger, a.btn-primary, a.btn-success, a.btn-warning {
    	color: #fff;
    	font-family: 'Quicksand', 'sans-serif';
	}
	h3{
		font-family: 'Quicksand', 'sans-serif';
	}
</style>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<h3>Daftar Riwayat Diagnosa</h3>

			<br>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama User</th>
						<th>Nama Gejala</th>
                		<th>Tanggal</th>
                		<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data as $data): ?>	
					<tr>
						<td><?php echo $data->user_id ?></td>
						<td><?php echo $data->gejala_id ?></td>
                    	<td><?php echo $data->created_at ?></td>
						<td  style="text-align: center; width: 200px;">
							<a href="<?php echo site_url('/penyakit/edit/').$data->user_id ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-eye"></i> Lihat</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			
			<hr>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama User</th>
						<th>Kode Penyakit</th>
                		<th>Nama Penyakit</th>
                		<th>Kepercayaan</th>
                		<th>Keterangan</th>
                		<th>Tanggal</th>
                		<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data2 as $data): ?>	
					<tr>
						<td><?php echo $data->user_id ?></td>
						<td><?php echo $data->kode ?></td>
						<td><?php echo $data->nama ?></td>
						<td><?php echo $data->kepercayaan ?></td>
						<td><?php echo $data->keterangan ?></td>	
                    	<td><?php echo $data->created_at ?></td>
						<td  style="text-align: center; width: 200px;">
							<a href="<?php echo site_url('/penyakit/edit/').$data->user_id ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-eye"></i> Lihat</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>

		</div>
	</div>
</div>