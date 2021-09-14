<footer class="container-fluid mt-5">
    <div class="card mb-5">
        <div class="card-body d-flex justify-content-around  align-items-center">
            <form method="post" action="showTodos.php">
                <input type="hidden" name="all" value="all">
                <button type="submit" class="btn">All</button>
            </form>
            <form method="post" action="showTodos.php">
                <input type="hidden" name="active" value="active">
                <button type="submit" class="btn">Active</button>
            </form>
            <form method="post" action="showTodos.php">
                <input type="hidden" name="completed" value="completed">
                <button type="submit" class="btn">Completed</button>
            </form>
        </div>
    </div>
    <p class="text-center mb-4">Drag and drop to reorder list</p>
</footer>

<script>
    //prevent form resubmission after page refreshing 
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    //toggle checkbox after click

    const checkBoxes = document.querySelectorAll(".check");
    const todos = document.querySelectorAll(".todo")

    checkBoxes.forEach(checkBox => {
        checkBox.addEventListener("click", () => {
            if (checkBox.classList.contains("fa-circle")) {
                checkBox.classList.remove("far", "fa-circle")
                checkBox.classList.add("fas", "fa-check-circle")

            } else if (checkBox.classList.contains("fa-check-circle")) {
                checkBox.classList.remove("fas", "fa-check-circle")
                checkBox.classList.add("far", "fa-circle")
            }
        })
    })
</script>

</body>

</html>