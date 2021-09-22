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


    //Drag and Drop functionality
    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
    }
</script>

</body>

</html>