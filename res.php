<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1>Urban Palate</h1>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#cart">Cart <span id="cart-count">(0)</span></a></li>
            </ul>
        </nav>
    </header>

    <section id="menu">
        <h2>Food Menu</h2>
        <div id="menu-items" class="menu-items">
            <!-- Food menu items here -->
        </div>
    </section>
    
    <section id="beverages">
        <h2>Beverage Menu</h2>
        <div id="beverage-items" class="menu-items">
            <!-- Beverage menu items here -->
        </div>
    </section>
    

    <section id="cart">
        <h2>Cart</h2>
        <div id="cart-items" class="cart-items">
            <!-- Cart items will be dynamically inserted here -->
        </div>
        <div id="cart-total">
            <span>Total: ₹ <span id="total-price">0.00</span></span>
        </div>
        <button id="checkout">Checkout</button>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Email: contact@hotelrestaurant.com</p>
        <p>Phone: (123) 456-7890</p>
    </section>

    <footer>
        <p>&copy; 2024 Hotel Restaurant</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>