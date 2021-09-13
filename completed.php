<?php

require_once("database.php");


$id = $_POST["id"];

$sql = $pdo->prepare("UPDATE todos SET completed = !completed WHERE id = :id ");
$sql->bindValue(':id', $id);
$sql->execute();
header("location:index.php");
