<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản Lý Giảng Viên</title>
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
								<a class="nav-link active bg-secondary" href="quanlygiangvien.php">Quản lý thông tin giảng viên</a>
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
			<h1 align="center">[Thông Tin Chi Tiết Giảng Viên]</h1><select name="" id="" class="mb-5">
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
			<br><a href="themgiangvien.php"><button  type="btn" class="btnInsert">Thêm Mới</button></a>
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
						<td>Mã Giảng Viên</td>
						<td>Tên Giảng Viên</td>
						<td>Email</td>
						<td>Đia Chỉ</td>
						<td>Giới Tính</td>
						<td>SĐT</td>
						<td>Chức Vụ</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>GV01</td>
						<td>Kiều Tuấn Dũng</td>
						<td>kitudi@tlu.edu.vn</td>
						<td>Bắc Nính</td>
						<td>Nam</td>
						<td>0969888888</td>
						<td>Giảng Viên</td>
						<td><a href="UpdateGiangVien.php">Chỉnh Sửa</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>GV02</td>
						<td>Trần Mạnh Tuấn</td>
						<td>tranmanhtuan@tlu.edu.vn</td>
						<td>Hà Nội</td>
						<td>Nam</td>
						<td>090909090</td>
						<td>Trưởng Khoa</td>
						<td><a href="UpdateGiangVien.php">Chỉnh Sửa</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>GV03</td>
						<td>Trương Xuân Nam</td>
						<td>truongxuannam@tlu.edu.vn</td>
						<td>Hà Nội</td>
						<td>Nam</td>
						<td>0968686866</td>
						<td>Giảng Viên</td>
						<td><a href="UpdateGiangVien.php">Chỉnh Sửa</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>GV04</td>
						<td>Nguyễn Thị Ngân</td>
						<td>nguyenthingan@tlu.edu.vn</td>
						<td>Hà Nội</td>
						<td>Nữ</td>
						<td>0988777722</td>
						<td>Giảng Viên</td>
						<td><a href="UpdateGiangVien.php">Chỉnh Sửa</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>GV05</td>
						<td>Nguyễn Quỳnh Diệp</td>
						<td>nguyenquynhdiep@tlu.edu.vn</td>
						<td>Hà Nội</td>
						<td>Nữ</td>
						<td>099966622</td>
						<td>Giảng Viên</td>
						<td><a href="UpdateGiangVien.php">Chỉnh Sửa</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
				</tbody>
			</table>
			<div class="pagination">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
			</div>
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
	<script src="../js/jquery-3.4.1.js" type="text/javascript"> </script>
	<script src="../js/popper.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(
		function() {
			$("#frmCSVImport").on(
			"submit",
			function() {
				$("#response").attr("class", "");
				$("#response").html("");
				var fileType = ".csv";
				var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+("
				+ fileType + ")$");
				if (!regex.test($("#file").val().toLowerCase())) {
					$("#response").addClass("error");
					$("#response").addClass("display-block");
					$("#response").html(
					"Invalid File. Upload : <b>" + fileType
					+ "</b> Files.");
						return false;
					}
					return true;
			});
		});
	</script>
</body>
</html>
