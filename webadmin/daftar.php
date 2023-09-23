<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DAFTAR | BERITA KITA</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
</head>
<body>
<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default panel-login">
			<div class="panel-heading">
				<h3>DAFTAR ADMINISTRATOR</h3>
			</div>
			<div class="panel-body">
				<form action="daftarr.php" method="POST">
				<div class="form-group">
					 <label>Nama Lengkap</label>
					 <div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-user"></i></span>
						  <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
					 </div>
				  </div>
			   <div class="form-group">
					 <label>Username</label>
					 <div class="input-group">
						  <span class="input-group-addon"><i class="fa fa-user"></i></span>
						  <input type="text" class="form-control" name="username" placeholder="Username" required>
					 </div>
				  </div>
					<div class="form-group">
						<label>Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-key"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-block btn-primary">DAFTAR <i class="fa fa-sign-in"></i></button>
					</div>
				</form>
		  </div>
		</div>
	</div>
</div>
</body>
</html>