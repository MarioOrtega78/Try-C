<?php
// display_data.php

// Connect to your MySQL database
$host = "localhost"; // Change to your database host
$username = "your_username"; // Change to your database username
$password = "your_password"; // Change to your database password
$dbname = "your_database"; // Change to your database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT name, email FROM users";
$result = $conn->query($sql);

// Display the data
if ($result->num_rows > 0) {
    echo "<h1>User Data</h1>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Name: " . $row["name"] . ", Email: " . $row["email"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No data found.";
}

$conn->close();
?>
