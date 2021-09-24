<?php

require_once __DIR__ . "/../views/database.php";

$sql = $pdo->prepare("SELECT * FROM todos  ORDER BY id DESC");
$sql->execute();
$todos = $sql->fetchAll(PDO::FETCH_ASSOC);
