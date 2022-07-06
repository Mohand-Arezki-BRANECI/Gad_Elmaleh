<?php 
include 'config.php';

error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
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
</head>
<body>
	<section class="header">
		<nav>
			<div class="nav-links">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="testimonials.php">TESTIMONIALS</a></li>
					<li><a href="news.php">NEWS</a></li>
					<li><a href="about.php">ABOUT</li></a><span id="line">|</span>
					<li><a href="sign_up.php">SIGN UP</a></li>
					<li><a href="log_in.php">LOG IN</a></li>
					<li><a href="https://www.instagram.com/gadelmaleh/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="26" height="26"viewBox="0 0 48 48"style=" fill:#000000;"><path d="M 16.5 5 C 10.16639 5 5 10.16639 5 16.5 L 5 31.5 C 5 37.832757 10.166209 43 16.5 43 L 31.5 43 C 37.832938 43 43 37.832938 43 31.5 L 43 16.5 C 43 10.166209 37.832757 5 31.5 5 L 16.5 5 z M 16.5 8 L 31.5 8 C 36.211243 8 40 11.787791 40 16.5 L 40 31.5 C 40 36.211062 36.211062 40 31.5 40 L 16.5 40 C 11.787791 40 8 36.211243 8 31.5 L 8 16.5 C 8 11.78761 11.78761 8 16.5 8 z M 34 12 C 32.895 12 32 12.895 32 14 C 32 15.105 32.895 16 34 16 C 35.105 16 36 15.105 36 14 C 36 12.895 35.105 12 34 12 z M 24 14 C 18.495178 14 14 18.495178 14 24 C 14 29.504822 18.495178 34 24 34 C 29.504822 34 34 29.504822 34 24 C 34 18.495178 29.504822 14 24 14 z M 24 17 C 27.883178 17 31 20.116822 31 24 C 31 27.883178 27.883178 31 24 31 C 20.116822 31 17 27.883178 17 24 C 17 20.116822 20.116822 17 24 17 z"></path></svg></a></li>
					<li><a href="https://www.facebook.com/gadelmaleh"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="26" height="26"viewBox="0 0 48 48"style=" fill:#000000;"><path d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 30 39 L 30 29 L 33.625 29 C 34.129 29 34.555187 28.623047 34.617188 28.123047 L 34.992188 25.123047 C 35.028188 24.839047 34.938047 24.553891 34.748047 24.337891 C 34.559047 24.122891 34.287 24 34 24 L 30 24 L 30 20.5 C 30 19.397 30.897 18.5 32 18.5 L 34 18.5 C 34.552 18.5 35 18.053 35 17.5 L 35 14.125 C 35 13.607 34.604844 13.174906 34.089844 13.128906 C 34.030844 13.123906 32.619984 13 30.833984 13 C 26.426984 13 24 15.616187 24 20.367188 L 24 24 L 20 24 C 19.448 24 19 24.447 19 25 L 19 28 C 19 28.553 19.448 29 20 29 L 24 29 L 24 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 z"></path></svg></li>
					<li><a href="https://twitter.com/gadelmaleh"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"width="26" height="26"viewBox="0 0 48 48"style=" fill:#000000;"><path d="M 32 6 C 26.568583 6 22.160643 10.388731 22.042969 15.792969 C 17.240727 15.216998 14.113589 13.421507 12.195312 11.652344 C 10.067982 9.6903754 9.3945312 7.9472656 9.3945312 7.9472656 A 1.50015 1.50015 0 0 0 6.8007812 7.5996094 C 6.8007812 7.5996094 5 10 5 13.5 C 5 15.500985 5.6317952 16.981554 6.3847656 18.236328 C 6.3570276 18.223338 6.1699219 18.158203 6.1699219 18.158203 A 1.50015 1.50015 0 0 0 4.0058594 19.636719 C 4.0058594 19.636719 4.5832039 23.856843 8.5507812 26.941406 L 8.1367188 27.044922 A 1.50015 1.50015 0 0 0 7.1972656 29.244141 C 7.1972656 29.244141 7.8700527 30.382221 9.2792969 31.580078 C 10.11485 32.290298 11.34227 33.023169 12.789062 33.701172 C 11.012271 34.35044 8.362818 35 4.5 35 A 1.50015 1.50015 0 0 0 3.3710938 37.488281 C 3.3710938 37.488281 4.5173251 38.751002 6.7832031 39.849609 C 9.0490812 40.948217 12.539474 42 17.5 42 C 26.219697 42 32.484656 37.817151 36.394531 32.515625 C 40.304407 27.214099 42 20.861111 42 16 C 42 15.691547 41.980739 15.387437 41.953125 15.085938 C 44.064371 13.051602 44.856626 11.522235 44.894531 11.447266 C 45.084531 11.066266 45.01375 10.608688 44.71875 10.304688 C 44.42475 9.9996875 43.969031 9.9137969 43.582031 10.091797 L 43.419922 10.166016 C 43.280922 10.230016 43.141953 10.294422 43.001953 10.357422 C 43.408953 9.7084219 43.730125 9.014875 43.953125 8.296875 C 44.077125 7.900875 43.943234 7.4669375 43.615234 7.2109375 C 43.287234 6.9549375 42.835469 6.9275312 42.480469 7.1445312 C 41.258221 7.8873594 40.086652 8.40739 38.867188 8.7558594 C 37.072578 7.0534724 34.656873 6 32 6 z M 32 9 C 35.883178 9 39 12.116822 39 16 C 39 20.138889 37.445593 26.035901 33.980469 30.734375 C 30.515344 35.432849 25.280303 39 17.5 39 C 13.7348 39 11.230189 38.318942 9.3535156 37.582031 C 11.319341 37.276755 13.011947 36.869367 14.228516 36.398438 C 16.338182 35.581792 17.476563 34.638672 17.476562 34.638672 A 1.50015 1.50015 0 0 0 16.863281 32.044922 C 14.140556 31.364241 12.394328 30.263307 11.298828 29.345703 L 12.863281 28.955078 A 1.50015 1.50015 0 0 0 13.039062 26.099609 C 9.7939415 24.851486 8.4312292 23.086373 7.734375 21.607422 C 8.5823538 21.782967 9.3718961 22 10.5 22 A 1.50015 1.50015 0 0 0 11.169922 19.158203 C 11.169922 19.158203 8 17.7 8 13.5 C 8 12.745947 8.2088435 12.268355 8.3613281 11.697266 C 8.884507 12.400354 9.3156815 13.07859 10.160156 13.857422 C 12.734824 16.231954 16.990366 18.653154 23.419922 18.998047 A 1.50015 1.50015 0 0 0 25 17.5 L 25 16 C 25 12.116822 28.116822 9 32 9 z"></path></svg></a></li>
				</ul>
			</div>
		</nav>
	</section>

