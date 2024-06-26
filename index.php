<?php
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pengumuman ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kelas 9G</title>
	<!-- start title image logo  -->
    <link rel="icon" href="images/9G.png" />
    <!-- end start title image logo  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- atar 10/05/2024 : start koneksi css -->
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- atar 10/05/2024 : end koneksi css -->
</head>

<body>
	<div class="atas fixed-top">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand fw-bold" href="#">HI! Makhluk kelas 9G!</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav  ms-auto">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#pengumuman">pengumuman</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#jadwal">Jadwal Mapel</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#jadwal-piket">Jadwal piket</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tugas">Tugasku</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#reminder">Reminder</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tugasinformasi.php">Tugas dan informasi</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-primary" href="login.php" role="button">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="alertt">
		<!-- <marquee direction="right">pantau website setiap malam karena setiap malam update</marquee> -->
	</div>
	<div class="conatiner mt-5">
		<section id="rumah">
			<div class="row">
				<div class="col-sm">
					<div class="banner">
						<h1>Selamat datang!
							<br>Yuk cek jadwal
							dan tugasmu
						</h1>
					</div>
				</div>

				<div class="col-sm">
					<div class="gambar1">
						<img src="images/task2.jpg">
					</div>
				</div>

			</div>
		</section>

		<section id="pengumuman">
			<div class="row">
				<div class="card">
					<div class="card-body">
						<h3>Pengumuman</h3>
						<table class="table mt-3">
							<tr>
								<th>Hari/Tanggal</th>
								<th>keterangan</th>
							</tr>
							<?php
							while ($user_data = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>" . $user_data['name'] . "</td>";
								echo "<td>" . $user_data['keterangan'] . "</td>";
							}
							?>
						</table>
					</div>
				</div>


			</div>


	</div>
	</section>

	<section id="jadwal">
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h3>Jadwal Pelajaran</h3>
					<h4>Senin</h4>

					<div class="col-sm">
						<div class="senin" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							<h5>IPA
								<br>Pend. Agama Islam
								<br>Matematika
							</h5>
						</div>

						<div class="judul">
							<h4>Selasa</h4>
						</div>
						<div class="selasa" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							<h5>
								<br>Prakarya
								<br>IPA
								<br>Bahasa Indnesia
								<br>Bk
							</h5>
						</div>

						<div class="judul">
							<h4>Rabu</h4>
						</div>
						<div class="rabu" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							<h5>Seni Budaya
								<br>IPS
								<br>Bahasa Inggris
							</h5>
						</div>

						<div class="judul">
							<h4>Kamis</h4>
						</div>
						<div class="kamis" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							<h5>PJOK
								<br>PPKN
								<br>Bahasa Indonesia
							</h5>
						</div>

						<div class="judul">
							<h4>Jumat</h4>
						</div>
						<div class="jumat" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
							<h5>IPS
								<br>Matematika
								<br>Bahasa Inggris
							</h5>
						</div>

					</div>

				</div>
			</div>


		</div>
	</section>

	<section id="jadwal-piket">
		<div class="row">
			<div class="col-sm">
				<div class="piket">
					<h3>Jadwal Piket</h3>
					<div class="senin2">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-in-down">
								Senin
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Hendra</a></li>
								<li><a class="dropdown-item" href="#">Alsya</a></li>
								<li><a class="dropdown-item" href="#">Sagita</a></li>
								<li><a class="dropdown-item" href="#">Shiera</a></li>
								<li><a class="dropdown-item" href="#">Faiz</a></li>
								<li><a class="dropdown-item" href="#">Raffi</a></li>
								<li><a class="dropdown-item" href="#">Wildan</a></li>
							</ul>
						</div>


					</div>

					<div class="selasa2">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-in-down">
								Selasa
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Nindya</a></li>
								<li><a class="dropdown-item" href="#">Ramandha</a></li>
								<li><a class="dropdown-item" href="#">Nabila</a></li>
								<li><a class="dropdown-item" href="#">Sahlah</a></li>
								<li><a class="dropdown-item" href="#">Fikki</a></li>
								<li><a class="dropdown-item" href="#">Azril</a></li>
								<li><a class="dropdown-item" href="#"><span>Ataya</span></a></li>
							</ul>
						</div>
					</div>

					<div class="rabu2">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-in-down">
								Rabu
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Raja</a></li>
								<li><a class="dropdown-item" href="#">Imel</a></li>
								<li><a class="dropdown-item" href="#">Lea</a></li>
								<li><a class="dropdown-item" href="#">Keyla</a></li>
								<li><a class="dropdown-item" href="#">Revaldo</a></li>
								<li><a class="dropdown-item" href="#">Mahesa</a></li>
								<li><a class="dropdown-item" href="#">Lokepa</a></li>
							</ul>
						</div>
					</div>

					<div class="kamis2">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-in-down">
								Kamis
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Natasya</a></li>
								<li><a class="dropdown-item" href="#">Rani</a></li>
								<li><a class="dropdown-item" href="#">Zasqya</a></li>
								<li><a class="dropdown-item" href="#">Allysha</a></li>
								<li><a class="dropdown-item" href="#">Denis</a></li>
								<li><a class="dropdown-item" href="#">Wahyu</a></li>
								<li><a class="dropdown-item" href="#">Angga</a></li>
							</ul>
						</div>
					</div>

					<div class="jumat2">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-aos="zoom-in-down">
								Jumat
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Amel</a></li>
								<li><a class="dropdown-item" href="#">Angel</a></li>
								<li><a class="dropdown-item" href="#">Passie</a></li>
								<li><a class="dropdown-item" href="#">Ivander</a></li>
								<li><a class="dropdown-item" href="#">Ridho</a></li>
								<li><a class="dropdown-item" href="#">Gunawan</a></li>
								<li><a class="dropdown-item" href="#">Gunawan</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="tugas">
		<div class="row">
			<div class="card">
				<div class="card-body">
					<h3>tugas</h3>
					<div class="row row-cols-1 row-cols-md-2 g-4">
						<div class="col" data-aos="zoom-in-left">
							<div class="card">
								<img src="images/agama2.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Tugas Agama Islam</h5>
									<p class="card-text">cek disini untuk melihat PR Agama</p>
									<a href="agama.html">
										<button type="button" class="btn btn-primary">klik untuk melihat</button>
									</a>
								</div>
							</div>
						</div>
						<div class="col" data-aos="zoom-in-right">
							<div class="card">
								<img src="images/b-indo.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Tugas B.Indo</h5>
									<p class="card-text">cek disini untuk melihat PR B.Indoesia</p>
									<a href="b-indo.html">
										<button type="button" class="btn btn-primary">klik untuk melihat</button>
									</a>
								</div>
							</div>
						</div>
						<div class="col" data-aos="zoom-in-left">
							<div class="card">
								<img src="images/prakarya.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Tugas prakarya</h5>
									<p class="card-text">cek disini untuk melihat PR prakarya</p>

									<a href="prkarya.html">
										<button type="button" class="btn btn-primary">klik untuk melihat</button>
									</a>
								</div>
							</div>
						</div>
						<div class="col" data-aos="zoom-in-right">
							<div class="card">
								<img src="images/sbk.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Tugas seni budaya</h5>
									<p class="card-text">cek disini untuk melihat PR seni budaya</p>

									<a href="senbud.html">
										<button type="button" class="btn btn-primary">klik untuk melihat</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="reminder">
		<div class="reminder" data-aos="zoom-in-down">
			<h3>Reminder<span>!!!</span></h3>
			<ol class="list-group list-group-numbered">
				<li class="list-group-item">Setiap rabu membawa buku literasi</li>
				<li class="list-group-item">tugas kelompok ipa membuat makalah untuk hari senin dan selasa depan</li>
				<li class="list-group-item">mengumpulkan tugas teks cerita inspiratif contohnya sudah ada di grup diprint jangan di streples</li>
				<li class="list-group-item">besok membawa fotcopy rapot kelas 9 semester 1 (boleh difoto saja) bagi yang belum</li>
				<li class="list-group-item">ada tugas kelompok pjok untuk hari kamis</li>
				<li class="list-group-item">tugas kelompok agama untuk besok (diprint)</li>
				<li class="list-group-item">hari rabu membawa tugas print (file sudah ada di grup ips)</li>
				<li class="list-group-item">Setiap jumat membawa al-quran untuk tadarus ( <span>yang gak bawa Al-qur'an fix dia atheis</span> )</li>
			</ol>
		</div>
	</section>

	<div class="maaf" data-aos="fade-right" data-aos-easing="ease-in-sine">
		<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
				<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
			</svg> Developer akan update setiap malam. <span>maafin developer jika ada kekurangan dan kesalahan informasi. chat developernya aja kalo ada yang kurang</span> :)</p>
	</div>


	<div class="ombak">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
			<path fill="#0099ff" fill-opacity="1" d="M0,0L48,37.3C96,75,192,149,288,149.3C384,149,480,75,576,69.3C672,64,768,128,864,160C960,192,1056,192,1152,160C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
		</svg>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>