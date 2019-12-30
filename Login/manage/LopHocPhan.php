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
								<a class="nav-link" href="quanlynganhhoc.php">Quản Lý Ngành Học</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active bg-secondary" href="LopHocPhan.php">Lớp Học Phần</a>
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
								<a class="nav-link" href="quanlygiangvien.php">Quản lý thông tin giảng viên</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="login.php">Đăng Xuất</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</nav>
	<main>
		<div class="container-fluid">
			<div class="select">
				<div class="select-1">
					<select name="" id="">
						<option value="">2_2019-2020</option>
						<option value="">1_2019-2020</option>
						<option value="">2_2018-2019</option>
						<option value="">1_2018-2019</option>
						<option value="">2_2017-2018</option>
						<option value="">1_2017-2018</option>
						<option value="">2_2016-2017</option>
						<option value="">1_2016-2017</option>
						<option value="">2_2015-2016</option>
						<option value="">1_2015-2016</option>
					</select>
				</div>
				<div class="select-2">
					<select name="" id="" class="mb-5">
						<option value="0">Công Nghệ Thông Tin</option>
						<option value="1">Kinh Tế</option>
						<option value="2">Công Trình Thủy</option>
						<option value="3">Thủy Văn Học</option>
						<option value="4">Kỹ Thuật Xây Dựng Công Trình Thủy</option>
						<option value="5">Kỹ thuật hóa học  </option>
						<option value="6">
						Công nghệ sinh học</option>
						<option value="7">Kỹ thuật trắc địa - bản đồ</option>
					</select>
				</div>
				<div class="select-3">
					<input type="text" placeholder="Tên Giảng Viên">
				</div>
				<div class="select-4">
					<button class="btnLopHocPhan" type="button">Tìm Kiếm</button>
				</div>
			</div>
			<table width="100%" border="2" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>STT</td>
						<td>Lớp Học Phần</td>
						<td>Năm Học</td>
						<td>Học Kỳ</td>
						<td>Giảng Viên</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Thống Kê Ứng Dụng</td>
						<td>2019-2020</td>
						<td>1</td>
						<td>Đỗ Lân</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Công Nghệ Web</td>
						<td>2019-2020</td>
						<td>1</td>
						<td>Kiều Tuấn Dũng</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Hệ Quản Trị Cơ Sở Dữ Liệu</td>
						<td>2019-2020</td>
						<td>1</td>
						<td>Nguyễn Thị Lan</td>
					</tr>
				</tbody>
			</table>
		</div>	
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
</body>
</html>