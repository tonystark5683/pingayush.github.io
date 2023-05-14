<?php
// Replace with your database credentials
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

// Retrieve data from database
$sql = "SELECT * FROM flow_data ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

$conn->close();

// Output data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
