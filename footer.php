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

    //toggle checkbox after click

    const checkBoxes = document.querySelectorAll(".check");

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