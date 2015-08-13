<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "sarajevo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		/* Prepared statement, stage 1: prepare */
		$stmt = $conn->prepare("INSERT INTO joblist (jobname, jobdesc, jobdept) VALUES (?, ?, ?)");
		$stmt->bind_param("sss",$jobname, $jobdesc, $jobdept);
				
		/* Prepared statement, stage 2: bind and execute */
		$jobname = $_POST['jobname'];
		$jobdesc = $_POST['jobdesc'];
		$jobdept = $_POST['jobdept'];
		$stmt->execute();
		
		

		$stmt->close();
		$conn->close();
		
		header('Location: manufacturing.php');

?>
