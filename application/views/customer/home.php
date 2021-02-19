<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->


		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
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
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url()?>assets/file/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="<?php echo base_url()?>assets/file/img/logo.png" alt="" title="" /></a>
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

<h1><?php echo $this->session->userdata('username') ?></h1>
<h1><?php echo $this->session->userdata('nama_cus') ?></h1>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">Eratkan silaturahmi tanpa perlu khawatir</h6>
							<h1 class="text-white text-uppercase">
								Rental no RIBA				
							</h1>
							<p class="pt-20 pb-20 text-white">
								Famaz Rental kini hadir bersama anda tanpa khawatir tentang kendaraan anda. jaminan kenyamanan adalah keutamaan yang kami sajikan dan 100% syar'iyah
							</p>
							<a href="#" class="primary-btn text-uppercase">Pesan Mobil</a>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Pesan mobilmu sekarang !</h4>
							<form class="form" role="form" autocomplete="off">
							    <div class="form-group">
							       	<div class="default-select" id="default-select"">
										<select>
											<option value="" disabled selected hidden>Pilih mobil</option>
											<option value="1">Toyota Fortuner</option>
											<option value="1">Toyota Yarris</option>
											<option value="1">Toyota Innova</option>
											<option value="1">Toyota Avanza</option>
										</select>
									</div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select>
												<option value="" disabled selected hidden>Jumlah Order</option>
												<option value="1">Satu</option>
												<option value="1">Dua</option>
												<option value="1">Tiga</option>
												<option value="1">Empat</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Hari & Tanggal" type="text">                        
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
											<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Hari & Tanggal" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Nama anda">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Alamat Email">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="No Telepon">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="reset" class="btn btn-default btn-lg btn-block text-center text-uppercase">Konfirmasi Pesanan</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

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

			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="<?php echo base_url()?>assets/file/img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Keamanan dan Kenyamanan  <br>
							adalah sebuah prioritas</h1>
							<p>
								<span>pelayanan maksimal dari kami akan selalu ada untuk anda</span>
							</p>
							<p>
								
							</p>
							<a class="text-uppercase primary-btn" href="#">Dapatkan Brosur</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	

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
								<a class="text-uppercase primary-btn" href="<?php echo base_url()?>rental/home">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/file/img/car.jpg" alt="">
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
								<a class="text-uppercase primary-btn" href="#">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/file/img/car01.jpg" alt="">
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
								<a class="text-uppercase primary-btn" href="#">Pesan Sekarang</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="<?php echo base_url()?>assets/file/img/car02.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->


			<!-- Start fact Area -->
			<section class="facts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">1482</h1>
							<p>Pemesanan Kami tangani</p>
						</div>
						
						<div class="col single-fact">
							<h1 class="counter">757</h1>
							<p>klain Puas</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">26</h1>
							<p>Komplain tertangani</p>
						</div>	
						<div class="col single-fact">
							<h1 class="counter">300</h1>
							<p>Mobil tersedia</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->							

			
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

			


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
						
																		
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
																	
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="<?php echo base_url()?>assets/file/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo base_url()?>assets/file/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url()?>assets/file/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="<?php echo base_url()?>assets/file/https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="<?php echo base_url()?>assets/file/js/easing.min.js"></script>			
			<script src="<?php echo base_url()?>assets/file/js/hoverIntent.js"></script>
			<script src="<?php echo base_url()?>assets/file/js/superfish.min.js"></script>	
			<script src="<?php echo base_url()?>assets/file/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url()?>assets/file/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo base_url()?>assets/file/js/owl.carousel.min.js"></script>			
			<script src="<?php echo base_url()?>assets/file/js/jquery.sticky.js"></script>
			<script src="<?php echo base_url()?>assets/file/js/jquery.nice-select.min.js"></script>	
			<script src="<?php echo base_url()?>assets/file/<?php echo base_url()?>assets/js/waypoints.min.js"></script>
			<script src="<?php echo base_url()?>assets/file/js/jquery.counterup.min.js"></script>					
			<script src="<?php echo base_url()?>assets/file/js/parallax.min.js"></script>		
			<script src="<?php echo base_url()?>assets/file/js/mail-script.js"></script>	
			<script src="<?php echo base_url()?>assets/file/js/main.js"></script>	
		</body>
	</html>



