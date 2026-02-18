<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "killianchapelain_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "killianchapelain";
$password = "2320f42159e5e8552cfa064fc2343ddd";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
var_dump($db);
?>