<?php

require_once __DIR__ . "/../views/database.php";


$completed = false;

$title = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["title"])) {
        header("location:../");
        exit;
    }
    $title = test_input($_POST["title"]);
    $sql = $pdo->prepare("INSERT INTO todos(title,completed)
        VALUES (:title,:completed)");
    $sql->bindParam(":title", $title);
    $sql->bindParam("completed", $completed);
    $sql->execute();
    header("location:../");
} else {
    header("location:../");
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
