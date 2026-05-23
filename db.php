<?php
$conn = new mysqli("localhost", "root", "", "gem_jewelles");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>