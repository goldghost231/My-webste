<?php
// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate input (you should perform more thorough validation in a real application)
    if (empty($username) || empty($email) || empty($password)) {
        // Handle empty fields
        echo "All fields are required.";
    } else {
        // Process the form data (e.g., save to database)
        // In this example, we'll just print the submitted data
        echo "Username: $username<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        // You would typically perform database operations here to store the user data
    }
}
?>
