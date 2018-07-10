<?php
// Setting up the time zone
date_default_timezone_set('Asia/Dhaka');

// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'kputest';

// Database Username
$dbuser = 'root';

// Database Password
$dbpass = '';

// Defining base url
define("BASE_URL", "http://localhost/kpu/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $excepiton->getMessage();
}
?>