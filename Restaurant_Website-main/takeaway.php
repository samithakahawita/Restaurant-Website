<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
   
    .menu-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 15px; }
    .item { background: white; border: 1px solid #ccc; padding: 10px; text-align: center; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.2s; }
    .item:hover { transform: scale(1.05); }
    .item img { width: 100%; height: 120px; object-fit: cover; border-radius: 6px; }
    .item-name { font-weight: bold; margin-top: 8px; }
    .item-price { color: green; margin-bottom: 5px; }
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


</head>
<body><br><br>

<center><h1>Takeaway Menu</h1></center><hr><br><br>
  <div class="menu-container" id="menu"></div>

  <script>
    const items = [
      { name: "SP CHICKEN RICE", price: "Rs.1,200", image: "images/chicken.jpeg", link: "takeawayonline.php" },
      { name: "Veg Pizza", price: "Rs.1,500", image: "images/veg_pizza.jpg", link: "takeawayonline.php" },
      { name: "Beef Sub", price: "Rs.1,200", image: "images/beef_sub.jpeg", link: "takeawayonline.phpl" },
      { name: "Cheese Sandwich", price: "Rs.350", image: "images/cheese_sandw.jpeg", link: "takeawayonline.php" },
      { name: "Fish Tacos", price: "Rs.1,300", image: "images/fish_taco.jpg", link: "takeawayonline.php" },
      { name: "Spicy Wings", price: "Rs.840", image: "images/spicy_wings.jpg", link: "takeawayonline.php" },
      { name: "Grilled Chicken", price: "Rs.1,400", image: "images/grilled_chicken.jpeg", link: "takeawayonline.php" },
      { name: "Veggie Wrap", price: "Rs.640", image: "images/vegi_wrap.jpeg", link: "takeawayonline.php" },
      { name: "Beef Burrito", price: "Rs.1,195", image: "images/beef_burritos.jpeg", link: "takeawayonline.php" },
      { name: "Pasta Alfredo", price: "Rs.1,650", image: "images/Pasta_alfredo.jpeg", link: "takeawayonline.php" },
      { name: "Chicken Nuggets", price: "Rs.1,200", image: "images/chicken_nuggets.jpg", link: "takeawayonline.php" },
      { name: "Veg Salad", price: "Rs.700", image: "images/vege_salad.jpeg", link: "takeawayonline.php" },
      { name: "BBQ Ribs", price: "Rs.1,600", image: "images/BBQ_ribs.jpeg", link: "takeawayonline.php" },
      { name: "Paneer Tikka", price: "Rs.695", image: "images/paneer_tikka.jpeg", link: "takeawayonline.php" },
      { name: "Egg Roll", price: "Rs.400", image: "images/egg_roll.jpeg", link: "takeawayonline.php" },
      { name: "Pepperoni Pizza", price: "Rs.2,200", image: "images/pepperoni_pizza.jpeg", link: "takeawayonline.php" },
      { name: "Shrimp Fried Rice", price: "Rs.1,800", image: "images/shrimp_FRice.jpeg", link: "takeawayonline.php" },
      { name: "Falafel Wrap", price: "Rs.850", image: "images/falafel_wraps.jpeg", link: "takeawayonline.php" },
      { name: "Lamb Curry", price: "Rs.1,100", image: "images/lamb_curry.jpeg", link: "takeawayonline.php" },
      { name: "Tuna Sandwich", price: "Rs.475", image: "images/tuna_sandw.jpeg", link: "takeawayonline.php" },
      { name: "Chicken Tikka", price: "Rs.270", image: "images/chicken_tikka.jpeg", link: "takeawayonline.php" },
      { name: "Beef Steak", price: "Rs.800", image: "images/beef_steak.jpeg", link: "takeawayonline.php" },
      { name: "Samosa", price: "Rs.800", image: "images/samosa.jpeg", link: "takeawayonline.php" },
      { name: "Chicken Biryani", price: "Rs.2,200", image: "images/chicken_biryani.jpeg", link: "takeawayonline.php" },
      { name: "Veg Biryani", price: "Rs.1,650", image: "images/veg_biryani.jpeg", link: "takeawayonline.php" },
      { name: "Cheese Fries", price: "Rs.680", image: "images/cheese_fries.jpeg", link: "takeawayonline.php "},
      { name: "Grilled Fish", price: "Rs.450", image: "images/grilled_fish.jpeg", link: "takeawayonline.php" },
      { name: "Mutton Curry", price: "Rs.1,800", image: "images/mutton_curry.jpeg", link: "takeawayonline.php" },
      { name: "Veg Noodles", price: "Rs.1,100", image: "images/veg_noodles.jpeg", link: "takeawayonline.php" },
      { name: "Chicken Shawarma", price: "Rs.600", image: "images/chicken_shawarma.jpeg", link: "takeawayonline.php" },
      { name: "Prawn Curry", price: "Rs.2,200", image: "images/prawn_curry.jpeg", link: "takeawayonline.php" },
      { name: "Spring Rolls", price: "Rs.350", image: "images/spring_roll.jpeg", link: "takeawayonline.php" },
      { name: "Mushroom Pizza", price: "Rs.1600", image: "images/mushroom_pizza.jpeg", link: "takeawayonline.php" },
      { name: "Chicken Wrap", price: "Rs.650", image: "images/chicken_wrap.jpeg", link: "takeawayonline.php" },
      { name: "Tofu Curry", price: "Rs.900", image: "images/tofu_curry.jpeg", link: "takeawayonline.php" },
      { name: "Garlic Bread", price: "Rs.400", image: "images/garlic_bread.jpeg", link: "takeawayonline.php" },
      { name: "Beef Burger", price: "Rs.750", image: "images/beef_burger.jpeg", link: "takeawayonline.php" },
      { name: "Veg Roll", price: "Rs.250", image: "images/veg_roll.jpeg", link: "takeawayonline.php" },
      { name: "Fried Chicken", price: "Rs.750", image: "images/fried_chicken.jpeg", link: "takeawayonline.php" },
      { name: "Cheese Pasta", price: "Rs.1500", image: "images/cheese_pasta.jpeg", link: "takeawayonline.php" },
      { name: "Egg Curry", price: "Rs.1300", image: "images/egg_curry.jpeg", link: "takeawayonline.php" },
      { name: "Paneer Butter Masala", price: "Rs.1650", image: "images/paneer_butter_masala.jpeg", link: "takeawayonline.php" },
      { name: "Meatballs", price: "Rs.1100", image: "images/meatballs.jpeg", link: "takeawayonline.php" },
      { name: "Corn Salad", price: "Rs.1600", image: "images/corn_salad.jpeg", link: "takeawayonline.php" },
      { name: "Ice Cream Sundae", price: "Rs.450", image: "images/ice-cream_sundae.jpeg", link: "takeawayonline.php" },
      { name: "Fruit Salad", price: "Rs.550", image: "images/fruit_salad.jpeg", link: "takeawayonline.php" },
      { name: "Club Sandwich", price: "Rs.1200", image: "images/club_sandw.jpeg", link: "takeawayonline.php" },
      { name: "Cold Coffee", price: "Rs.600", image: "images/cold_coffee.jpeg", link: "takeawayonline.php" },
      { name: "Lemonade", price: "Rs.350", image: "images/lemonade.jpeg", link: "takeawayonline.php" }
    ];

    const menuDiv = document.getElementById("menu");

    items.forEach(item => {
      const itemDiv = document.createElement("a");
      itemDiv.className = "item";
      itemDiv.href = item.link;
      itemDiv.innerHTML = `
        <img src="${item.image}" alt="${item.name}" />
        <div class="item-name">${item.name}</div>
        <div class="item-price">${item.price}</div>
      `;
      menuDiv.appendChild(itemDiv);
    });
  </script>

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
</body>
</html>