<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php echo base_url('asset/');?>css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url('asset/');?>css/style.css" rel="stylesheet">
		<title>Login Page</title>
	</head>
	<body>
		<section class="login">
			<div class="">
				<div class="row g-0 shadow">
					<div class="col-lg-6 form-login">
						<h1>Login</h1>
						<form method="POST" action="<?= base_url('/login')?>">
							<h4>Username</h4>
							<div class="form-row">
								<div class="col-lg-10">
									<input 
										type="text" 
										name="username" 
										class="inp px-3"
										placeholder="Username" 
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
										placeholder="Password"
									/>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-10">
									<button type="submit" class="btn btn-primary btn1">Masuk</button>
								</div>
							</div>
							<p class="py-1">
								Tidak memiliki akun?
								<a href="register" class="text-decoration-none">Daftar</a>
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
