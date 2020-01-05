<?php require_once("msqli_connection.php"); ?>
<?php
	$sql = 'SELECT * from major';
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
			<form action="quanlymonhoc.php" method="POST" class="findMonHoc">
				<div class="form-group select">
                   <select name="nameMajor" id="">
                   	<?php
                   		while ($data = mysqli_fetch_array($query)) {
                   			unset($id, $name);
                 			$id = $data['idMajor'];
                  			$name = $data['nameMajor']; 
                  			echo '<option value="'.$id.'">'.$name.'</option>';
                   		}
                   	?>
                   </select>
                </div>
              	<button type="submit" name="search" value="search">Tìm Kiếm</button>
			</form>
			<?php
			if (isset($_REQUEST['search'])) 
        	{
            // Gán hàm addslashes để chống sql injection
            $search = $_POST['nameMajor'];
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $sql = "select subject.idsubject,subject.nameSubject,subject.nOSubject, major.idMajor from major, subject inner join major_subject on subject.idsubject = major_subject.idsubject where major.idMajor like '%$search%'";
 
                // Thực thi câu truy vấn
                $query = mysqli_query($conn,$sql);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($query);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    echo '<thead>
                    	<tr>
                    		<td>STT</td>
                    		<td>IdSubject</td>
                    		<td>nameSubject</td>
                    		<td<Số tín chỉ</td>
                    	</tr>
                    </thead>';
                    echo '<tbody>';
                    while ($row = mysqli_fetch_array($query)) {
                    	$i = 1;
                        echo '<tr>';
                            echo "<td>".$i."</td>";
                            echo "<td>{$row['idsubject']}</td>";
                            echo "<td>{$row['nameSubject']}</td>";
                            echo "<td>{$row['nOSubject']}</td>";

                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                    $i++;
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>
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
