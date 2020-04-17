<?php
	//Database (DB) information here
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FakeNewsDetector";

	//Creating and checking database connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed:" . $conn->connect_error);
	}

	//Things we are entering in the database
	$fakenews = $_POST['fakenews'];
	$realnews = $_POST['realnews'];
	

	// Creating SQL string
	$sql = "INSERT INTO FakeNewsDetector (fakenews,realnews) VALUES ('$fakenews', '$realnews')";

	//Send query, and check to ensure there are no errors
	if($conn->query($sql) === TRUE) {
		echo "New record created successfully.";
	}
	else {
		"Error: " . $sql . "<br>" . $conn->error;
	}

	// Close DB connection
	$conn->close();
?>