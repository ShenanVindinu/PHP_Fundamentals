<?php
    $dsn = "mysql:host=localhost;dbname=mydatabase";
    $dbusername = "root";
    $dbpassword = "";
try {
	$pdo = new PDO( $dsn, $dbusername, $dbpassword );
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	Echo "Connection failed: ". $e->getMessage(); 
}
