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
		$stmt = $conn->prepare("INSERT INTO projectmanage (projectName, projectDesc, projectLeader) VALUES (?, ?, ?)");
		$stmt->bind_param("sss",$projectName, $projectDesc, $projectLeader);
				
		/* Prepared statement, stage 2: bind and execute */
		$projectName = $_POST['projectName'];
		$projectDesc = $_POST['projectDesc'];
		$projectLeader = $_POST['projectLeader'];
		$stmt->execute();
		
		

		$stmt->close();
		$conn->close();
		
		header('Location: project.php');

?>
