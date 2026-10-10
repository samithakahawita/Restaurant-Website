<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style >
       .page-background {
        
        background-size: cover;
        background-position: center;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }
        .container {
            font-family: Arial, sans-serif;
            
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: black;
        }

        label {
            font-size: 18px;
            color: black;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"], input[type="reset"] {
            width: 48%; /* Reduce width of buttons to fit them in a small space */
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 4%; /* Space between the buttons */
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: black;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"] {
            background-color: #f44336;
            color: black;
            border: none;
        }

        input[type="reset"]:hover {
            background-color: #e53935;
        }

        h4 {
            color: black;
            font-size: 18px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        input[type="submit"]:nth-child(2) {
            background-color: #2196F3;
        }

        input[type="submit"]:nth-child(2):hover {
            background-color: #1e88e5;
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
                <a href="#">Family Restaurant</a>
                <a href="#">Bar</a>
                <a href="#">Bakery Items</a>
            </div>
        </li>
        <li><a href="login.php">Login</a></li>
         <li><a href="card.php">Card Payment</a></li>
    </ul>

    <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit">Go</button>
    </div>
</nav><br><br><br><br><br>

<div class="page-background">
<div class="container">
    <h1>Login Page</h1>
    <form action="signup.php" method="post">
        <label>First Name:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label>last Name:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label>Email:</label><br>
        <input type="text" name="email" id="email"><br><br>
        <label>Phone Number:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label>Password:</label><br>
        <input type="password" name="Password" id="password"><br>
        <input type="submit" name="submit" value="Submit" id="submit" onclick="valid()"><br><br>
        <input type="reset" value="Clear"><br><br>
        <h4>Login Here!</h4><br>

        <a href="login.php"><input type="submit" value="Login"></a>
    </form><br><br><br><br>
</div> </div>


   
<!-- Footer -->
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

