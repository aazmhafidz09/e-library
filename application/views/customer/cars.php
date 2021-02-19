
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>


		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/datepicker/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/datepicker/datepicker.css">
	<script>
		$(function () {
		$('#datepicker').datepicker({
		autoclose: true
	});
	});
	</script>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/nice-select.css">			
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?php echo base_url()?>rental/home"><img src="<?php echo base_url()?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				        
				          <li class="menu-active"><a href="<?php echo base_url()?>rental/home">Home</a></li>
				          <li><a href="<?php echo base_url()?>rental/about">About</a></li>
				          <li><a href="<?php echo base_url()?>rental/cars">Cars</a></li>
				          <li><a href="<?php echo base_url()?>rental/team">Team</a></li>	
				          <li><a href="<?php echo base_url()?>rental/pesanan">Pesanan</a></li>		
				        		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Mobil			
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url()?>rental/home">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url()?>rental/cars"> Mobil</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Pilih Mobil sesuai Style anda</h1>
							<p class="text-center">
								kualitas kami tidak akan membohongi anda
							</p>
						</div>
					</div>				
					<div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">All New Fortuner</h4>
									<h2>Rp.780.000<span>/Hari</span></h2>
								</div>
								<p>
									Toyota All New Fortuner  4X4 2.4 VRZ A/T DSL LUX
								</p>
								<p>
									Kapasitas        : 8 Orang <br>
									Pintu            : 4 <br>
									AC               : Dua Zona <br>
									Transmisi        : Otomatis
								</p>
								<a class="text-uppercase primary-btn" data-toggle="modal" data-target="#exampleModalCenter">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Toyota Kijang Innova</h4>
									<h2>Rp.640.000<span>/Hari</span></h2>
								</div>
								<p>
									Toyota New Kijang Innova  2.0 Q A/T Stock Clearance VIN 2018
								</p>
								<p>
									Kapasitas        : 8 Orang <br>
									Pintu            : 4 <br>
									AC               : Dua Zona <br>
									Transmisi        : Otomatis
								</p>
								<a class="text-uppercase primary-btn" data-toggle="modal" data-target="#exampleModalCenter">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/img/car01.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Toyota Camry</h4>
									<h2>Rp.970.000<span>/Hari</span></h2>
								</div>
								<p>
									NEW CAMRY 2.5 L A/T HYBRID 2019
								</p>
								<p>
									Kapasitas        : 4 Orang <br>
									Pintu            : 2 <br>
									AC               : Dua Zona <br>
									Transmisi        : Otomatis
								</p>
								<a class="text-uppercase primary-btn" data-toggle="modal" data-target="#exampleModalCenter">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/img/car02.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>		
			</section>
			<!-- End model Area -->			

			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Saran dan Kritik</h1>
							<p>
								saran dan kritik anda sangat kami terima sebagai bentuk kepuasan anda yang kemudian hari akan kami evaluasi agar memberikan pelayanan terbaik kepada anda
							</p>
							<a class="callaction-btn text-uppercase" href="#">Kirim Kritik Saran</a>	
						</div>
					</div>
				</div>	
			</section>
			
			<!-- End callaction Area -->

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text">
							<h1>Keutamaan kami adalah Kepuasan Anda</h1>
							<p>
								Sejak 2018 sampai kini kami memberikan pelayanan terbaik kepada anda
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Pengemudi Handal</h4>
								<p>
									Pengemudi dari tim kami telah memiliki sertifikasi driver internasional
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Pelayanan Servis</h4>
								<p>
									jika anda Memiliki kendala ketika di perjalanan maka anda hanya perlu menghubungi call center maka tim kami siap menjemput
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Call Center 24 Jam</h4>
								<p>
									kapanpun dan dimanapun kami tetap siap menerima kebutuhan dan keluhan anda
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Bebas Riba</h4>
								<p>
									Hadir dengan menerapkan sistem ekonomi syariah yang 100% bebas anti riba
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Kepercayaan penuh</h4>
								<p>
									Kami memberikan kepercayaan kepada anda secara penuh
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Menerima Masukan</h4>
								<p>
									Kami dengan senang hati untuk menerima keluhan dan saran dari anda
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End feature Area -->				
			




			<!-- Button trigger modal -->
			

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Pesananx</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">


			       <form method="post" action="<?php echo base_url().'rental/tambah_pesanan';?>" class="form" role="form" autocomplete="off">
							    <div class="form-group ">
							       	<div  class="default-select" id="default-select"">

										<select name="nama_mobil" >
											<option value="" disabled selected hidden>Pilih mobil</option>
											<option  value="Toyota Fortuner ">Toyota Fortuner</option>
											<option value="Toyota Yarris">Toyota Yarris</option>
											<option value="Toyota Innova">Toyota Innova</option>
											<option value="Toyota Avanza">Toyota Avanza</option>
										</select>
									</div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select name="qty">
												<option value="" disabled selected hidden>Jumlah Order</option>
												<option value="1">Satu</option>
												<option value="2">Dua</option>
												<option value="3">Tiga</option>
												<option value="4">Empat</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input name="tgl_pesan" id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Hari & Tanggal" type="date">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input name="tgl_kmbl" type="date" id="datepicker" class="form-control" placeholder="Tanggal"><br> 


											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							    <div class="from-group">
							    	<input class="form-control" id="disabledInput" type="text" placeholder="<?php echo $this->session->userdata('nama_cus') ?>" value="<?php $this->session->userdata('id_customer')?>" disabled>
							    	<input value="<?php $this->session->userdata('nama_cus')?>" class="form-control txt-field" type="email" name="email" placeholder="Alamat Email">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="No Telepon">
							    </div>
							    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      				  <button type="submit" class="btn btn-primary">Save changes</button>
							</form>



			      </div>
			      
			    </div>
			  </div>
			</div>




				

			<script src="<?php echo base_url()?>assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url()?>assets/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="<?php echo base_url()?>assets/https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="<?php echo base_url()?>assets/js/easing.min.js"></script>			
			<script src="<?php echo base_url()?>assets/js/hoverIntent.js"></script>
			<script src="<?php echo base_url()?>assets/js/superfish.min.js"></script>	
			<script src="<?php echo base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>			
			<script src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
			<script src="<?php echo base_url()?>assets/js/jquery.nice-select.min.js"></script>	
			<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
			<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>					
			<script src="<?php echo base_url()?>assets/js/parallax.min.js"></script>		
			<script src="<?php echo base_url()?>assets/js/mail-script.js"></script>	
			<script src="<?php echo base_url()?>assets/js/main.js"></script>	
		</body>
	</html>
