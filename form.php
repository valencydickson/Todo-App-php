<?php

include_once "database.php";

function renderForm()
{

    $file = $_SERVER["PHP_SELF"];
    return ("
    <form method='post' action= $file>
     <div class='form-group'>
        <input type='text' class='form-control' name='todo' placeholder='Create a new todo'>
     </div>
    </form>
    
    ");
}


$data = new Database();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["todo"];
    $completed = false;
    if ($title) {
        $data->insertData($title, $completed);
    }
}
