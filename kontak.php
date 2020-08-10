<?php
$koneksi=new mysqli("localhost","root","","tugas_akhir");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hubungi</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="#">About us</a></li>
				<li class="menu_item"><a href="#">Services</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">MIS<span>NURUL HUDA</span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												
											</ul>
										</div>
										<div class="header_top_phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<span>+62812 6726 8444</span>
										</div>
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li><a href="index1.php">Home</a></li>
													<li><a href="profil.php">Profil</a></li>
													<li class="active"><a href="form.php">Form Pendaftaran</a></li>
													<li><a href="data.php">Data Pendaftaran</a></li>
													<li><a href="kontak.php">Kontak</a></li>
													<li><a href="adminPSB/login.php">Login</a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">Silahkan Beri Kritik Dan Saran Demi Kemajuan Aplikasi Web Ini...</div>
						<div class="contact_form_container">
							<form method="post" class="contact_form">
								<input type="text" name="a" class="contact_input" placeholder="Nama Anda" required="required">
								<input type="email" name="b" class="contact_input" placeholder="Email Anda" required="required">
								<input type="text" name="c" class="contact_input" placeholder="Nomor Handphone" required="required">
								<textarea class="contact_input contact_textarea" name="isi" placeholder="Isi Pesan Anda" required="required"></textarea>
								<button class="contact_button" name="kirim">Kirim Pesan</button>
							</form>
							<?php
if (isset($_POST['kirim'])) 
{
  $koneksi->query("INSERT INTO hubungi (nama,email,hp,isi) VALUES('$_POST[a]','$_POST[b]','$_POST[c]','$_POST[isi]')");
  echo "<script>alert('Pesan Terkirim');</script>";
  echo "<script>location='index1.php';</script>";
}
?>
						</div>
					</div>
				</div>

				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Informasi</div>
								<ul>
									<li><span>Alamat: </span>Dusun Bantan Desa Pangarungan Kecamatan Torgamba</li>
									<li><span>Email: </span>misnurulhuda@gmail.com</li>
									<li><span>Phone: </span>+62812 6726 8444</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Waktu Pendaftaran</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Senin s/d Kamis</div>
										<div class="ml-auto">8.00 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Jumat</div>
										<div class="ml-auto">8.00 - 12.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sabtu</div>
										<div class="ml-auto">8.00 - 15.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Minggu</div>
										<div class="ml-auto">Libur</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">MIS<span>NURUL HUDA</span></a>	
							</div>
							<div class="footer_about_text"></div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									
									
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> MIS NURUL HUDA | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title"></div>
							<div class="footer_contact_form_container">
								
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Waktu Pendaftaran</div>
								
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Senin s/d Kamis</div>
										<div class="ml-auto">8.00 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Jumat</div>
										<div class="ml-auto">8.00 - 12.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sabtu</div>
										<div class="ml-auto">8.00 - 15.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Minggu</div>
										<div class="ml-auto">Libur</div>
									</li>
								</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									
								</ul>
							</nav>
							<div class="footer_links">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									
								</ul>
							</div>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+62812 6726 8444</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>