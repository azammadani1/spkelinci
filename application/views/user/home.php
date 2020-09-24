<style>
.banner-left h1 {
    color: #222;
	font-family:'Quicksand', 'sans-serif';
    font-size: 60px;
    font-weight: 700;
    line-height: 1em;
    margin-bottom: 20px;
}
a{
	font-family: 'Quicksand', 'sans-serif';	
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Quicksand', 'sans-serif';
    font-weight: 700;
    margin-top: 0px;
    color: #10161A;
}
.header-btn{
	font-family:'Quicksand', 'sans-serif';
}
p{
	font-family:'Quicksand', 'sans-serif';
}
.text-white {
    color: #fff !important;
    font-family: 'Quicksand', 'sans-serif';
}
span{
	font-family: 'Quicksand', 'sans-serif';
}
.banner-area{
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.single-service:hover{
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.section-gap{
	padding:60px;
}
.call-to-action-area{
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.footer-area{
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.main-btn {
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.paragraf{
	text-align: justify;
}
.pb-60 {
    padding-bottom: 20px;
}

</style>

<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
       				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center">
						<div class="col-lg-6 col-md-12 banner-left">
								<h1 class="text-white">
									Hai Pecinta Hewan, <br>
									konsultasikan penyakit hewan anda segera..						
								</h1>
								<p class="mx-auto text-white  mt-20 mb-40">
									Jagalah kesehatan peliharaan, karena dapat menjadi teman kalian.
								</p>
								<?php 
								if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
								?>
								<a href="<?php echo site_url() ?>/welcome/diagnosa" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } else{ ?>
								<a href="<?php echo site_url() ?>/login_user" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } ?>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
							<img style="height: 570px; width: 700px; margin-bottom: 10px; margin-right: 10px" src="<?php echo base_url() ?>assets/templateuser/img/kelincot.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			

			<!-- Start service Area -->
			<section class="service-area section-gap" id="feature" style="background-color: #F9F9FF;">
				<div class="container">
					<div class="row d-flex justify-content-center" ">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Informasi Penyakit</h1>
								<p>Lihat beberapa informasi seputar penyakit pada hewan.</p>
							</div>
						</div>
					</div>						
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6  col-md-6 mb-30 info">
								<div class="single-service" style="background-color: white; padding: 5px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/stethoscope.png" alt="">
									<h4><a href="#">Scabies (Kudis)</a></h4>	
									<span class="paragraf">Scabies adalah sejenis kutu yang ukurannya mikroskopik. Mereka bersarang dibawah lapisan kulit sehingga menyebabkan gatal. Kelinci yang terjangkit akan sering menggaruk bagian yang terjangkit (pada umumnya kuping, kaki, hidung kelinci) sampai bagian tersebut luka bahkan robek.</span>							
								</div>
							</div>
							<div class="col-lg-6  col-md-6 mb-30 info">
								<div class="single-service" style="background-color: white; padding: 5px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/antibiotic.png" alt="">
									<h4><a href="#">Pasteurellosis</a></h4>
									<span class="paragraf">Bakteri Pasteurella multocida yang menyebabkan penyakit pada kelinci. Penyakit ini sangat menular dan sering ditemukan pada koloni kelinci laboratorium. Pasteurellosis dapat menyebar apabila kelinci yang sehat dipindahkan ke kendang tanpa dilakukan sterilisasi terlebih dahulu.</span>								
								</div>
							</div>
							<div class="col-lg-6  col-md-6 mb-30 info">
								<div class="single-service" style="background-color: white; padding: 5px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/medical-app.png" alt="">
									<h4><a href="#">Pneumonia (radang paru - paru)</a></h4>		
									<span class="paragraf">Penyakit ini disebabkan oleh kuman Pasteurella Multocida. Penyakit ini menyerang pada kelinci yang memiliki kondisi badanya tidak bagus, terutama pada induk saat akan melahirkan anak kedua atau ketiga kalinya.</span>						
								</div>
							</div>
							<div class="col-lg-6 col-md-6 info">
								<div class="single-service" style="background-color: white; padding: 5px;">
									<img class="d-block mx-auto mb-30" src="<?php echo base_url() ?>assets/templateuser/img/syringe.png" alt="">
									<h4><a href="#">Conjunctivitis (radang mata)</a></h4>	
									<span class="paragraf">Penyebab penyakit ini adalah Moraxella sp. Tanda – tanda pada penyakit ini yaitu mata mengeluarkan cairan dan memerah. Pengobatannya dengan pemberian salep mata yang memiliki kandungan antibiotik, Sulfathiazole  5% Opthalmia Ointment. </span>							
								</div>
							</div>	
						</div>																	
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			
			<!-- Start call-to-action Area -->
			<section id="tentang" class="call-to-action-area section-gap" >
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Tentang Kami!</h1><br><br><br>
							<div class="col-lg-6" style="float: left;">
								<img src="<?php echo base_url() ?>assets/templateuser/img/pet.png">
							</div>	
							<div class="col-lg-6" style="float:right">
								<p class="text-white mt-30" style="margin-top: 0" >
									<span style="font-size: 28px; font-style: bold">Klinik Griya Satwa Lestari</span> <br>
									Alamat: Jl. Kumudasmoro Utara No.17, Bongsari, Kec. Semarang Bar., Kota Semarang, Jawa Tengah 50148<br>
									<br>
									Jam Buka : 08.00
								</p>	
								
							</div>		
									
						</div>
						<?php 
								if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
								?>
								<a href="<?php echo site_url() ?>/welcome/diagnosa" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } else{ ?>
								<a href="<?php echo site_url() ?>/login_user" class="text-uppercase header-btn">Diagnosa Sekarang <i class="fa fa-arrow-right"></i></span></a>
								<?php } ?>
					</div>
					
				</div>	
			</section>
			<!-- End call-to-action Area -->

			<!-- <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest News from all categories</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div> -->		

			<section id="kontak" class="call-to-action-area section-gap " style="background-image: none;" >
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Get It Touch!</h1>
								<p>Punya pertanyaan, saran atau kritikan? Hubungi kami atau kirim email kepada kami dan kami akan memberi tanggapan sesegera mungkin!</p>
							</div>
						</div>

						<div class="col-md-8 col-md-offset-2" >
							<form action="#" method="post" class="contact-form" >
								<input type="text" class="name input" name="name" placeholder="Nama Depan" required="" style="background: none; border:1px solid #10161A; font-size: 14px; border-radius: 8px">
								<input type="text" class="name input" name="name" placeholder="Nama Belakang" required="" style="background: none; border:1px solid #10161A; font-size: 14px; border-radius: 8px">
								<input type="email" class="name input" name="name" placeholder="Email" required="" style="background: none; border:1px solid #10161A; font-size: 14px; border-radius: 8px">
								<input type="text" class="name input" name="name" placeholder="Subject" required="" style="background: none; border:1px solid #10161A; font-size: 14px; border-radius: 8px">
								<textarea placeholder="Pesan Anda" required="" style="background: none; border:1px solid #10161A; font-size: 14px; border-radius: 8px"></textarea>
								<br>
								<br>
								<input type="submit" class="main-btn" value="Kirim Pesan">
							</form>
						</div>							
					</div>
					
				</div>	
			</section>

			<script>
				$(function(){
					$('.header-btn').mouseenter(function(){
						$(this).effect("shake", {times: 2}, "slow");
					});

					$('.info').mouseenter(function(){
						$(this).effect("bounce", {times: 2}, "slow");
					});
				});
			</script>
