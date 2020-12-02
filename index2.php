<?php

    include './View/header.php'

?>

<script>
    window.onload= function(){
        projectsButton();
    }
</script>

<div class = "project-grid">

    <h1 class="project-header"> My Projects</h1>

    <p class="project-github"> Check me out on Github! Or browse some of my projects below.</p>

    <a href="./Projects/FIT-Web-Exercises-Week-01-/index.html" class='example1-grid'>
    <div >
            <img src='./View/Public/Images/reeses_pieces.png' class="examples-image">
            <p class = "examples-title">Karb Kings</p>
            <p class = "examples-description">A Ficticious Cleveland Based Candy Store. </p>
            </button>
    </div>
    </a>

    <a href="./Projects/FIT-Project-FortisureFoodFront/index.php" class='example2-grid'>
    <div>
            <img src='./View/Public/Images/fff.PNG' class="examples-image">
            <p class = "examples-title">Fortisure Food Front</p>
            <p class = "examples-description">A Ficticious Mid-West Grocery Store Chain. </p>
            </button>
    </div>
    </a>

    <a href="./Projects/Project2/test.php" class='example3-grid'>
    <div>
            <img src='./View/Public/Images/fb.PNG' class="examples-image">
            <p class = "examples-title">Flappy Bird</p>
            <p class = "examples-description">A Fun Skill Based Game! </p>
            </button>
    </div>
    </a>

</div>

<?php

    include './View/footer.php'

?>