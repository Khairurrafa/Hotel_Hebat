
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
	<body id="tipe_kamar">
		<!-- Nav -->
		<?php $this->load->view('Nav/navTamu') ?>
		<!-- Nav End -->
		<!-- card -->
		<div class="container kamar">
			<div class="col mb-3">
				<h1>TIPE KAMAR</h1>
				<hr>
			</div>
			<?php foreach ($data as $key => $kamar): ?>
				<div class="card mb-3" style="max-width: 100%">
					<div class="row g-0">
						<div class="col-md-4 align-self-center">
							<img
								src="<?=$kamar['info_kamar']->img_room?>"
								class="img-fluid rounded-start"
								alt="..."
							/>
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><?=$kamar['info_kamar']->nama_kamar?></h5>
								<hr />
								<div class="row">
									<div class="col-md-8 mx-auto mt-3">
										<p class="fasilkam">Fasilitas</p>
										<ul class="list-group">
											<?php if (!empty($kamar['f_kamar'])): ?>
												<?php foreach ($kamar['f_kamar'] as $key => $f): ?>
														<li class="list-group-item">
															<?=$f->nama_faskam?>
														</li>
												<?php endforeach ?>
											<?php endif ?>
										</ul>
									</div>
									<div class="col-md-4 mx-auto mt-3 align-self-center">
										<ul class="list-group">
											<li class="list-group-item harga-hotel">
												Rp.<?=$kamar['info_kamar']->harga?>/hr
											</li>
											<a href="<?= base_url('/Tamu/Pesan_Kamar'). '?id='. $kamar['info_kamar']->id ?>" class="btn btn-primary mt-3"
												>Pesan</a
											>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<!-- card end -->
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
	</body>
</html>
