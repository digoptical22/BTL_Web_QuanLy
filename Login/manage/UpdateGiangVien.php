<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản Lý Ngành Học</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/manage.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="content">
				<h1 >Hệ Thống Quản Lý Giảng Dạy</h1>
				<h3>Trường Đại Học Thủy Lợi</h3>
			</div>
		</div>
	</header>
	<nav>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="content-left">
					<div class="collapse navbar-collapse " id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link " href="quanlynganhhoc.php">Quản Lý Ngành Học</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="LopHocPhan.php">Lớp Học Phần</a>
							</li>
						</ul>
					</div>
				</div>
				<a class="navbar-brand" href="manage.php"><img src="../img/60.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="content-right ml-auto">
					<div class="collapse navbar-collapse content-right" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active bg-secondary" href="quanlygiangvien.html">Quản lý thông tin giảng viên</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.html">Đăng Xuất</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<form action="register.php" method="post" name="loginForm" id="loginForm">
						<h1>Register</h1>
						<hr>
						<div class="container-fluid">
							<select name="choosePermisson " class="mb-3" id="">
								<option value="1">Manage</option>
								<option value="0">Lecturers</option>
							</select>
							<div class="form-group mb-3">
								<label for="">Mã Giảng Viên</label>
								<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label for="">Tên Đầy Đủ</label>
								<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label for="">Email</label>
								<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label for="">Địa Chỉ</label>
								<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
							</div>
							<div class="form-group mb-3">
								<label for="">Giới Tính</label>
								<select name="" id="">
									<option value="0">Name</option>
									<option value="1">Nữ</option>
								</select>
							</div>
							<div class="form-group mb-3">
								<label for="">Ngành Giảng Dạy</label>
								<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
							</div>
						</div>
						<hr>
						<button type="submit" class="btn btn-success btnInsert-1">Thêm</button>
					</form>
				</div>
				<div class="col-3"></div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container bg-light">
			<div class="footer-left mt-1 w-50">
				<h3>&copy;- Trường Đại Học Thủy Lợi</h3>
			</div>
			<div class="footer-right w-50 mt-2 ">
				<a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts"><img src="../img/facebook.png" alt=""></a>
				<a href="https://www.youtube.com/user/daihocthuyloi"><img src="../img/youtube (1).png" alt=""></a>
				<a href="https://twitter.com/Daihocthuyloihn"><img src="../img/twitter.png" alt=""></a>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.4.1.js" type="text/javascript"> </script>
	<script src="js/popper.min.js" type="text/javascript">$('.dropdown-toggle').dropdown();</script>
	<script type="text/javascript">
			
	</script>
</body>
</html>
