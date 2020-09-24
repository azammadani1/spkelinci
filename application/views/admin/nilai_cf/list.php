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
			<h3>Daftar Nilai CF</h3>

			<br>
			<a href="<?php echo site_url('/nilai_cf/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i> Tambah Nilai CF</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>NO</th>
						<th>Gejala</th>
						<th>Penyakit</th>
						<!-- <th>Nilai MB</th>
						<th>Nilai MD</th> -->
						<th>Nilai CF Pakar</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data as $data): ?>
					<tr>
						<td><?php echo ++$start ?></td>
						<td><?php echo $data['nama_gejala'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<!-- <td><?php echo $data['mb'] ?></td>
						<td><?php echo $data['md'] ?></td> -->
						<td><?php echo $data['cf_pakar'] ?></td>
						<td style="text-align: center; width: 200px;">
							<a href="<?php echo site_url('/nilai_cf/edit/').$data['gpid'] ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #51677B; border-color: #51677B;"><i class="fa fa-edit"></i> Edit</a>
							<a href="<?php echo site_url('/nilai_cf/hapus/').$data['gpid'] ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div id="pagination">
			<?php echo $pagination ?>
		</div>
	</div>
</div>