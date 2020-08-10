<?php
$koneksi=new mysqli("localhost","root","","tugas_akhir");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Formulir Pendaftaran</title>
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
							<div class="home_title">Formulir Pendaftaran</div>
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
				<div class="col-lg-12 contact_col">
					<div class="contact_form">
						<div class="contact_title">Formulir Pendaftaran</div>
						<div class="contact_form_container">
							<form method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>NO Pendaftaran</label>
									<input type="text" class="form-control" name="nd">
								</div>
								<div class="form-group">
									<label>NAMA</label>
									<input type="text" class="form-control" name="nama">
								</div>
								<div class="form-group">
									<label>Tempat,Tanggal Lahir</label>
									<input type="text" class="form-control" name="ttl">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<select class="form-control" name="jk">
										<option>Pilih</option>
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select>
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" class="form-control" name="alamat">
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select class="form-control" name="agama">
			                            <option>Pilih</option>
			                            <option>Islam</option>
			                            <option>Kristen</option>
			                            <option>Khatolik</option>
			                            <option>Hindu</option>
			                            <option>Budha</option>
			                        </select>
								</div>
								<div class="form-group">
									<label>Sekolah Asal</label>
									<input type="text" class="form-control" name="sa">
								</div>
								<div class="form-group">
									<label>Nama Ayah</label>
									<input type="text" class="form-control" name="ayah">
								</div>
								<div class="form-group">
									<label>Nama Ibu</label>
									<input type="text" class="form-control" name="ibu">
								</div>
								<div class="form-group">
									<label>Pekerjaan Ayah</label>
									<input type="text" class="form-control" name="pa">
								</div>
								<div class="form-group">
									<label>Pekerjaan Ibu</label>
									<input type="text" class="form-control" name="pi">
								</div>
								<div class="form-group">
									<label>Telp/Hp</label>
									<input type="text" class="form-control" name="hp">
								</div>
								<button class="btn btn-primary" name="save">Kirim</button>
						</form>
<?php
if (isset($_POST['save'])) 
{
	$koneksi->query("INSERT INTO siswa (id_siswa,nama,ttl,kelamin,alamat,agama,tk,ayah,ibu,hp,pekerjaana,pekerjaai) 
		VALUES('$_POST[nd]','$_POST[nama]','$_POST[ttl]','$_POST[jk]','$_POST[alamat]','$_POST[agama]','$_POST[sa]','$_POST[ayah]','$_POST[ibu]','$_POST[hp]','$_POST[pa]','$_POST[pi]')");

		
	echo "<script>alert('Data berhasil di posting, klik OK untuk upload fas foto');</script>";
	echo "<script>location='foto.php';</script>";

	
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