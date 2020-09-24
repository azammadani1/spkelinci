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
<div class="row" id="frm-list-gejala">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">
				<h3>Daftar Gejala</h3>
				<br>
				<button type="button" class="btn btn-primary" id="btn-tambah" style="border-radius: 0px; font-size: 12px; background:#3EA8FF; border-color: #3EA8FF;"><i class="fa fa-plus-circle"></i>  Tambah Gejala</button>
				<br><br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>Kelompok Gejala</th>
							<th>Kode Gejala</th>
							<th>Gejala</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no= 1; foreach ($kelompok_data as $data): ?>	
						<tr>
							<td><?php echo ++$start ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo $data['kode'] ?></td>
							<td><?php echo $data['nama_gejala'] ?></td>
							<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/gejala/edit/').$data['gid'] ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background:#51677B; border-color:#51677B;"><i class="fa fa-edit"></i>  Edit</a>
								<a href="<?php echo site_url('/gejala/hapus/').$data['gid'] ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i>  Hapus</a>
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

<div class="row" id="frm-tambah-gejala" style="display:none">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Gejala</h3>

							<br>
							<form role="form" id="frm-tambah">
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kelompok Gejala : </span>
										</div>
										<div class="col-md-12">
											<select name="kelompok_gejala_id" id="kelompok_gejala_id" class="form-control " style="font-size: 12px;" required="required">
												<option>-Pilih-</option>
												<?php $kelompok_gejala = $this->Gejala_model->getlistkelompokgejala();

												?>
												<?php foreach ($kelompok_gejala->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->nama; ?></option>
												<?php } ?> 
											
											</select>
											<!-- <input type="text" name="kelompok_gejala_id" class="form-control " style="font-size: 12px;"> -->
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" id="kode" name="kode" class="form-control" style="font-size: 12px;" required="required">
											<input type="hidden" name="id" name="id">
										</div>
									</div>
									<span id="pesan_error"></span>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_gejala" id="nama_gejala" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<button type="button" id="btn-simpan" class="btn btn-primary btn-sm" onclick="simpan()" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<button type="button" id="btn-batal" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</button>
								</div>
							</form>
						</div>	
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script type="text/javascript">
function simpan(){
	var counter = 0;
	if(counter == 0){
		if($('#btn-simpan').val() == 0){
			$('#btn-simpan').val(1);
			$.ajax({
				url: "<?php echo base_url() ?>simpangejala",
				type: "POST",
				dataType: "JSON",
				data: $('#frm-tambah').serialize(),
				success: function(response){
					window.location.href = "<?php echo base_url() ?>/gejala";
				},
				error: function(jqHR, textStatus, errorThrown){
					alert("Terjadi kesalahan saat penyimpanan data");
					window.location.href = "<?php echo base_url() ?>/gejala";
				}
			});
		}
		$('#btn-simpan').val(0);
	}
}

$(document).ready(function(){
	$('#kode').keyup(function(){
		$('#pesan_error').show();
		$('#pesan_error').html("Checking ...");
		var kode = $('#kode').val();
		if(kode != ''){
			$.ajax({
				url: "<?php echo base_url() ?>emailcek/"+kode,
				type: "POST",
				dataType: "JSON",
				success: function(response){
					if(response != 0){
						$("#pesan_error").removeClass("tidakada");
						$('#pesan_error').addClass("ada");
						$('#pesan_error').html("Kode Sudah Ada!!!");
						$('#btn-simpan').attr("disabled", true);
					}else{
						$("#pesan_error").removeClass("ada");
						$('#pesan_error').addClass("tidakada");
						$('#pesan_error').html("Kode Tersedia");
						$('#btn-simpan').attr("disabled", false);
					}
					// if(response == 0){
					// 	$("#pesan_error").removeClass("ada");
					// 	$('#pesan_error').addClass("tidakada");
					// 	$('#pesan_error').html("Kode Tersedia");
					// 	$('#btn-simpan').attr("disabled", false);
					// }else{
					// 	$("#pesan_error").removeClass("tidakada");
					// 	$('#pesan_error').addClass("ada");
					// 	$('#pesan_error').html("Kode Sudah Ada!!!");
					// 	$('#btn-simpan').attr("disabled", true);
					// }
				}
			});
		}else{
			$('#pesan_error').hide();
		}
	});

	$('#btn-tambah').click(function(){
		$('#frm-list-gejala').hide();
		$('#frm-tambah-gejala').show();
	});

	$('#btn-batal').click(function(){
		$('#frm-tambah-gejala').hide();
		$('#frm-list-gejala').show();
	});

});
	
</script>