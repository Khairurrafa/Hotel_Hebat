
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?= base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url('asset/');?>css/style.css" rel="stylesheet">
		<title>Hotel Hebat</title>
	</head>
	<body id="landing-page">
		<!-- Nav -->
		<?php $this->load->view('Nav/navResp') ?>
		<!-- Nav End -->
		<!-- Slider -->
		<div>
			<div
				id="carouselExampleControls"
				class="carousel slide"
				data-bs-ride="carousel"
			>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img
							src="<?= base_url('asset/media/'); ?>landing_page/banner.png"
							class="d-block w-100"
							alt="..."
						/>
					</div>
					<div class="carousel-item">
						<img
							src="<?= base_url('asset/media/'); ?>landing_page/banner2.png"
							class="d-block w-100"
							alt="..."
						/>
					</div>
					<div class="carousel-item">
						<img
							src="<?= base_url('asset/media/'); ?>landing_page/banner3.png"
							class="d-block w-100"
							alt="..."
						/>
					</div>
				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselExampleControls"
					data-bs-slide="prev"
				>
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselExampleControls"
					data-bs-slide="next"
				>
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<!-- Slider End -->
		<!-- About Us -->
		<div class="container pb-5">
			<div class="row">
				<div class="col text-center judul-about-us">
					<h1>
						Kami akan membantu Anda untuk menikmati <br />
						liburan indah Anda bersama keluarga
					</h1>
					<p class="par-about-us">
						Lepaskan diri anda ke Hotel Hebat, dikelilingi oleh keindahan
						pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang
						hangat dengan berenang di kolam renang dengan pemandangan matahari
						terbenam yang memukau. Kid’s Club yang luas-menawarkan beragam
						fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan
						keluarga. Convention Center kami, dilengkapi pelayanan lengkap
						dengan ruang konversi terbesar di Bandung. mampu mengakomodasi
						hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konversi
						M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
					</p>
				</div>
			</div>
		</div>
		<!-- About Us End -->
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
		<script src="<?= base_url('asset/js/'); ?>bootstrap.js"></script>
		<script src="<?= base_url('asset/js/'); ?>jquery-3.6.0.min.js"></script>
		<script type="text/javascript">
			$(window).on("scroll", function () {
				if ($(window).scrollTop()) {
					$("nav").addClass("bg-dark");
				} else {
					$("nav").removeClass("bg-dark");
				}
			});
		</script>
	</body>
</html>
