
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
<h1>EDIT KAMAR HOTEL</h1>
<hr>
</div>
<form method="POST" action="<?= base_url('/Admin/EditDataKamar')?>">
<div class="col-md-12">
<?php foreach ($data as $key => $kamar):?>
<p class="mt-3">Nama Kamar</p>
<input
class="form-control"
type="text"
name="nama_kamar"
placeholder="Nama Kamar"
value="<?=$kamar['kamar']->nama_kamar?>"
/>
<p class="mt-3">Harga /hari</p>
<input
class="form-control"
type="number"
name="harga"
placeholder="Harga"
value="<?=$kamar['kamar']->harga?>"
/>
<p class="mt-3">Link Img</p>
<input
class="form-control mb-3"
type="text"
name="img_room"
placeholder="Link Gambar"
value="<?=$kamar['kamar']->img_room?>"
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
