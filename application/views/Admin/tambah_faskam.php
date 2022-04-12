
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
		<?php $this->load->view('Nav/navAdmin') ?>
		<!-- Nav End -->
        <div class="container banner mb-5">
            <div class="col">
                <div class="row"> 
                    <div class="col mb-3">
                        <h1>TAMBAH FASILITAS KAMAR HOTEL</h1>
                        <hr>
                    </div>
                    <form method="POST" action="<?= base_url('/Admin/TambahDataFaskam')?>">
                        <div class="col-md-12">
                            <p class="mt-3">Id Kamar</p>
                            <input
                                class="form-control"
                                type="text"
                                name="id_tipekamar"
                                placeholder="Id Kamar"
                                value=""
                            />
                            <p class="mt-3">Nama Fasilitas</p>
                            <input
                                class="form-control"
                                type="text"
                                name="nama_faskam"
                                placeholder="Nama Fasilitas"
                                value=""
                            />
                            <p class="mt-3">Kategori</p>
                            <input
                                class="form-control mb-3"
                                type="text"
                                name="kategori"
                                placeholder="Kategori"
                                value=""
                            />
                            <button type="submit" class="btn btn-primary col-md-2">Tambah Data</button>
                        </div> 
                    </form>
                </div>
            </div>
		</div>
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
	</body>
</html>
