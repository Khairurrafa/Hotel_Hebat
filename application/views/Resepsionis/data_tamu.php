
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
		<?php $this->load->view('Nav/navResp') ?>
		<!-- Nav End -->
        <div class="container banner mb-5">
			<div class="col mb-3">
				<h1>DATA TAMU HOTEL</h1>
				<hr>
			</div>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id Pesan</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Tamu</th>
                        <th>No Handphone</th>
                        <th>Tanggal Cekin</th>
                        <th>Tanggal Cekout</th>
                        <th>Bayar</th>
                        <th>Jumlah Kamar</th>
                        <th>Ref ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $peskam): ?>
                    <tr>
                        <td><?=$peskam['tamu']->id_pesanan?></td>
                        <td><?=$peskam['tamu']->nama_pemesan?></td>
                        <td><?=$peskam['tamu']->nama_tamu?></td>
                        <td><?=$peskam['tamu']->no_tlp?></td>
                        <td><?=$peskam['tamu']->tgl_cekin?></td>
                        <td><?=$peskam['tamu']->tgl_cekout?></td>
                        <td><?=$peskam['tamu']->bayar?></td>
                        <td><?=$peskam['tamu']->jmlh_kamar?></td>
                        <td><?=$peskam['tamu']->RefId?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
		</div>
		<!-- Footer -->
		<?php $this->load->view('Nav/footer') ?>
		<!-- Footer End -->
		<script src="<?= base_url('asset/js/'); ?>bootstrap.js"></script>
		<script src="<?= base_url('asset/js/'); ?>jquery-3.6.0.min.js"></script>
        <script src="<?= base_url('asset/js/'); ?>jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>
	</body>
</html>
