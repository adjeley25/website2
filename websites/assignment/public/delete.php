<?php
require 'connect.php';
$stmt = $pdo->prepare('DELETE FROM pageUsers WHERE email = :email');

$values = [
    'email' => $_GET['email']
];
$stmt->execute($values);

echo '<p>Record deleted</p>';
echo '<p><a href="index.php">Back to list</a>';