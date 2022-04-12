
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
                        <h1>DATA FASILITAS HOTEL</h1>
                        <hr>
                    </div>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id Fasilitas</th>
                                <th>Nama Fasilitas</th>
                                <th>Keterangan</th>
                                <th>Link Img</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $key => $fashot): ?>
                            <tr>
                                <td><?=$fashot['fashot']->id?></td>
                                <td><?=$fashot['fashot']->nama_fashot?></td>
                                <td><?=$fashot['fashot']->keterangan?></td>
                                <td><?=$fashot['fashot']->img_fashot?></td>
                                <td>
                                    <a href="<?= base_url('/Admin/EditFashot?id=' .$fashot['fashot']->id)?>" class="btn btn-success mb-1 col-md-12">Edit</a>
                                    <a href="<?= base_url('/Admin/HapusFashot?id=' .$fashot['fashot']->id)?>" class="delete btn btn-danger col-md-12" 
									data-confirm="Anda yakin ingin mengubah data ini?">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a href="TambahFashot" class="btn btn-primary col-md-2">Tambah Data</a>
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
