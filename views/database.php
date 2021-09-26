<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];

$dbname = "heroku_a72882d8a7fa6ad";

$pdo = new PDO("mysql:host=$cleardb_server;dbname=$dbname", $cleardb_username, $cleardb_password);
