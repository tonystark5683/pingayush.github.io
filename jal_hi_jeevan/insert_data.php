<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jal_hi_jeevan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the flow rate value from the POST request
$flow_rate = $_POST["flow_rate"];

// Insert the flow rate value into the flow_data table
$sql = "INSERT INTO flow_data (flow_rate) VALUES ('$flow_rate')";

if ($conn->query($sql) === TRUE) {
  echo "Flow rate inserted successfully";
} else {
  echo "Error inserting flow rate: " . $conn->error;
}

$conn->close();
?>