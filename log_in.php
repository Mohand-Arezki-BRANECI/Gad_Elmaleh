<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<title>Log In</title>
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


<div class="wrapper">
	<div class="main">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 600;">Log In</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Log in</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="sign_up.php">Register Here</a>.</p>
		</form>
	</div>
</div>

<div class="footer">
	<p>All rights reserved ©2021 Gad Elmaleh.</p>
</div>

</body>
</html>