<?php
// process_form.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate and sanitize the data (you can add more validation here)

    // Connect to your MySQL database
    $host = "localhost"; // Change to your database host
    $username = "your_username"; // Change to your database username
    $password = "your_password"; // Change to your database password
    $dbname = "your_database"; // Change to your database name

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
