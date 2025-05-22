<?php
$host = "localhost";
$dbname = "your_database_name";
$username = "your_db_username";
$password = "your_db_password";

// Connect to DB
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert into DB
$sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
  echo "<h2>Thank you, $name. Your message has been saved!</h2>";
} else {
  echo "Error: " . $stmt->error;
}

$conn->close();
?>
