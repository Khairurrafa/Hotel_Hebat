<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url('asset/');?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<title>Register Page</title>
	</head>
	<body>
		<section class="login">
			<div class="">
				<div class="row g-0 shadow">
					<div class="col-lg-6 form-register">
						<h1>Register</h1>
						<form method="POST" action="<?= base_url('/register')?>">
							<h4>Username</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input 
										type="text" 
										name="username" 
										class="inp px-3"
										placeholder="" 
									/>
								</div>
							</div>
							<h4>Nama Lengkap</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input 
										type="text" 
										name="nama_tamu" 
										class="inp px-3"
										placeholder="" 
									/>
								</div>
							</div>
							<h4>Jenis Kelamin</h4>
							<div class="form-row">
								<div class="col-lg-10">
								<select 
									class="form-select " 
									name="jenkel" 
									aria-label="Default select example"
									>
										<option selected>Pilih</option>
										<option value="L">Laki-laki</option>
										<option value="P">Perempuan</option>
								</select>
								</div>
							</div>
							<h4>Tanggal Lahir</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input 
										type="date" 
										name="tgl_lahir" 
										class="inp px-3"
										placeholder="" 
									/>
								</div>
							</div>
							<h4>No Handphone</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input 
										type="text" 
										name="no_tlp" 
										class="inp px-3"
										placeholder="" 
									/>
								</div>
							</div>
							<h4>Password</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input
										type="password"
										name="password" 
										class="inp inp2 px-3"
										placeholder=""
									/>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-10">
									<button type="submit" class="btn btn-primary btn1">Daftar</button>
								</div>
							</div>
							<p class="py-1">
								Sudah memiliki akun?
								<a href="login" class="text-decoration-none">Masuk</a>
							</p>
						</form>
					</div>
					<div class="col-lg-5">
					<img src="<?php echo base_url('asset/'); ?>media/login/Building2.png">
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
