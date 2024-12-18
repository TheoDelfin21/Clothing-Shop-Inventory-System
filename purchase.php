<?php
// Database Connection
$conn = new mysqli('localhost', 'root', '', 'project_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data and validate
$product_name = $_POST['product_name'];
$price = (float) $_POST['price'];
$quantity = (int) $_POST['quantity'];
$total_price = $price * $quantity;

// Prepared Statement to insert data
$stmt = $conn->prepare("INSERT INTO orders (product_name, quantity, price, total_price, created_at) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param("sidd", $product_name, $quantity, $price, $total_price);

if ($stmt->execute()) {
    echo "Purchase successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
