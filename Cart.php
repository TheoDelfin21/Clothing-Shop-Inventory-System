<?php
// Database Connection
$conn = new mysqli('localhost', 'root', '', 'project_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and validate
$product_name = isset($cart_item['product_name']) ? $cart_item['product_name'] : 'Default Product';
$price = isset($cart_item['price']) ? $cart_item['price'] : 0;
$quantity = isset($cart_item['quantity']) ? $cart_item['quantity'] : 1;
$total_price = $price * $quantity;

// Prepared Statement to insert data
$stmt = $conn->prepare("INSERT INTO orders (product_name, quantity, price, total_price, created_at) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param("sidd", $product_name, $quantity, $price, $total_price);

session_start(); // Start the session

// Check if the purchase was successful
if (isset($_SESSION['purchase_success']) && $_SESSION['purchase_success'] === true) {
    echo "Purchase successful!";
    // Optionally, unset the session variable after displaying the message
    unset($_SESSION['purchase_success']);
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Eleganza</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function updateTotalPrice(price, inputId, totalId) {
            const quantity = document.getElementById(inputId).value;
            const totalPrice = price * quantity;
            document.getElementById(totalId).textContent = `Total: ₱${totalPrice.toFixed(2)}`;
        }

        function checkout() {
            alert("Thank you for your purchase! Your order is being processed.");
        }
    </script>
</head>
<body>
    <section>
        <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.html">About</a></li>
                <li><a href="Contacts.html">Contacts</a></li>
            </ul>    
                <div class="auth-buttons">
                    <a href="Authentication/registration.php" class="linkcustom">
                    <p>Sign up</p></a>
                    <a href="Authentication/Login.php" class="linkcustom">
                    <p>Log in</p></a>
                <button class="cartBtn">
                    <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                    </svg>
                    <a href="Cart.php" class="carttxt">
                    <p>CART</p></a>
                </button>
            </div>
        </header>

        <main class="cart-container">
            <h1>Cart</h1>
            <p>Review the items you want to purchase:</p>
            <div class="cart-items">

                <h2>Clothes</h2>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Magnificent Long Sleeve">
                        <input type="hidden" name="price" value="600">
                        <img src="image/clothes.png" alt="Shirt">
                        <h3>Magnificent Long Sleeve</h3>
                        <p>Magnificent style for any occasion, from casual to formal.</p>
                        <p>Price: ₱600</p>
                        <label for="qty2">Quantity:</label>
                        <input type="number" id="qty2" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Rose Allure Dress">
                        <input type="hidden" name="price" value="750">
                        <img src="image/clothes2.png" alt="Jacket">
                        <h3>Rose Allure Dress</h3>
                        <p>Turn heads with this striking and sophisticated crimson look.</p>
                        <p>Price: ₱750</p>
                        <label for="qty2">Quantity:</label>
                        <input type="number" id="qty2" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Majestic Long Sleeve">
                        <input type="hidden" name="price" value="450">
                        <img src="image/clothes3.png" alt="Pants">
                        <h3>Majestic Long Sleeve</h3>
                        <p>Regal design, perfect for any occasion.</p>
                        <p>Price: ₱450</p>
                        <label for="qty3">Quantity:</label>
                        <input type="number" id="qty3" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Red Poppy Dress">
                        <input type="hidden" name="price" value="650">
                        <img src="image/clothes4.png" alt="Hoodie">
                        <h3>Red Poppy Dress</h3>
                        <p>A stunning blend of passion and grace.</p>
                        <p>Price: ₱650</p>
                        <label for="qty4">Quantity:</label>
                        <input type="number" id="qty4" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <h2>Shoes</h2>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Casual Sneakers">
                        <input type="hidden" name="price" value="4500">
                        <img src="image/shoes1.png" alt="Sneakers">
                        <h3>Casual Sneakers</h3>
                        <p>Comfortable and versatile sneakers.</p>
                        <p>Price: ₱4,500</p>
                        <label for="qty5">Quantity:</label>
                        <input type="number" id="qty5" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Alabaster Heels">
                        <input type="hidden" name="price" value="3400">
                        <img src="image/shoes2.png" alt="Boots">
                        <h3>Alabaster Heels</h3>
                        <p>Durable and stylish heels for modern and elegant design.</p>
                        <p>Price: ₱3,400</p>
                        <label for="qty6">Quantity:</label>
                        <input type="number" id="qty6" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Urban Kicks">
                        <input type="hidden" name="price" value="4100">
                        <img src="image/shoes3.png" alt="Running Shoes">
                        <h3>Urban Kicks</h3>
                        <p>Elevate your style with the perfect pair of urban kicks.</p>
                        <p>Price: ₱4,100</p>
                        <label for="qty7">Quantity:</label>
                        <input type="number" id="qty7" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>

                <div class="product-card">
                    <form action="purchase.php" method="POST">
                        <input type="hidden" name="product_name" value="Vintage Sandals">
                        <input type="hidden" name="price" value="2300">
                        <img src="image/shoes4.png" alt="Sandals">
                        <h3>Vintage Sandals</h3>
                        <p>Timeless style and comfort in every step.</p>
                        <p>Price: ₱2,300</p>
                        <label for="qty8">Quantity:</label>
                        <input type="number" id="qty8" name="quantity" min="1" max="10" value="1">
                        <button type="submit">Purchase</button>
                    </form>
                </div>       
            </div>
        </main>

        <footer class="footer">
            <div class="main">
                <div class="row">
                    <div class="footer_col">
                        <h4>Contact us</h4>
                        <ul>
                            <li><a href="Contact.html">Instagram</a></li>
                            <li><a href="Contact.html">Facebook</a></li>
                            <li><a href="Contact.html">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>
