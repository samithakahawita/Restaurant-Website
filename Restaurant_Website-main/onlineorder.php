<?php
$host = "localhost";
$user = "root";
$password = ""; // set your DB password
$dbname = "onlineorder";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $sql = "INSERT INTO online (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $msg = "Order submitted successfully!";
    } else {
        $msg = "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Order Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        .form-container {
    background-color: #ffffff;
    padding: 30px 40px;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    max-width: 400px;
    width: 100%;
}

/* Header Styling */
.form-container h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #333333;
}

/* Label Styling */
.form-container label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555555;
}

/* Input Field Styling */
.form-container input[type="text"],
.form-container input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #cccccc;
    border-radius: 8px;
    font-size: 14px;
}

/* Button Styling */
.form-container button {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-container button:hover {
    background-color: #0056b3;
}

/* Message Styling */
.message {
    background-color: #f0f0f0;
    padding: 10px;
    margin-bottom: 15px;
    border-left: 5px solid #007bff;
    border-radius: 5px;
    color: #333;
}
    </style>
<nav>
    <ul class="nav-links">
        <li><a href="home.php">A & B Restaurant</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        
        <li>
            <a href="menu.php">Menu ▼</a>
            <div class="dropdown-content">
                <a href="#">Takeaway</a>
                <a href="#">Familt Restaurant</a>
                <a href="#">Bar</a>
                <a href="">Bekary Items</a>
            </div>
        </li>
        <li><a href="login.php">Login</a></li>
         <li><a href="card.php">Card Payment</a></li>
    </ul>

    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit">Go</button>
    </div>
  
</nav>
    <center><div class="form-container">
        <h2>Login & Order Form</h2>
        <?php if ($msg != "") echo "<p class='message'>$msg</p>"; ?>
        <form method="post" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <button type="submit">Submit Order</button>
        </form>
    </div></center>
    <footer class="site-footer">
  <div class="footer-description">
      <h2>Bar & Family Takeaway</h2>
      <p>We serve delicious food & drinks for family gatherings and night outs. Takeaway available!</p>
  </div>

  <div class="footer-socials">
      <a href="https://www.facebook.com/" target="_blank" class="social-icon fb">Facebook</a>
      <a href="https://wa.me/1234567890" target="_blank" class="social-icon wa">WhatsApp</a>
      <a href="https://www.instagram.com/" target="_blank" class="social-icon ig">Instagram</a>
  </div>

  <div class="footer-bottom">
      <p>&copy; 2025 Bar & Family Takeaway. All Rights Reserved.</p>
  </div>
</footer>
</body>
</html>
