<?php

require_once("database.php");

$title = $_POST["todo"];
$completed = false;


if ($_SERVER["REQUEST_METHOD"] == "POST" && $title) {


    $sql = $pdo->prepare("INSERT INTO todos(title,completed)
        VALUES (:title,:completed)");
    $sql->bindParam(":title", $title);
    $sql->bindParam("completed", $completed);
    $sql->execute();
    header("location:index.php");
} else {
    header("location:index.php");
}
