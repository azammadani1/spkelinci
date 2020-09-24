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
			<h3>Daftar Pasien</h3>
			<br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Username</th>
						<th>Password</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data as $data): ?>	
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data->nama ?></td>
						<td><?php echo $data->email ?></td>
						<td><?php echo $data->username ?></td>
						<td><?php echo $data->password ?></td>
						<td><?php echo $data->level ?></td>
						<td style="text-align: center; width: 200px;">
							<a href="<?php echo site_url('/pengguna/edit_pasien/').$data->id ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo site_url('/pengguna/hapus_pasien/').$data->id ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>