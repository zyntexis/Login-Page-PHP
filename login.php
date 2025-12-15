<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $DB_USERNAME = "admin";
    $DB_PASSWORD = "admin123";

    if ($_POST["username"] === $DB_USERNAME && $_POST["password"] === $DB_PASSWORD) {
        $_SESSION["username"] = $DB_USERNAME;
        header("location: /dashboard.php");
        die();
    } else {
        $_SESSION["login_error"] = "Incorrect Username or Password";
        header("location: /index.php");
        die();
    }
}
