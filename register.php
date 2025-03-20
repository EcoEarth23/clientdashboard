<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO customer (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        $_SESSION["username"] = $name;
        $_SESSION["email"] = $email;
        header("Location: redirect.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
