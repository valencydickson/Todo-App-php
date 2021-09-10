<?php

class Database
{

    public $servername = "localhost";
    public $username = "root";
    public $dbname = "tutorials";


    function insertData($title, $completed)
    {
        $pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username);
        $sql = $pdo->prepare("INSERT INTO todos(title,completed)
            VALUES (:title,:completed)");
        $sql->bindParam(":title", $title);
        $sql->bindParam("completed", $completed);
        $sql->execute();
    }

    function showData()
    {
        $pdo = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username);
        $sql = $pdo->prepare("SELECT * FROM todos");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC); //fetch data from database
    }
}
