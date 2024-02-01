<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["nimi"];
    $email = $_POST["email"];

    // Display welcome message
    echo "<h1>Hello $firstName, welcome to our website!</h1>";
    echo "<p>Your email address is: $email</p>";
} else {
    // Redirect if accessed directly without submitting the form
    header("Location: index.php");
    exit();
}
?>
