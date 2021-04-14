<?php
$conn = mysqli_connect('db', 'user', 'password', 'db', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Users';
$result = mysqli_query($conn, $query);
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h1>It works!</h1>
    <ul>
        <? while ($user = $result->fetch_assoc()) : ?>
                <li><?= $user['name'] ?></li>
        <? endwhile; ?>
    </ul>
    </body>
    </html>
<?
$result->close();
mysqli_close($conn);
?>