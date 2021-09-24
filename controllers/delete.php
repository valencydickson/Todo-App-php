<?php

require_once __DIR__ . "/../views/database.php";


$id = $_POST["id"] ?? ""; //individual todo
$deleteCompleted = $_POST["clear"] ?? ""; //all completed todos

if ($id) {
    $sql = $pdo->prepare("DELETE FROM todos WHERE id = :id ");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("location:../index.php");
} else if ($deleteCompleted) {
    $sql = $pdo->prepare("DELETE FROM TODOS WHERE completed = 1");
    $sql->execute();
    header("location:../index.php");
}
