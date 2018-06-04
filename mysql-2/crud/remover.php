<?php
$conn = require('connection.php');

$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('DELETE FROM user WHERE id=?');
$stmt->bind_param('i', $id);
$stmt->execute();

header('location: /PHP_Draft/mysql-2/crud/');
