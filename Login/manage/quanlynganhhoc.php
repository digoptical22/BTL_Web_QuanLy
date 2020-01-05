<?php require_once("msqli_connection.php"); ?>
<?php
	$sql = 'SELECT * from major';
	$query = mysqli_query($conn,$sql); 
?>
<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM major WHERE idMajor = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
	
?>
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
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Quản Lý Ngành Học
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Xem Ngành học</a>
										<a class="dropdown-item" href="#">Lớp Môn Học</a>
									</div>
								</div>
							<li class="nav-item">
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Lớp Môn Học
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Thông tin lớp môn học</a>
										<a class="dropdown-item" href="#">Thời Gian Học</a>
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
										<a class="dropdown-item" href="#">Xem Giảng Viên</a>
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
		<div class="container-fluid ">
			<h1 align="center">[Thông Tin Chi Tiết]</h1>
			<input type="text" placeholder="Chọn Ngành" class="findMajor"> <button type="btn" class="findMajor">Tìm kiếm</button> 
			<br>
			<a href="NewMajors.php" class="newMajor">Thêm Mới</a>
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
				<?php
					while ( $data = mysqli_fetch_array($query) ) {
						$i = 1;
						$id = $data['idMajor'];
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $data['nameMajor']; ?></td>
					<td>
						<a href="changeMajor.php?id=<?php echo $id;?>">Sửa</a>
					</td>
					<td><a href="quanlynganhhoc.php?id_delete=<?php echo $id;?>">Xóa</a></td>
				</tr>
				<?php
						$i++;
					}
				?>
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
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
	</script>
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
