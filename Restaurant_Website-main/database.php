<?php
// DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineorder";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$desc = $_POST['desc'];

// Escape reserved words: `group` (table), `desc` (column)
$sql = "INSERT INTO `group` (`name`, `email`, `phone`, `address`, `desc`) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}

// Correct parameter types: 5 strings => "sssss"
$stmt->bind_param("sssss", $name, $email, $phone, $address, $desc);

if ($stmt->execute()) {
  echo "<h2>✅ Order placed successfully!</h2><a href='menu.html'>Back to Menu</a>";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
