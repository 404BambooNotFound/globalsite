<?php
include_once('view/header.php');
?>

    <div class="container text-center" id="child">
        <div class="row">
            <img class="homeImage" src="img/404.png">
        </div>
        <div class="row">
            <p class="homeText">Oops ! On a perdu nos bambous !</p>
        </div>
        <div class="row">
            <p class="homeText">Trouve-les pour nous !</p>
        </div>
        <div class="row">
            <button class="helpButton" onclick="launchBot()">Demander de l'aide</button>
        </div>
    </div>


<?php
include_once('view/footer.php');
?>