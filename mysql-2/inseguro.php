<?php

$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;

$conn = new mysqli('localhost', 'root', '', 'test');

// $result = $conn->query('INSERT INTO users (email) VALUES ("' . $email . '")');

$result = $conn->query('SELECT * FROM user where id > ' . $id);

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] . '</br>';
}
