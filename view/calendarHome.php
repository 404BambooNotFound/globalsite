<?php
include_once("header.php");
?>

<div class="row">
    <img class="col-md-3 side_bamboos" src="img/side_bamboo.png">
    <div class="col-md-6">


            <?php
            $today = getdate();
            $img_url = "img/gif/".strftime("%B%Y").".gif";
            setlocale(LC_TIME, 'fr_FR.utf-8', 'fra');
            $month = iconv("ISO-8859-1", "UTF-8", strftime("%B"));?>
            b<h1><?php echo "Aujourd'hui, nous sommes le ". iconv("ISO-8859-1", "UTF-8", strftime("%d %B %Y")); ?></h1>
            <h1>GIF du mois de <?php echo $month ?></h1>


            <center><?php echo '<img src="'.$img_url.'">';?></center>
        <center ><button class="previous" id="btn-previous" onclick="seePreviousGIF()">Redécouvrez les GIFs des mois précédents</button></center>
    </div>
    <img class="col-md-3 side_bamboos" src="img/side_bamboo_revert.png">
</div>

<?php
include_once("footer.php");
?>
