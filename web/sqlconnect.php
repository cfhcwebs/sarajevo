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

$sql = "SELECT * FROM humanresources";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["userID"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 