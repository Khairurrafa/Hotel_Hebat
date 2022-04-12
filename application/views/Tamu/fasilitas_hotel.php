<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url('asset/');?>css/style.css" rel="stylesheet">
		<title>Hotel Hebat</title>
	</head>
	<body>
		<!-- Nav -->
		<?php $this->load->view('Nav/navTamu') ?>
		<!-- Nav End -->
		<!-- Banner -->
		<div class="container banner">
			<div class="col mb-3">
				<h1>FASILITAS HOTEL HEBAT</h1>
				<hr>
			</div>
			<div class="mb-4">
				<img
					src="<?php echo base_url('asset/media/'); ?>fasilitas_hotel/banner.png"
					alt=""
					width="100%"
				/>
			</div>
		</div>
		<!-- Banner End -->
		<!-- Fasilitas -->
		<div class="container pb-5">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<?php foreach ($data as $key => $fashot): ?>
					<div class="col">
						<div class="card">
							<img
								src="<?=$fashot['Fasil_hotel']->img_fashot?>"
								class="card-img-top"
								alt="..."
							/>
							<div class="card-body">
								<h5 class="card-title"><?=$fashot['Fasil_hotel']->nama_fashot?></h5>
								<p class="card-text">
								<?=$fashot['Fasil_hotel']->keterangan?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<!-- Fasilitas End -->
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
	</body>
</html>
