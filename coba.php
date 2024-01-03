<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Retrieve user data
$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

// Display user data
echo "<h1>{$user['name']}</h1>";
echo "<p>Email: {$user['email']}</p>";
echo "<p>Phone: {$user['phone']}</p>";
?>