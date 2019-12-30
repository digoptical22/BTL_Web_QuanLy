
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
								<a class="nav-link active bg-secondary" href="quanlymonhoc.html">Quản Lý Ngành Học</a>
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
								<a class="nav-link" href="quanlygiangvien.php">Quản lý thông tin giảng viên</a>
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
		<div class="container-fluid ">
			<h1 align="center">[Thông Tin Chi Tiết]</h1>
			<input type="text" placeholder="Chọn Ngành" class="findMajor"> <button type="btn" class="findMajor">Tìm kiếm</button> 
			<form class="form-horizontal" action="" method="post" name="uploadCSV"
				enctype="multipart/form-data">
				<div class="input-row">
<!-- 					<label class="col-md-4 control-label">Choose CSV File</label> --> <input
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
						<td>Mã Ngành</td>
						<td>Tên Ngành</td>
						<td><a href="#"></a></td>
						<td><a href="#"></a></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>TLA201</td>
						<td>
						Chương trình tiên tiến ngành Kỹ thuật xây dựng (Hợp tác với Đại học Arkansas, Hoa Kỳ, học bằng Tiếng Anh)</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>TLA202</td>
						<td>
						Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước (Hợp tác với Đại học bang Colorado, Hoa Kỳ, học bằng Tiếng Anh)</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>TLA101</td>
						<td>
						Kỹ thuật xây dựng công trình thủy</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>4</td>
						<td>TLA104</td>
						<td>
						Kỹ thuật xây dựng</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>5</td>
						<td>TLA111</td>
						<td>
						Công nghệ kỹ thuật xây dựng</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>6</td>
						<td>TLA113</td>
						<td>
						Kỹ thuật xây dựng công trình giao thông</td>
						<td><a href="UpdateMajo.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>7</td>
						<td>TLA114</td>
						<td>
						Quản lý xây dựng</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>8</td>
						<td>TLA102</td>
						<td>
						Kỹ thuật tài nguyên nước</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>9</td>
						<td>TLA107</td>
						<td>
						Kỹ thuật cấp thoát nước</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>10</td>
						<td>TLA110</td>
						<td>
						Kỹ thuật cơ sở hạ tầng</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>11</td>
						<td>TLA103</td>
						<td>
						Thuỷ văn học</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
						<td><a href="#">Xóa</a></td>
					</tr>
					<tr>
						<td>12</td>
						<td>TLA109</td>
						<td>
						Kỹ thuật môi trường</td>
						<td><a href="UpdateMajor.php">Cập Nhật</a></td>
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
