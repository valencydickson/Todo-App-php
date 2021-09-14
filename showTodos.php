<?php

require_once("database.php");

$active = $_POST["active"] ?? "";

if ($active) {
    $sql = $pdo->prepare("SELECT * FROM todos WHERE completed = 0 ORDER BY id DESC");
    $sql->execute();
    $todos = $sql->fetchAll(PDO::FETCH_ASSOC);
    header("location:index.php");
} else {
    $sql = $pdo->prepare("SELECT * FROM todos ORDER BY id DESC");
    $sql->execute();
    $todos = $sql->fetchAll(PDO::FETCH_ASSOC);
}

if ($todos) { ?>
    <?php foreach ($todos as $todo) { ?>
        <div class="card">
            <div class="card-body d-flex  align-items-center">
                <form method="post" action="completed.php">
                    <input type="hidden" name="id" value="<?php echo $todo['id'] ?>">
                    <button type="submit" class="btn"> <i class="<?php echo ($todo['completed'] == 1) ? 'fas fa-check-circle' : 'far fa-circle check' ?>"></i></button>
                </form>
                <span class="<?php echo ($todo['completed'] == 1) ? 'todo completed' : 'todo' ?>"><?php echo $todo['title'] ?></span>
                <form class="ml-auto" method="post" action="delete.php">
                    <input type="hidden" name="id" value="<?php echo $todo['id'] ?>">
                    <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
<?php }
} ?>