<?php

$conn = require 'connection.php';

$result = $conn->query('SELECT * FROM user');
$users = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
        <thead>
            <tr>
                <th> # </th>
                <th> Email </th>
                <th> Visualizar </th>
                <th> Remover </th>
                <th> Alterar </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?><br></td>
                <td>
                    <a href="/PHP_Draft/mysql-2/crud/ver.php?id=<?php echo $user['id']; ?>"> ver</a>
                </td>
                <td>
                    <a href="/PHP_Draft/mysql-2/crud/remover.php?id=<?php echo $user['id']; ?>"> remover</a>
                </td>
                <td>
                    <a href="/PHP_Draft/mysql-2/crud/editar.php?id=<?php echo $user['id']; ?>"> editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p align="center"><a href="/PHP_Draft/mysql-2/crud/adicionar.php">adicionar</a></p>
    <hr>
</body>
</html>
