<?php

$pdo = new PDO("mysql:host=localhost;dbname=dashboard", "root", "", [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$stmt = $pdo->query("SELECT * FROM users LIMIT 1");
$user = $stmt->fetch();


$dateNow = new DateTime();

$dateCreated = new DateTime($user->created_at);

$result = $dateNow->diff($dateCreated);

var_dump(
    $result,
    $result->y,
    $result->m,
    $result->format("%y years %m months %d days %h hours %i minutes %s seconds")
);
