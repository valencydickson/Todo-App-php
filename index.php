<?php require_once("header.php"); ?>


<main class="container-fluid">

    <div class="todos">
        <!-- Display all todos -->
        <?php
        require_once("showTodos.php");
        ?>

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
        <?php } ?>

    </div>
    <div>
        <div class="card">
            <div class="card-body d-flex justify-content-between  align-items-center">
                <p><span><?php echo  count($todos) ?></span> items left</p>
                <p>Clear Completed</p>
            </div>
        </div>
    </div>



</main>

<?php require_once("footer.php"); ?>