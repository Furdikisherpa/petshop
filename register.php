<?php
require_once "Database/connection.php"; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $username = $_POST["username"];
    $address = $_POST["address"];
    $contact_no = $_POST["contact_no"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert data into the database
    $sql = "INSERT INTO registration (full_name, username, address, contact_no, email, password) VALUES (:full_name, :username, :address, :contact_no, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":full_name", $name);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":contact_no", $contact_no);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);

    if ($stmt->execute()) {
        header("Location: loginform.php");
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->errorInfo()[2];
    }

    // Close the statement
    $stmt->closeCursor();
}

// Close the database connection
$conn = null;
?>