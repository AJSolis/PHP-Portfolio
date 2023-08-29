<?php

require "../database/database.php";
require "../views/include/header.html";

$insertQuery = "INSERT INTO users (id, first_name, last_name, email) VALUES (id, first_name, last_name, email)";

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_password = $_POST['verify_password'];

    $password = $_POST['password'];
    $verify_password = $_POST['verify_password'];

    $sql = "INSERT INTO users (id, first_name, last_name, email, password) VALUES ('$id', '$first_name', '$last_name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->connect_error;
    }
} else {
    echo "<h1>Password does not match</h1>";
}

?>