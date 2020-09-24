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
span{
	font-family: 'Quicksand', 'sans-serif';
}
.header-logo{
	font-weight:bold;
}
.navbar-expand-lg {
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-start;
	background-image:
		-webkit-linear-gradient(0deg, #2c3e50 0%, #3498db 100%);
	;
}
.navbar-nav a {
    text-transform: uppercase;
    font-weight: 600;
    color: white;
    padding-top: 5px;
    padding-bottom: 5px;
}
.navbar-nav a:hover {
    color: #2c3e50;
}
.header-logo{
	color: white;
}
#logo{
    vertical-align: middle;
    border-style: outset;
    border-radius: 100%;
    border-color: white;
}

</style>

<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="">
						  	<img id="logo" src="<?php echo base_url() ?>assets//production/images/iconklinik.jpg" alt="" style="width:50px">
						  </a><span class="header-logo">Sistem Pakar Penyakit Kelinci</span>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="<?php echo site_url() ?>/welcome">Home</a></li>
								<li><a href="<?php echo site_url() ?>/welcome/#feature">Penyakit</a></li>
								<li><a href="<?php echo site_url() ?>/welcome/#tentang">Tentang</a></li>				
								<li><a href="<?php echo site_url() ?>/welcome/#kontak">Kontak</a></li>
								<?php 
                  					if($this->session->userdata('is_login') == TRUE && $this->session->userdata('level') == 'pasien'){
              					?>
								  <li><a href="#"><?php echo $this->session->userdata('username') ?></a></li>
								<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url() ?>/login_user/logout" style="width: 100%; color: #fff;">
                    				<span class="fa fa-cogs" style="color: #2F4356" aria-hidden="true"></span>
                  				</a>
								  <?php }else{ ?>
									<li><a href="<?php echo site_url() ?>/login_user">Masuk</a></li>
              					<?php } ?>
								<!-- <li><a href="<?php echo site_url() ?>/login_admin">Masuk</a></li> -->
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->	
			<script>
				$('a.navbar-brand').mouseenter(function(){
					$(this).effect("bounce", {times: 2}, "slow");
				});

				$('.navbar-nav li a').mouseenter(function(){
					$(this).effect("bounce", {times: 2}, "slow");
				});
			</script>