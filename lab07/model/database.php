<?php
$dsn = 'mysql:host=localhost;dbname=venkatglab';
$username = 'root';
$password = 'root';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $errorMessage = $e->getMessage();
    include 'view/header.php';
    echo '<h1> Database Error </h1>';
    echo '<p>' .$errorMessage. '</p>';
    include 'view/footer.php';
    exit();
}
