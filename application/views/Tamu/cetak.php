
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<title>Hotel Hebat</title>
	</head>
	<body>
        <div class="container">
            <div class="col text-center">
                <h1>HOTEL HEBAT</h1>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="col">
                <?php foreach ($data['pesanan'] as $key => $item): ?>
                    <p>Nama Pemesan : <?=$item->nama_pemesan?></p>
                    <p>Nama Tamu : <?=$item->nama_tamu?></p>
                    <p>Email : <?=$item->email?></p>
                    <p>Nomor Handphone : <?=$item->no_tlp?></p>
                    <p>tanggal Cekin : <?=$item->tgl_cekin?></p>
                    <p>tanggal Cekout : <?=$item->tgl_cekout?></p>
                    <p>Jumlah Kamar : <?=$item->jmlh_kamar?></p>
                    <p>Tipe Kamar : <?=$item->nama_kamar?></p>
                    <p>Total Bayar : <?=$item->bayar?></p>
                    <p>
                        <strong>
                            Ref ID : <?=$item->RefId?>
                        </strong> 
                    </p>
                <?php endforeach ?>
            </div>
        </div>
        <script>
            window.print();
        </script>
	</body>
</html>
