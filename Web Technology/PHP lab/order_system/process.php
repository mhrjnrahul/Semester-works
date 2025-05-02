<?php
$prices = ["Laptop" => 1000, "Mobile" => 500, "Tablet" => 300];

$customer = $_POST['customer'];
$product = $_POST['product'];
$quantity = intval($_POST['quantity']);
$unitPrice = $prices[$product] ?? 0;
$total = $unitPrice * $quantity;

echo "<h2>Order Summary</h2>";
echo "Customer Name: " . htmlspecialchars($customer) . "<br>";
echo "Product: " . htmlspecialchars($product) . "<br>";
echo "Quantity: " . $quantity . "<br>";
echo "Unit Price: $" . $unitPrice . "<br>";
echo "Total Price: $" . $total . "<br>";
?>
