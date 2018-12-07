<?php
include_once("header.php");
?>

<div class="row">
    <img class="col-md-3 side_bamboos" src="../img/side_bamboo.png">
    <div class="col-md-6">
        <h1>GIF du mois de
            <?php
            $today = getdate();
            setlocale(LC_TIME, 'fr_FR.utf-8', 'fra');
            echo iconv("ISO-8859-1", "UTF-8", strftime("%B")); ?></h1>
        <img class="gif-show" src="">
        <center ><button class="previous" id="btn-previous" onclick="seePreviousGIF()">Redécouvrez les GIFs des mois précédents</button></center>
    </div>
    <img class="col-md-3 side_bamboos" src="../img/side_bamboo_revert.png">
</div>

<?php
include_once("footer.php");
?>
