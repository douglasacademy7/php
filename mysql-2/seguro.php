<?php

$id = $_GET['id'] ?? 0;
$id2 = $_GET['id2'] ?? 0;

$conn = new mysqli('localhost', 'root', '', 'test');

$stmt = $conn->prepare('SELECT * FROM user where id > ? and id < ?');

/**
 * i = integer
 * s = string
 * b = blob
 * d = double
 */
$stmt->bind_param('ii', $id, $id2);

$stmt->execute();

$result = $stmt->get_result();

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'] . ' - ' . $user['email'] . '</br>';
}
