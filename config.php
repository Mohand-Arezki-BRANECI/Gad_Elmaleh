<?php 

$server = "localhost";
$user = "root";
$pass = ""; #Si vous avez un mot de passe tappez le ici!
$database = "login_register";
$port = 3306;

$conn = mysqli_connect($server, $user, $pass, $database, $port);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>