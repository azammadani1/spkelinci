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
	.ada{
		color: red !important;
	}
	.tidakada{
		color: green !important;
	}
</style>
<div class="row" id="frm-list-history">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">
				<h3>Daftar History Diagnosa</h3>
                <br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="5%">NO</th>
							<th>Nama</th>
							<th>Tanggal</th>
                            <th>Waktu</th>
							<th>Hasil Diagnosa</th>
							<th width="15%">Tingkat Kepercayaan</th>
                            <th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no= 1; foreach ($kelompok_data as $data): ?>	
						<tr>
							<td><?php echo ++$start ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td style="text-align: center;"><?php echo date('j, M Y', strtotime($data['created_at'])) ?></td>
                            <td style="text-align: center;"><?php echo date('H:i:s', strtotime($data['created_at'])) ?></td>
							<td style="text-align: center;"><?php echo $data['penyakit'] ?></td>
                            <td style="text-align: center;"><?php echo $data['kepercayaan'] ?> %</td>
							<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/history/hapus/').$data['id'] ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i>  Hapus</a>
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
</div>