<?php

require_once("database.php");


$id = $_POST["id"] ?? "";
$deleteCompleted = $_POST["clear"] ?? "";

if ($id) {
    $sql = $pdo->prepare("DELETE FROM todos WHERE id = :id ");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("location:index.php");
} else if ($deleteCompleted) {
    $sql = $pdo->prepare("DELETE FROM TODOS WHERE completed = 1");
    $sql->execute();
    header("location:index.php");
}
