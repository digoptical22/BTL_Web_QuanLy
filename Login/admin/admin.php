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
								<a class="nav-link active bg-secondary" href="LichTrinhThucTe.php">Quản Lý Tài Khoản</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="BaiViet.php">Bài Viết Thông Báo</a>
							</li> -->
						</ul>
					</div>
				</div>
				<a class="navbar-brand admin" href="../manage/manage.php"><img src="../img/60.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="content-right ml-auto">
					<div class="collapse navbar-collapse content-right" id="navbarNav">
						<ul class="navbar-nav">
							<!-- <li class="nav-item">
								<a class="nav-link" href="Profile.php">Thông Tin Cá Nhân</a>
							</li> -->
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
		<div class="container-fluid">
			<div class="select">
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
				<div class="select-4">
					<button class="btnLopHocPhan" type="button">Xem</button>
				</div>
			</div>
			<form class="form-horizontal" action="" method="post" name="uploadCSV"
				enctype="multipart/form-data">
				<div class="input-row">
					<input
					type="file" name="file" id="file" accept=".csv">
					<button type="submit" id="submit" name="import"
					class="btn-submit">Import</button>
					<br/>
				</div>
				<div id="labelError"></div>
			</form>
			<table width="100%" border="2" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<td>STT</td>
						<td>Tên Giảng Viên</td>
						<td>Email</td>
						<td>Mât Khẩu</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Kiều Tuấn Dũng</td>
						<td><input type="email" value="dungkt@tlu.edu.vn"></td>
						<td><input type="password" value="123456"></td>
						<td><a href="#">Chỉnh Sửa</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Trương Xuân Nam</td>
						<td><input type="email" value="namtx@tlu.edu.vn"></td>
						<td><input type="password" value="123456"></td>
						<td><a href="#">Chỉnh Sửa</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>Trần Mạnh Tuấn</td>
						<td><input type="email" value="tuantm@tlu.edu.vn"></td>
						<td><input type="password" value="123456"></td>
						<td><a href="#">Chỉnh Sửa</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>Nguyễn Thị Ngân</td>
						<td><input type="email" value="ngannt@tlu.edu.vn"></td>
						<td><input type="password" value="123456"></td>
						<td><a href="#">Chỉnh Sửa</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>Nguyễn Quỳnh Diệp</td>
						<td><input type="email" value="diepnq@tlu.edu.vn"></td>
						<td><input type="password" value="123456"></td>
						<td><a href="#">Chỉnh Sửa</a></td>
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
				<a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts"><img src="../img/facebook.png" alt=""></a>
				<a href="https://www.youtube.com/user/daihocthuyloi"><img src="../img/youtube (1).png" alt=""></a>
				<a href="https://twitter.com/Daihocthuyloihn"><img src="../img/twitter.png" alt=""></a>
			</div>
		</div>
	</footer>
</body>
</html>