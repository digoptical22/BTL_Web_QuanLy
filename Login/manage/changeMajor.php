<?php require_once("msqli_connection.php"); ?>
<?php
if (isset($_POST["changeMajor"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$id = $_POST["idMajor"];
		$name = $_POST["nameMajor"];
 
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql = "UPDATE major SET nameMajor = '$name' WHERE idMajor='$id'";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		header('Location: quanlynganhhoc.php');
	}
 
	$id = -1;
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$sql = "SELECT * FROM major WHERE idMajor = '$id'";
	$query = mysqli_query($conn,$sql);
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
    	
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                	<?php
						while ($data = mysqli_fetch_array($query)) {

					?>
                    <form action="changeMajor.php" method="post">
                        <h1>Chỉnh Sửa</h1>
                        <hr>
                        <div class="container-fluid">
                            <div class="form-group mb-3">
                                <input name="idMajor" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Mã Ngành" value="<?php echo $data['idMajor']; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <input name="nameMajor" type="text" class="form-control"placeholder="Tên Ngành" value="<?php echo $data['nameMajor']; ?>">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success btnInsert-1" name="changeMajor">Thêm</button>
                    </form>
                    <?php } ?>
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