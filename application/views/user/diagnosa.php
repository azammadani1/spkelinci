<style>
	h2{
		font-family:'Quicksand', 'sans-serif';
	}
	p{
		font-family:'Quicksand', 'sans-serif';
	}
	span{
		font-family:'Quicksand', 'sans-serif';
	}
	.footer-area{
		background-image:
			-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
		;
	}
</style>
<!--Konfirmasi-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<form role="form" id="frm-tambah-nilai">
			<div class="modal-header">
				<h5 class="modal-title mt-0" id="myModalLabel">Form Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
				<select name="cf_user" class="form-control">
					<option value="1">Pasti</option>
					<option value="0.8">Hampir Pasti</option>
					<option value="0.6">Kemungkinan Besar</option>
					<option value="0.4">Mungkin</option>
					<option value="0.2">Tidak Yakin</option>
				</select>
				<input type="hidden" id="id" name="id">
				<input type="hidden" id="gejala_id" name="gejala_id">
				<input type="hidden" id="penyakit_id" name="penyakit_id">
				<!-- <input type="hidden" id="mb" name="mb">
				<input type="hidden" id="md" name="md"> -->
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
				<button type="button" id="btn-simpan-nilai" class="btn btn-primary waves-effect waves-light" onclick="simpanNilai()">Simpan</button>
			</div>
		</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Konfirmasi -->

<section id="kontak" class="call-to-action-area section-gap " style="background-image: -webkit-linear-gradient(0deg, #ffffff 0%, #ffffff 100%) !important;" >
	<div class="container">
	<?php echo form_open()?>
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-6">
				<div class="title text-center">
					<h2 style="margin-bottom: 0px;">Hello, <?php echo $this->session->userdata('nama'); ?></h2><br>
					<!-- <h2>Penyakit Ibu Hamil</h2> -->
					<p>Halaman ini adalah halaman diagnosa, Silahkan pilih gejala dengan cara mencentang beberapa pilihan dibawah ini sesuai dengan gejala yang terlihat pada hewan anda...</p>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-md-12 col-md-offset-2" >
				<?php foreach($listKelompok->result() as $value){?>
				<span style="font-weight: bold;" ><?php echo $value->nama?></span><br>
					<?php
                    $this->load->model(array('Gejala_model'));
                    $listGejala = $this->Gejala_model->get_by_kelompok($value->id);
                    foreach($listGejala->result() as $value2){?>
					<input type="checkbox" name="gejala[]" value="<?php echo $value2->id?>" > <?php echo $value2->kode." - ".$value2->nama_gejala?> <br>
				<br>
				<?php }?>
			<?php } ?>
			</div>
		</div>
		<br>
		<div class="row d-flex justify-content-center">
			<div class="col-md-12" style="float: left; padding: 0;">
				<button type="submit" name="submit" class="btn main-btn" style="background-color: #2c3e50;  border-radius: 0px;">Proses</button>
			</div>
		</div>
	</div>
	<?php echo form_close()?>
</section>

<script type="text/javascript">
	function simpanNilai(){
		counter = 0;
		if(counter == 0){
			if($("#btn-simpan-nilai").val()==0){
				$("#btn-simpan-nilai").val(1);
				$.ajax({
					url: "<?php echo base_url() ?>insertNilai",
					type: "POST",
					data: $('#frm-tambah-nilai').serialize(),
					dataType: "JSON",
					success: function(data){
						console.log("Berhasil Disimpan");
						$('#myModal').modal('hide');
					},
					error: function(jqHR, textStatus, errorThrown){
						alert("Terjadi kesalahan saat menyimpan nilai");
					}
				});
				var bt= $("#btn-simpan-nilai").val(0);
				console.log(bt);
			}
		}
	}

	$(document).ready(function(){
		$('input[type = "checkbox"]').click(function(){
			var id = $(this).val();
			if($(this).prop('checked') == true){
			$.ajax({
				url: "<?php echo base_url() ?>gejala/"+id,
				type: "POST",
				dataType: "JSON",
				success: function(response){
					$('#myModal').modal('show');
					$('#myModalLabel').html("Seberapa Yakin Anda?");
					$('#id').val(response.id);
					$('#gejala_id').val(response.gejala_id);
					$('#penyakit_id').val(response.penyakit_id);
					// $('#md').val(response.md);
					// $('#mb').val(response.mb);
				}
			});
			}else{
				if($(this).prop('checked') == false){
					console.log("Oke");
				}
			}
			// $('#myModal').modal('show');
			// console.log("ok");
		});
	});
</script>

