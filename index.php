<?php require_once("header.php"); ?>


<main class="container-fluid">

    <div class="todos">
        <!-- Display all todos -->
        <?php
        require_once("showTodos.php");
        ?>



    </div>
    <div>
        <div class="card">
            <div class="card-body d-flex justify-content-between  align-items-center">
                <p><span><?php echo  count($todos) ?></span> items left</p>
                <form class="ml-auto" method="post" action="delete.php">
                    <input type="hidden" name="clear" value="clear">
                    <button type="submit" class="btn">Clear Completed</button>
                </form>
            </div>
        </div>
    </div>



</main>

<?php require_once("footer.php"); ?>