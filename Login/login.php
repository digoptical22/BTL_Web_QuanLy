<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<?php
	//Gọi file connection.php ở bài trước
require('msqli_connection.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
	$email = $_POST["email"];
	$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$email = strip_tags($email);
	$email = addslashes($email);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($email == "" || $password =="") {
		echo "email hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where email = '$email' and password = '$password' ";
		echo $sql;
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			header('Location: register.php');
			 // echo 'Đây là Trang admin';
		}
	}
}
?>
<body>
	<div class="container">
		<form action="login.php" method="post" name="loginform" id="loginform">
			<h1>Đăng Nhập</h1>
			<hr>
			<img src="img/60.png" alt="">
			<div class="form-group">
				<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1"><span></span>Remember Me</label>\
				<a href="#">Forgot Password</a>
			</div>
			<hr>
			<div class="create-account"><p>You don't have Account please click hear &rarr;
				<a href="#">Register</a>
				</p>
			</div>
			<hr>
			<button name="btn_submit" type="submit" class="btn btn-success">Log-in</button>
		</form>
	</div>
</body>
</html>