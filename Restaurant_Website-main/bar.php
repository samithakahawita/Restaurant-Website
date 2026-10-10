<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Special Bar Items</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* ─── Global Styles ───────────────────────────────────────────────────────── */
    
    h1 {
      margin-bottom: 30px;
    }

    /* ─── Grid Container ─────────────────────────────────────────────────────── */
    .bar-menu {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      justify-items: center;
      justify-content: center;
      align-items: center;
      gap: 60px;  
      margin: 40px 0;
    }

    /* ─── Item Cards ─────────────────────────────────────────────────────────── */
    .bar-item {
      background: #0c0f52;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(136, 59, 59, 0.5);
      cursor: pointer;
      transition: transform 0.3s ease;
      width: 100%;
      max-width: 240px;
      justify-content: center;
      align-items: center;
      gap: 40px;  
      margin: 40px 0;
    }
    .bar-item:hover {
      transform: translateY(-5px);
    }
    .bar-item img {
      display: flex;
      width: 100%;
      height: 160px;
      object-fit: cover;
      
      
    }
    .bar-item h3 {
      margin: 15px 0;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      color:white;
      text-align:center;

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

  <center><h1>🍹 Special Bar Items 🍹</h1></center>
  <div class="bar-menu" id="barMenu">
    <!-- JS will populate items here -->
  </div>
  <br><br>
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
<script>
  // ─── Data ─────────────────────────────────────────────────────────────────
  const barItems = [
    { name: "DCSL",      img: "images/dcsl.jpeg",      link: "dcsl.php" },
    { name: "IDL",       img: "images/idl.jpeg",       link: "#" },
    { name: "ROCKLAND",  img: "images/rockland.png",  link: "#" },
    { name: "BEER",      img: "images/beer.jpeg",      link: "#" },
    { name: "VODKA",     img: "images/vodka.jpeg",     link: "#" },
    { name: "WINE",      img: "images/wine.jpeg",      link: "#" },
    { name: "COGNAC",    img: "images/cognac.jpeg",    link: "#" },
    { name: "COCKTAIL",  img: "images/download (8).jpeg",  link: "#" }
  ];

  // ─── Render Function ──────────────────────────────────────────────────────
  const container = document.getElementById('barMenu');
  barItems.forEach(item => {
    const card = document.createElement('div');
    card.className = 'bar-item';
    card.innerHTML = `
      <a href="${item.link}">
        <img src="${item.img}" alt="${item.name}">
        <h3>${item.name}</h3>
      </a>
    `;
    container.appendChild(card);
  });
</script>


</body>
</html>
