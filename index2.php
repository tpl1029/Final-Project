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

    <a href="" class='example1-grid'>
    <div >
            <img src='./View/Public/Images/reeses_pieces.png' class="examples-image">
            <p class = "examples-title">Karb Kings</p>
            <p class = "examples-description">A Cleveland Based Candy Store. </p>
            </button>
    </div>
    </a>

    <a href="" class='example2-grid'>
    <div>
            <img src='./View/Public/Images/fff.PNG' class="examples-image">
            <p class = "examples-title">Fortisure Food Front</p>
            <p class = "examples-description">A Mid-West Grocery Store Chain. </p>
            </button>
    </div>
    </a>

    <a href="" class='example3-grid'>
    <div>
            <img src='./View/Public/Images/fb.PNG' class="examples-image">
            <p class = "examples-title">Flappy Bird</p>
            <p class = "examples-description">A Fun Skill Based Game! </p>
            </button>
    </div>
    </a>



<p class="project-github"> Check Me Out On Github!</p>

</div>

<?php

    include './View/footer.php'

?>