<?php
session_start(); // Start or resume session

require_once "Database/connection.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the username and password match
    $sql = "SELECT * FROM registration WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Set session variables to indicate user is logged in
        $_SESSION['loggedin'] = True;
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email']; // Add email to session
        $_SESSION['cid'] = $user['cid'];
        
        // Redirect to profile.php
        header("Location: index.php");
        exit(); // Make sure to exit after redirecting
    } else {
        // Redirect to registrationform.php if login fails
        header("Location: registrationform.php");
        exit();
    }
} else {
    echo "Access denied.";
}

// Close the database connection
$conn = null;
?>