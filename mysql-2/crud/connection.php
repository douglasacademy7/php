<?php

$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_errno) {
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

return $conn;
