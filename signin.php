<?php
// Enable error reporting and display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Debugging output - print form data
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";

    // Simulated user credentials (replace with actual authentication logic)
    $valid_username = "example_user";
    $valid_password = "example_password";

    // Validate input and authenticate user
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        // Redirect user to the dashboard page or any other page
        header("Location: dashboard.php");
        exit; // Ensure that script execution stops after redirection
    } else {
        // Authentication failed
        // Redirect user back to the sign-in page with an error message
        header("Location: signin.html?error=1");
        exit; // Ensure that script execution stops after redirection
    }
}
?>