<!------News----->

<section class="news">
	<h1>News & Updates</h1>
	<p>Stay Updated</p>
	<div class="row">
		<div class="news-col">
			<div class="layer">
				<a href="https://www.sortiraparis.com/scenes/spectacle/articles/258766-gad-elmaleh-retrouvailles-a-paris-pour-son-nouveau-spectacle-d-ailleurs">
				GAD ELMALEH: RETURNED TO PARIS FOR HIS NEW SHOW "D’AILLEURS"</a>
				<p>Did you miss Gad Elmaleh and want to laugh? Ahead of the tour of his 6th one-man show called "D’ailleurs", which will take him across all of France, the comedian gives us an appointment for two "Homecoming" days in Paris. Indeed, 6 years after his show Sans Tambour, Gad Elmaleh puts the cover back and offers us a preview in the capital within the Children of Paradise.</p>	
				<img src="images/news1.jpeg">
			</div>
		</div>
		<div class="news-col">
			<div class="layer">
				<img src="images/news3.jpeg">
				<a href="https://www.estrepublicain.fr/amp/culture-loisirs/2021/11/16/il-reste-quelques-places-pour-rire-avec-gad-elmaleh-ce-mercredi-soir">
				There are still a few places to laugh with Gad Elmaleh this Wednesday evening!</a>
				<p>Five years after "Sans tambour" and an international tour with a show in English given in more than 15 countries, Gad Elmaleh is back in France with a unique one-man-show called "D’ailleurs". The interpreter of Coco or Chouchou will be this Wednesday, November 17 at the Grand Kursaal in Besançon, starting 8 p.m.</p>	
			</div>
		</div>
	</div>
	<div class="row">	
		<div class="news-col">
			<div class="layer">
				<img src="images/news2.jpeg"><br>
				<a href="https://www.sudouest.fr/pyrenees-atlantiques/bayonne/gad-elmaleh-7175554.amp.html">
				Gad Elmaleh in the Basque Country: “I learned to take hits”</a>
				<p>Gad Elmaleh is on tour with "D’ailleurs": he was this Monday, November 29 in Biarritz, before two evenings in Arcachon. The comedian gets back on his feet in a more intimate and introspective show. Interview at the edge of the waves ...</p>	
			</div>
		</div>
		<div class="news-col">
			<div class="layer">
				<a href="https://www.programme-tv.net/news/tv/288617-il-ma-dit-un-truc-que-je-retiendrai-toute-ma-vie-gad-elmaleh-emu-en-evoquant-sa-rencontre-avec-francois-florent-dans-tpmp-video/">
				"He told me something that I will remember as long as I live": Gad Elmaleh moved by evoking his meeting with François Florent in TPMP</a>
				<p>Invited in "Touche Pas A Mon Poste" this Thursday, December 2, Gad Elmaleh returned with emotion to his meeting with François Florent, founder of Cours Florent, who passed away last September.</p>	
				<img src="images/news4.jpg">
			</div>
		</div>
	</div>
</section>

<!------About----->

<section class="about">
	<h1>About Me</h1>
	<p>Your Source Of Entertainment</p>
	
	<div class="row">
		<div class="about-col">
			<p>Born and raised in Casablanca, Morocco, I started working as a Stand-up Comedian out of my pure love of entertaining others. Since 1997, I have been making people smile across Europe, Canada and the States as a professional. Voted the funniest person in France, named knight of the Order of Arts and Letters by the Minister of Culture and knight of the National Order of Quebec, people just seem to be loving my performances. It’s always a thrill for me to leave my audience knowing I gave them a unique and entertaining experience. My goal is and will always be to see a smile on people's faces.</p>
			<br>
			<img src="images/about.jpeg">
		</div>
	</div>
</section>

<!------ Sign up ----->

<div class="about">
	<h2>What are you waiting for ! Reserve your seat now !!!</h2>
	<p>To see my shows all you have to do is to sign up</p>
</div>

<div class="wrapper">
<div class="main">
		<form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign Up</p>

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
				<button name="submit" class="btn">Register</button>
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
