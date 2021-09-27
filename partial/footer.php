<?php require_once __DIR__ . "/../views/variables.php" ?>

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


    //Dark and Light themes

    const modeIcon = document.querySelector(".theme-icon")
    const header = document.querySelector(".header")
    const addTodo = document.querySelector(".add-todo")
    const body = document.querySelector(".body")
    const todosCard = document.querySelectorAll(".todo-card")
    const todosTitle = document.querySelectorAll(".todo")
    const deleteBtn = document.querySelectorAll(".delete-btn")
    const theme = window.localStorage.getItem("theme")
    var toggle = true


    // Dark mode function
    function darkMode() {
        modeIcon.setAttribute("src", "images/icon-sun.svg")
        header.style.backgroundImage = "url(images/bg-mobile-dark.jpg)"
        addTodo.style.backgroundColor = "<?php echo $veryDarkDesaturatedBlue ?>"
        body.style.backgroundColor = "<?php echo $veryDarkBlue ?>"
        todosCard.forEach(todoCard => {
            todoCard.style.backgroundColor = "<?php echo $veryDarkDesaturatedBlue ?>"
        })
        todosTitle.forEach(todoTitle => {
            todoTitle.style.color = "<?php echo $lightGrayishBlue  ?>"
        })
        deleteBtn.forEach(btn => {
            btn.style.color = "<?php echo $lightGrayishBlue2  ?>"
        })

        //change background with screen width

        if ($(window).width() > 760) {
            header.style.backgroundImage = "url(images/bg-desktop-dark.jpg)";
        }
    }

    // Light mode function
    function lightMode() {
        modeIcon.setAttribute("src", "images/icon-moon.svg")
        header.style.backgroundImage = "url(images/bg-mobile-light.jpg)"
        addTodo.style.backgroundColor = "<?php echo $veryLightGray ?>"
        body.style.backgroundColor = "<?php echo $veryLightGrayishBlue ?>"
        todosCard.forEach(todoCard => {
            todoCard.style.backgroundColor = "<?php echo $veryLightGray  ?>"
        })
        todosTitle.forEach(todoTitle => {
            todoTitle.style.color = "<?php echo $darkGrayishBlue  ?>"
        })

        deleteBtn.forEach(btn => {
            btn.style.color = "<?php echo $darkGrayishBlue  ?>"
        })

        if ($(window).width() > 760) {
            header.style.backgroundImage = "url(images/bg-desktop-light.jpg)";
        }
    }

    if (theme === "dark") {
        darkMode()
    }

    modeIcon.addEventListener("click", () => {
        toggle ? darkMode() : lightMode() //toggle functions onclick
        toggle = !toggle
        if (theme === "dark") {
            window.localStorage.setItem("theme", "light");
        } else window.localStorage.setItem("theme", "dark");
    })
</script>

</body>

</html>