
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?= base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<link href="<?= base_url('asset/');?>css/style.css" rel="stylesheet">
        <link href="<?= base_url('asset/');?>css/jquery.dataTables.min.css" rel="stylesheet">
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
                        <h1>DATA FASILITAS KAMAR HOTEL</h1>
                        <hr>
                    </div>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Fasilitas</th>
                                <th>Id Kamar</th>
                                <th>Nama Fasilitas</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $faskam): ?>
                            <tr>
                                <td><?=$faskam['faskam']->id?></td>
                                <td><?=$faskam['faskam']->id_tipekamar?></td>
                                <td><?=$faskam['faskam']->nama_faskam?></td>
                                <td><?=$faskam['faskam']->kategori?></td>
                                <td>
                                    <div class="row">
                                        <a href="<?= base_url('/Admin/EditFaskam?id=' .$faskam['faskam']->id)?>" class="btn btn-success mb-1 col-md-4">Edit</a>
                                        <a href="<?= base_url('/Admin/HapusFaskam?id=' .$faskam['faskam']->id)?>" class="delete btn btn-danger col-md-4 ms-4"
										data-confirm="Anda yakin ingin mengubah data ini?">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a href="TambahFaskam" class="btn btn-primary col-md-2">Tambah Data</a>
                </div>
            </div>
		</div>
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
		<script src="<?= base_url('asset/js/'); ?>bootstrap.js"></script>
		<script src="<?= base_url('asset/js/'); ?>style.js"></script>
		<script src="<?= base_url('asset/js/'); ?>jquery-3.6.0.min.js"></script>
        <script src="<?= base_url('asset/js/'); ?>jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>
	</body>
</html>
