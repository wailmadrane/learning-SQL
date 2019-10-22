<?php
	function openConnection() {
		// Try to figure out what these should be for you
		$dbhost = "database";
		$dbuser = "root";
		$dbpass = "root";
		$db = "becode";
	
		// Try to understand what happens here
		$pdo = new PDO("mysql:host=$dbhost;dbname=$db;charset=utf8",$dbuser,$dbpass);
	
		// Why we do this here
		return $pdo;
	}

	try {
		// create a PDO connection with the configuration data
		$connect = openConnection();

		// display a message if connected to database successfully
		if ($connect) echo "Connected to the <strong>$db</strong> database successfully!";
	}
	catch (PDOException $ex){
		// report error message
		echo $ex->getMessage();
	}
?>
