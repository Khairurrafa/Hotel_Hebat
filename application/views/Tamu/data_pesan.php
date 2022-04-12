
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
				<h1>PESANAN (<?=$_SESSION['user']->nama_tamu?>)</h1>
				<hr>
			</div>
		</div>
		<!-- Banner End -->
		<!-- Fasilitas -->
		<div class="container pb-5">
			<div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($data['pesanan'] as $key => $item): ?>
                    <div class="col">
                        <div class="card">
                            <img
                                src="<?=$item->img_room?>"
                                class="card-img-top"
                                alt="..."
                            />
                            <div class="card-body">
                                <h5 class="card-title"><?=$item->nama_kamar?></h5>
                                <hr>    
                                <p class="card-text">
                                    Nama Tamu : <?=$item->nama_tamu?>
                                </p>
                                <p class="card-text">
                                    Email : <?=$item->email?>
                                </p>
                                <p class="card-text">
                                    No Tlp : <?=$item->no_tlp?>
                                </p>
                                <p class="card-text">
                                    Tgl Cekin : <?=$item->tgl_cekin?>
                                </p>
                                <p class="card-text">
                                    Tgl Cekout : <?=$item->tgl_cekout?>
                                </p>
                                <p class="card-text">
                                    Jumlah Kamar : <?=$item->jmlh_kamar?>
                                </p>
                                <p class="card-text">
                                    Harga : Rp.<?=$item->bayar?>
                                </p>
                                <p class="card-text">
									<strong>
										Ref ID : <?=$item->RefId?>
									</strong>
                                </p>
								<div class="col">
									<div class="row justify-content-between">
										<a href="<?= base_url('/Tamu/Print?id=' .$item->id_pesanan)?>" class="ms-2 btn btn-primary col-md-6">Cetak</a>
										<a href="<?= base_url('/Tamu/Delete?id=' .$item->id_pesanan)?>" class="me-3 btn btn-danger col-md-5">Batalkan</a>
									</div>
								</div>
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
