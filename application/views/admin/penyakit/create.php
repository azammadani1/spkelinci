<style>
.tersedia{
	color: green !important;
}
.ada{
	color: red !important;
}
</style>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah Penyakit</h3>

							<br>
							<form action="" method="POST">
								<div class="container">
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kode" id="kode" class="form-control " style="font-size: 12px;" required="required">
										</div>
									</div>
									<span id="pesan_error"></span>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama" class="form-control" style="font-size: 12px;" required="required">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Penanganan Awal/Pencegahan : </span>
										</div>
										<div class="col-md-12">
											<textarea name="keterangan" class="form-control" style="font-size: 12px;" required="required">
											</textarea>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Gambar  </span>
										</div>
										<div class="col-md-12">
											<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>'"
											type="file" name="image" />
										</div>
									</div>
									<br>
									<button type="submit" name="submit" id="btn-simpan" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3EA8FF; border-color: #3EA8FF;">Simpan</button>
									<a href="<?php echo site_url('/penyakit/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
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
$(document).ready(function(){
	$('#kode').keyup(function(){
		$('#pesan_error').show();
		$('#pesan_error').html("Checking ...");
		var kode = $('#kode').val();
		if(kode != ''){
			$.ajax({
				url: "<?php echo base_url() ?>kodecek/"+kode,
				type: "POST",
				dataType: "JSON",
				success: function(response){
					if(response == 0){
						$('#pesan_error').removeClass("ada");
						$('#pesan_error').addClass("tersedia");
						$('#pesan_error').html("Kode Tersedia");
						$('#btn-simpan').attr("disabled", false);
					}else{
						$('#pesan_error').removeClass("tersedia");
						$('#pesan_error').addClass("ada");
						$('#pesan_error').html("Kode Sudah Ada !!!");
						$('#btn-simpan').attr("disabled", true);
					}
				}
			});
		}else{
			$('#pesan_error').hide();
		}
	});
});
</script>