
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
                        <h1>EDIT FASILITAS KAMAR HOTEL</h1>
                        <hr>
                    </div>
                    <form method="POST" action="<?= base_url('/Admin/EditDataFaskam')?>">
                        <div class="col-md-12">
                            <?php foreach ($data as $key => $faskam):?>
                            <p class="mt-3">Nama Faskam</p>
                            <input
                                class="form-control"
                                type="text"
                                name="id_tipekamar"
                                placeholder="Id Kamar"
                                value="<?=$faskam['faskam']->id_tipekamar?>"
                            />
                            <p class="mt-3">Nama Fasilitas</p>
                            <input
                                class="form-control"
                                type="text"
                                name="nama_faskam"
                                placeholder="Nama Fasilitas"
                                value="<?=$faskam['faskam']->nama_faskam?>"
                            />
                            <p class="mt-3">Kategori</p>
                            <input
                                class="form-control mb-3"
                                type="text"
                                name="kategori"
                                placeholder="Kategori"
                                value="<?=$faskam['faskam']->kategori?>"
                            />
                            <input
                                class="form-control mb-3  d-none"
                                type="text"
                                name="id"
                                placeholder="id"
                                value="<?=$_GET['id']?>"
                            />
                            <?php endforeach ?>
                            <button type="submit" class="btn btn-primary col-md-2">Edit Data</button>
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
