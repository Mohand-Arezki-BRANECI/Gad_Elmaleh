<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GAD ELMALEH</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Sign Up</title>
</head>
<body>
	<section class="sub-header">
		<nav>
			<div class="nav-links2">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="testimonials.php">TESTIMONIALS</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li><a href="about.php">ABOUT</li></a><span id="line">|</span>
					<li><a href="sign_up.php">SIGN UP</a></li>
					<li><a href="log_in.php">LOG IN</a></li>
					<li><a href="https://www.instagram.com/gadelmaleh/"><img src="https://img.icons8.com/ios/26/ffffff/instagram-new--v1.png"/></a></li>
					<li><a href="https://www.facebook.com/gadelmaleh"><img src="https://img.icons8.com/ios/26/ffffff/facebook--v1.png"/></li>
					<li><a href="https://twitter.com/gadelmaleh"><img src="https://img.icons8.com/ios/26/ffffff/twitter--v1.png"/></a></li>
				</ul>
			</div>
		</nav>
	</section>

<div class="about">
	<h2>What are you waiting for ! Reserve your seat now !!!</h2>
	<p>To see my shows all you have to do is to sign up</p>
</div>


<div class="wrapper">
	<div class="main">
		<form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 600;">Sign Up</p>

			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button  name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="log_in.php">Login Here</a>.</p>
		</form>
	</div>
</div>


<!------Footer----->

<div class="footer">
	<p>All rights reserved ©2021 Gad Elmaleh.</p>
</div>

</body>
</html>
