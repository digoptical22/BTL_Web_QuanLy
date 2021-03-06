<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manage Page</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/manage.css">
	<link rel="stylesheet" href="../css/giangvien.css">
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
								<a class="nav-link" href="LichTrinhThucTe.php">Lịch Trình Thực Tế</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="BaiViet.php">Bài Viết Thông Báo</a>
							</li>
						</ul>
					</div>
				</div>
				<a class="navbar-brand giangvien" href="../manage/manage.php"><img src="../img/60.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="content-right ml-auto">
					<div class="collapse navbar-collapse content-right" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active bg-secondary" href="Profile.php">Thông Tin Cá Nhân</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../manage/login.php">Đăng Xuất</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>
	<main>
		<div class="container">
			<form action="">
				<div class="form-group mb-3">
					<label for="">Họ Và Tên</label>
					<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" value="Kiều Tuấn Dũng">
				</div>
				<div class="form-group mb-3">
					<label for="">Email</label>
					<input name="" type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="" value="kitudu@tlu.edu.vn">
				</div>
				<div class="form-group mb-3">
					<label for="">Số Điện Thoại</label>
					<input name="" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" value="0988889999">
				</div>
				<div class="form-group mb-3">
					<label for="">Địa Chỉ</label>
					<input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="Hà Nội">
				</div>
				<div class="form-group mb-3">
					<label for="">Mật Khẩu</label>
					<input name="" type="password" class="form-control" id="" placeholder="" value="123456">
				</div>
				<div class="update"><button class="btn-update" type="btn">Chỉnh Sửa</button></div>
			</form>
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
</body>
</html>