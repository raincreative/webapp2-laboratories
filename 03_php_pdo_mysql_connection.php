
<?php

$host = 'localhost'; // your localhost name
$db = 'webapp2act'; // your database name
$user = 'root'; // your mysql user
$password = ''; // your mysql password


$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected to the $db database successfully!";


    }
} catch (PDOException $e) {
    echo $e->getMessage();
}