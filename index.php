<?php include_once("header.php"); ?>

<header class="container-fluid py-5">
    <div class="d-flex justify-content-between align-items-center pb-4">
        <a href="" class="heading text-light">TODO</a>
        <img src="images/icon-moon.svg" alt="sun" class="theme-icon text-light">
    </div>
    <?php
    include_once("form.php");
    echo renderForm()
    ?>
</header>

<main class="container-fluid">

    <div class="todos">
        <!-- Display all todos -->
        <?php
        include_once("database.php");
        $data = new Database();
        $todos = $data->showData(); ?>


        <?php foreach ($todos as $todo) { ?>
            <div class="card">
                <div class="card-body d-flex  align-items-center">
                    <i class="far fa-circle check"></i>
                    <span class="ml-3"><?php echo $todo['title'] ?></span>
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
                <p>3 items left</p>
                <p>Clear Completed</p>
            </div>
        </div>
    </div>



</main>

<?php include_once("footer.php"); ?>