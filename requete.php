<?php


$pdo = new PDO ('mysql:dbname=studi_okaz;host=localhost;charset=utf8mb4', 'root', '');
$id = (int)$_GET['id'];
$query = $pdo->prepare('SELECT * FROM listing WHERE id = :id');
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);