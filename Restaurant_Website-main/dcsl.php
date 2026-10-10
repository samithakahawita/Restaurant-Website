<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Price Grid</title>
    <link rel="stylesheet" href="style.css">
    <style>
     
        .container {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            max-width: 1000px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
        }
        .price-box {
            background: #0078D7;
            color: white;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s, background 0.3s;
        }
        .price-box:hover {
            transform: scale(1.05);
            background: #005a9e;
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
  
</nav>
<br><br>
<center><h1>DCSL Price List</h1></center>
<br><br>

<center><div class="container" id="itemGrid"></div></center> <br><br>

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

<center>
<script>
    const items = [
        { name: "B001 EX SPECIAL 50ML", price: 280 },
        { name: "B002 EX SPECIAL 750ML", price: 4200 },
        { name: "B003 EX SPECIAL 375ML", price: 2100 },
        { name: "B004 EX SPECIAL 180ML", price: 1050 },
        { name: "B005 WHITE LABEL 50ML", price: 295 },
        { name: "B006 WHITE LABEL 750ML", price: 4400 },
        { name: "B007 WHITE LABEL 375ML", price: 2200 },
        { name: "B008 WHITE LABEL 180ML", price: 1100 },
        { name: "B009 OLD ARRACK 50ML", price: 320 },
        { name: "B010 OLD ARRACK 750ML", price: 4800 },
        { name: "B011 OLD ARRACK 375ML", price: 2400 },
        { name: "B012 OLD ARRACK 180ML", price: 1200 },
        { name: "B013 BLACK OPAL 50ML", price: 300 },
        { name: "B014 BLACK OPAL 750ML", price: 4500 },
        { name: "B015 BLACK OPAL 375ML", price: 2250 },
        { name: "B016 BLACK OPAL 180ML", price: 1125 },
        { name: "B017 GALLERY BRANDY 50ML", price: 415 },
        { name: "B018 GALLERY 750ML", price: 6200 },
        { name: "B019 GALLERY 375ML", price: 3100 },
        { name: "B020 GALLERY 180ML", price: 1550 },
        { name: "B021 DCSL STRONG BEER 625ML", price: 800 },
        { name: "B022 DCSL STOUT BEER 625ML", price: 880 },
        { name: "B023 EX SPECIAL 750ML EMPTY", price: 100 },
        { name: "B024 EX SPECIAL 375ML EMPTY", price: 70 },
        { name: "B025 EX SPECIAL 180ML EMPTY", price: 50 },
        { name: "B026 DCSL BEER EMPTY", price: 100 }
    ];

    const grid = document.getElementById('itemGrid');

    items.forEach(item => {
        const div = document.createElement('div');
        div.className = 'price-box';
        div.innerHTML = `<strong><a href="onlineorder.php">${item.name}</a></strong><br>Rs. ${item.price}`;
        grid.appendChild(div);
    });
</script>
</center>


</body>
</html>
