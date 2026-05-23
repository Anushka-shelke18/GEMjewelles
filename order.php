<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO orders (name, email, product, quantity)
VALUES ('$name', '$email', '$product', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Order Placed Successfully!</h2>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>