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
<body>
	<div class="container">
		<form>
			<h1>Đăng Nhập</h1>
			<hr>
			<img src="img/60.png" alt="">
			<div class="form-group">
				<!-- <label for="exampleInputEmail1">Email address</label> -->
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			</div>
			<div class="form-group">
				<!-- <label for="exampleInputPassword1" >Password</label> -->
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Remember Me</label>
				<label class="form-check-label" for="exampleCheck1"><a href="#">Forgot Password</a></label>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</body>
</html>