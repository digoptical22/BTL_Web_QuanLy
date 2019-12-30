 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="register.css">
	<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>
<?php
// if the sign up form was submitted
if($_POST){
 
    $email = isset($_POST['email']) ? $_POST['email'] : "";
 
    // posted email must not be empty
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
 
    // must be a valid email address
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
 
    else{
       //include database connection
        require('msqli_connection.php');

 
        // check first if record exists
        $query = "SELECT id FROM users WHERE email = '$eamil' and verified = '1'";
        $stmt = $con->prepare($query );
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $num = $stmt->rowCount();
 
        if($num>0){
            echo "<div>Your email is already activated.</div>";
        }
 
        else{
 
            // check first if there's unverified email related
            $query = "SELECT id FROM users WHERE email = '$email' and verified = '0'";
            $stmt = $con->prepare( $query );
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $num = $stmt->rowCount();
 
            if($num>0){
 
                // you have to create a resend verification script
                echo "<div>Your email is already in the system but not yet verified. <a href='resend.php'>Resend verification?</a>.</div>";
            }
 
            else{
 
                // now, compose the content of the verification email, it will be sent to the email provided during sign up
                // generate verification code, acts as the "key"
                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
 
                // send the email verification
                $verificationLink = "http://example.com/activate.php?code=" . $verificationCode;
 
                $htmlStr = "";
                $htmlStr .= "Hi " . $email . ",<br /><br />";
 
                $htmlStr .= "Please click the button below to verify your subscription and have access to the download center.<br /><br /><br />";
                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='https://www.hoangweb.com/' target='_blank'>Dịch vụ thiết kế web giá rẻ</a><br />";
 
 
                $name = "Hoangweb.com";
                $email_sender = "no-reply@hoangweb.com";
                $subject = "Verification Link | Thiết kế web giá rẻ | Subscription";
                $recipient_email = $email;
 
                $headers  = "MIME-Version: 1.0rn";
                $headers .= "Content-type: text/html; charset=iso-8859-1rn";
                $headers .= "From: {$name} <{$email_sender}> n";
 
                $body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                if( mail($recipient_email, $subject, $body, $headers) ){
 
                    // tell the user a verification email were sent
                    echo "<div id='successMessage'>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";
 
 
                    // save the email in the database
                    $created = date('Y-m-d H:i:s');
 
                    //write query, verified = '0' means it is unverified, on activation, it becomes '1'
                    $query = "INSERT INTO 
                                users 
                            SET 
                                email = '$email', 
                                verification_code = 'verificode', 
                                created = Now(),
                                verified = '0'";
 
                    $stmt = $con->prepare($query);
 
                    $stmt->bindParam(1, $email);
                    $stmt->bindParam(2, $verificationCode);
                    $stmt->bindParam(3, $created);
 
                    // Execute the query
                    if($stmt->execute()){
                        // echo "<div>Unverified email was saved to the database.</div>";
                    }else{
                        echo "<div>Unable to save your email to the database. <a href='https://www.hoangweb.com/lien-he'>Contact Us.</a></div>";
                        //print_r($stmt->errorInfo());
                    }
 
                }else{
                    die("Sending failed.");
                }
            }
 
 
        }
 
    }
 
}
 
// show your sign up or registration form
echo "<form action='login.php" . $_SERVER[PHP_SELF] . "' method='post'>";
    echo "<input type='email' name='email' placeholder='Enter your email address to subscribe' required />";
    echo "<input type='submit' value='Subscribe' />";
echo "</form>";
?>

<?php
//database connection
require('msqli_connection.php');

// check first if record exists
$query = "SELECT id FROM users WHERE verification_code = '$verificationCode' and verified = '0'";
$stmt = $con->prepare( $query );
$stmt->bindParam(1, $_GET['code']);
$stmt->execute();
$num = $stmt->rowCount();
 
if($num>0){
 
    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE users 
                set verified = '1'
                where verification_code = :verification_code";
 
    $stmt = $con->prepare($query);
    $stmt->bindParam(':verification_code', $_GET['code']);
 
    if($stmt->execute()){           
        // tell the user
        echo "<div>Your email is valid, thanks!. You may now login.</div>";
    }else{
        echo "<div>Unable to update verification code.</div>";
        //print_r($stmt->errorInfo());
    }       
 
}else{
    // tell the user he should not be in this page
    echo "<div>I think you're in the wrong place.</div>";
}
?>
<body>
	<div class="container bg-dark">
		<nav>
			<a href="#" class="home">Home</a>
			<a href="login.php" class="login">Login</a>
		</nav>
	</div>
	<div class="container">
		<form action="register.php" method="post" name="loginForm" id="loginForm"> 
			<h1>Register</h1>
			<hr>
			<div class="container-fluid">
				<select name="choosePermisson " class="mb-3" id="">
					<option value="1">Manage</option>
					<option value="0">Lecturers</option>
				</select>
				<div class="form-group mb-5">
					<input name="userName" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
				</div>
				<div class="form-group mb-5">
					<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group mb-5">
					<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<input name="confirmPassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm PassWord">
				</div>
			</div>
			<hr>
			<button type="submit" class="btn btn-success">Register Now</button>
		</form>
		</div>
</body>
</html>