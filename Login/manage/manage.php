<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Manage Page</title>
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
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Quản Lý Ngành Học
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="quanlynganhhoc.php">Xem Ngành học</a>
										<a class="dropdown-item" href="quanlymonhoc.php">Lớp Học Theo Ngành</a>
										<a class="dropdown-item" href="monhoctheonganh.php">Tạo Lớp Học Theo Ngành</a>
									</div>
								</div>
							<li class="nav-item">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Lớp Học Phần
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="lopmonhoc.php">Thông tin các lớp môn học</a>
										<a class="dropdown-item" href="quanlythoigian.php">Thời Gian Học</a>
									</div>
								</div>
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
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Quản lý giảng viên
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="quanlygiangvien.php">Xem Giảng Viên</a>
										<!-- <a class="dropdown-item" href="#"></a>
										<a class="dropdown-item" href="#">Something else here</a> -->
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									...
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Profile</a>
										<a class="dropdown-item" href="#">log-out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>
	<main>
		<!-- <div class="container">
			<div class="row">
				<div class="col-lg-4 col-xl-4 banner-left">
					<div class="box">
						<div class="boxTitle bg-primary">
							<h5>Liên Kết Hữu Ích</h5>
						</div>
						<div class="boxText">...........................</div>
					</div>
					<div class="box-1 ">
						<div class="boxTitle-1 bg-primary"><h5>
							Thăm Dò Ý Kiến
						</h5></div>
						<div class="boxText-1">
							........................................................
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8 banner-right">
					<div class="title">
						<h5><a href=""></a>Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 4 năm 2019</h5>
						<p>Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 4 năm 2019</p><a href="#">&raquo; Xem Chi Tiết</a>
					</div>
					<hr>
					<div class="title">
						<h5>Kết quả thi chuẩn Tiếng Anh đầu đợt 3 năm 2019</h5>
						<p>Kết quả thi chuẩn Tiếng Anh đầu đợt 3 năm 2019</p><a href="#">&raquo; Xem Chi Tiết</a>
					</div>
					<hr>
					<div class="title">
						<h5>Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 3 năm 2019 tại Hà Nội</h5>
						<p>Thông báo về tổ chức thi chuẩn Tiếng Anh đầu ra cho trình độ đại học hệ chính quy đợt 3 năm 2019 tại Hà Nội</p><a href="#">&raquo; Xem Chi Tiết</a>
					</div>
					<hr>
					<div class="ft-text"> <a href="#">Xem Tất Cả</a></div>
				</div>
			</div>
		</div> -->
	</main>
	<footer>
		<div class="container bg-light">
			<div class="footer-left mt-1 w-50">
				<h3>&copy;- Trường Đại Học Thủy Lợi</h3>
			</div>
			<div class="footer-right w-50 mt-2 ">
				<a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts"><img src="img/facebook.png" alt=""></a>
				<a href="https://www.youtube.com/user/daihocthuyloi"><img src="img/youtube (1).png" alt=""></a>
				<a href="https://twitter.com/Daihocthuyloihn"><img src="img/twitter.png" alt=""></a>
			</div>
		</div>
	</footer>
	<script src="../js/jquery-3.4.1.js" title="text/javascript"></script>
	<script src="../js/popper.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
	</script>
</body>
</html>