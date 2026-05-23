<?php
include "db.php";

$result = $conn->query("SELECT * FROM orders");

echo "<h2>Order Details</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Product</th>
<th>Quantity</th>
</tr>";

while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>".$row['id']."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['product']."</td>
    <td>".$row['quantity']."</td>
    </tr>";
}

echo "</table>";
?>