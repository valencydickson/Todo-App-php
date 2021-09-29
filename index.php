<?php require_once __DIR__ . "/partial/header.php" ?>

<body class="body">
    <header class="container-fluid py-5 header">
        <div class="hero container-fluid">
            <div class="d-flex justify-content-between align-items-center pb-4">
                <a href="" class="heading text-light">TODO</a>
                <img src="images/icon-moon.svg" alt="sun" class="theme-icon text-light">
            </div>
            <form method="post" action="<?php echo htmlspecialchars('controllers/create.php') ?>">
                <div class='form-group '>
                    <input type='text' class='form-control add-todo' name="title" placeholder='Create a new todo'>
                </div>
            </form>
        </div>

    </header>


    <main class="container-fluid">
        <div class="todos">
            <!-- Display all todos -->
            <?php

            require_once __DIR__ . "/controllers/todos.php";

            foreach ($todos as $todo) { ?>
                <div class="card my-1">
                    <div class="card-body todo-card d-flex  align-items-center">
                        <form method="post" action="<?php echo htmlspecialchars('controllers/completed.php') ?>">
                            <input type="hidden" name="id" value="<?php echo $todo['id'] ?>">
                            <button type="submit" class="btn"> <i class="<?php echo ($todo['completed'] == 1) ? 'fas fa-check-circle' : 'far fa-circle check' ?>"></i></button>
                        </form>
                        <span class="<?php echo ($todo['completed'] == 1) ? 'todo completed' : 'todo' ?>"><?php echo $todo['title'] ?></span>
                        <form class="ml-auto" method="post" action="<?php echo htmlspecialchars('controllers/delete.php') ?>">
                            <input type="hidden" name="id" value="<?php echo $todo['id'] ?>">
                            <button type="submit" class="btn "><i class="fas fa-trash-alt delete-btn"></i></button>
                        </form>
                    </div>
                </div>
            <?php } ?>


        </div>
        <div class="mt-4 ">
            <div class="card">
                <div class="card-body todo-card d-flex justify-content-between  align-items-center">
                    <p class="todo"><span><?php echo  count($todos) ?></span> items left</p>
                    <form class="ml-auto" method="post" action="<?php echo htmlspecialchars('controllers/delete.php') ?>">
                        <input type="hidden" name="clear" value="clear">
                        <button type="submit" class="btn delete-btn">Clear Completed</button>
                    </form>
                </div>
            </div>
        </div>



    </main>

    <?php require_once __DIR__ . "/partial/footer.php" ?>