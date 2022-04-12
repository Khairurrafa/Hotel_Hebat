
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
		<!-- Form Pesanan-->
		<div class="container form-pesanan pb-5">
			<div class="col">
				<div class="row">
					<div>
						<h1>PESAN KAMAR HOTEL</h1>
						<hr>
					</div>
					<div class="container">
						<div class="card p-4">
							<form method="POST" action="<?= base_url('/Tamu/prosBook')?>">
								<div class="row">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4">
												<p class="mb-1">Tanggal Cekin</p>
												<input
													class="form-control"
													type="date"
													name="tgl_cekin"   
												/>
											</div>
											<div class="col-md-4">
												<p class="mb-1">Tanggal Cekout</p>
												<input
													class="form-control"
													type="date"
													name="tgl_cekout"
												/>
											</div>
											<div class="col-md-4">
												<p class="mb-1">Jumlah Kamar</p>
												<input
													class="form-control"
													type="number"
													name="jmlh_kamar"
													placeholder="Jumlah Kamar"
												/>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<p class="mt-3">Nama Pemesan</p>
										<input
											class="form-control"
											type="text"
											name="nama_pemesan"
											placeholder="nama_pemesan"
											value="<?=$data['user']->nama_tamu?>"
											readonly
										/>
										<p class="mt-3">Email</p>
										<input
											class="form-control"
											type="email"
											name="email"
											placeholder="Email"
										/>
										<p class="mt-3">Nomor Handphone</p>
										<input
											class="form-control"
											type="number"
											name="no_tlp"
											placeholder="Nomor Handphone"
											value="<?=$data['user']->no_tlp?>"
										/>
										<p class="mt-3">Nama Tamu</p>
										<input
											class="form-control"
											type="text"
											name="nama_tamu"
											placeholder="Nama Tamu"
										/>
										<p class="mt-3">Tipe Kamar</p>
										<?php foreach ($dataKamar as $key => $kamar): ?>
										<input
											class="form-control mb-3"
											type="text"
											placeholder="Tipe Kamar"
											value="<?=$kamar['info_kamar']->nama_kamar?>"
											readonly
										/>
										<input
											class="form-control d-none mb-3"
											type="text"
											name="id_kamar"
											placeholder="id Kamar"
											value="<?=$_GET['id']?>"
											readonly
										/>
										<p class="mt-3">Harga Per Hari</p>
											<input
												class="form-control mb-3"
												type="text"
												name="harga"
												placeholder="Nama Tamu"
												value="<?=$kamar['info_kamar']->harga?>"
												readonly
											/>
										<?php endforeach ?>
									</div>
								</div>

								<button type="submit" class="btn btn-primary mt-2 col-md-12 mx-auto">
									Kirim
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Form Pesanan End -->
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
	</body>
</html>
