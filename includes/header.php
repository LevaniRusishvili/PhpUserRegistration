<?php
session_start();
require_once 'database.php';
require_once 'register-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "login.php">Login</a></li>
            <li><a href = "register.php">Register</a></li>
            <li><a href = "movie.php">Movies</a></li>
        </ul>
    </nav>
</header>    
 