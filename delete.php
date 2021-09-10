<?php

$servername = "localhost";
$username = "root";
$dbname = "tutorials";

$id = $_POST["id"];


$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username);
$sql = $pdo->prepare("DELETE FROM todos WHERE id = :id ");
$sql->bindValue(':id', $id);
$sql->execute();
header("location:index.php");
