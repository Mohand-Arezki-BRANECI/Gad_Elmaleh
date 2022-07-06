<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Water+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Welcome</title>
</head>
<body>

<div class="sub-header">
	<div class="disconnect">
		<?php echo "<h2>Welcome " . $_SESSION['username'] . "</h2>"; ?>
		<button class="btn2"><a href="logout.php">Log out</a> </button>
	</div>
</div>




<section class="shows">
	<h1>Shows</h1>
	<p>Smile Like You Mean It</p>
	<div class="row">
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/december.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-14.png"/>
			<h3>SAINT-BRIEUC - D’AILLEURS </h3>
			<p>20h - Location : Hermione </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/495273">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/december.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-16.png"/>
			<h3>CARHAIX - D’AILLEURS</h3>
			<p>20h - Location : Espace Glenmor </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482450">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/december.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-17.png"/>
			<h3>PLOUGUERNEAU - D’AILLEURS </h3>
			<p>20h - Location : Armorica</p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482466">ORDER TICKET</a>
		</div>
	</div>	
	<div class="row">	
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-13.png"/>
			<h3>BRUXELLES - D’AILLEURS</h3>
			<p>20h - Location : Forest National</p>
			<br>
			<a href="https://www.teleticketservice.com/fr/event/gad-elmaleh-79182cde">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-18.png"/>
			<h3>PAU - D’AILLEURS</h3>
			<p>20h - Location : Zénith</p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482521">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-19.png"/>
			<h3>BOULAZAC - D’AILLEURS </h3>
			<p>20h - Location : Le Palio </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482544">ORDER TICKET</a>
		</div>
	</div>
	<div class="row">	
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-20.png"/>
			<h3>TOURS - D’AILLEURS</h3>
			<p>20h - Location : Palais Congrès</p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/481795">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-21.png"/>
			<h3>RENNES - D’AILLEURS</h3>
			<p>20h - Location : Le Liberté </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482113">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-25.png"/>
			<h3>STRASBOURG - D’AILLEURS</h3>
			<p>20h - Location : Zénith </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482233">ORDER TICKET</a>
		</div>
	</div>
	<div class="row">	
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/january.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-27.png"/>
			<h3>LILLE - D’AILLEURS</h3>
			<p>20h - Location : Zénith  </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/481959">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/february.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-12.png"/>
			<h3>PARIS - D’AILLEURS </h3>
			<p>20h - Location : Palais Des Sports </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/498543">ORDER TICKET</a>
		</div>
		<div class="show-col">
			<img src="https://img.icons8.com/ios/40/000000/march.png"/><img src="https://img.icons8.com/ios/40/000000/calendar-12.png"/>
			<h3>LYON - D’AILLEURS </h3>
			<p>20h - Location : Tony Garnier </p>
			<br>
			<a href="https://www.ticketmaster.fr/fr/manifestation/gad-elmaleh-billet/idmanif/482497">ORDER TICKET</a>
		</div>
	</div>
</section>
   
<div class="footer">
	<p>All rights reserved ©2021 Gad Elmaleh.</p>
</div>

</body>
</html>