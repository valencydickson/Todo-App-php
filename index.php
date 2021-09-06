<?php

include_once "header.php";
include_once "form.php";
include_once "database.php";



$data = new Database()


?>

<header class="container-fluid py-5">
    <div class="d-flex justify-content-between align-items-center pb-4">
        <a href="" class="heading text-light">TODO</a>
        <img src="images/icon-moon.svg" alt="sun" class="theme-icon text-light">
    </div>
    <?php echo renderForm() ?>


</header>

<main class="container-fluid">

    <div class="todos">
        <!-- Display all todos -->
        <?php foreach ($data->showData() as $todo) {
            echo  "<div class='card'>
            <div class='card-body d-flex  align-items-center'>
                <img src='images/icon-check.svg' alt='check' class='border border-dark rounded-circle'>
                <span class='ml-3'>$todo[title]</span>
                <img src='images/icon-cross.svg' alt='cross' class='ml-auto'>
            </div>
        </div>";
        } ?>

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

<footer class="container-fluid mt-5">
    <div class="card mb-5">
        <div class="card-body d-flex justify-content-around  align-items-center">
            <p>All</p>
            <p>Active</p>
            <p>Completed</p>
        </div>
    </div>
    <p class="text-center mb-4">Drag and drop to reorder list</p>
</footer>

<script>
    //prevent form resubmission after page refreshing 
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</body>

</html>