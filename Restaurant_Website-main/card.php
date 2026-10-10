<?php
// Connection parameters
$host = "localhost";
$user = "root";
$pass = "";
$db = "cardpayment";

// Create database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Car Payment</title>
    <style>
        
        
        .payment-form {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        .payment-form h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .payment-form input, .payment-form select, .payment-form button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .payment-form button {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
        }
        .payment-form button:hover {
            background-color: #218838;
        }
        .success {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>
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
  
</nav><br><br>

<center><div class="payment-form">
    <h2>Car Payment Form</h2>
    <form method="POST" action="">
        <input type="text" name="owner_name" placeholder="Card Owner Name" required>

        <select name="card_type" required>
            <option value="">-- Select Card Type --</option>
            <option value="Visa">Visa</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Amex">American Express</option>
        </select>

        <input type="text" name="card_number" placeholder="Card Number" maxlength="16" required>

        <input type="number" step="0.01" name="total_price" placeholder="Total Price (LKR)" required>

        <button type="submit" name="pay">Pay Now</button>
    </form>


    <?php
    if (isset($_POST['pay'])) {
        $owner = $_POST['owner_name'];
        $type = $_POST['card_type'];
        $number = $_POST['card_number'];
        $price = $_POST['total_price'];

        // Prepare and insert into database
        $stmt = $conn->prepare("INSERT INTO card (name, type, number, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $owner, $type, $number, $price);

        if ($stmt->execute()) {
            echo "<p class='success'>Payment recorded successfully!</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>
</div></center><br><br>
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
