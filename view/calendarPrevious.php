<?php
include_once("header.php");
?>

<div class="row">
    <img class="col-md-3 side_bamboos" src="../img/side_bamboo.png">
    <div class="col-md-6">

        <?php
        $nextMonth = strtotime('first day of -1 month');
        setlocale(LC_TIME, 'fr_FR.utf-8', 'fra');
        $filename = iconv("ISO-8859-1", "UTF-8", strftime("%B%Y", $nextMonth) . ".gif");
            if(file_exists($filename))
            {
                while (file_exists($filename)) {

                }
            }
            else{
        ?>
            <h1 class="noPrevious"> <?php echo "Oh non ... aucun GIF n'a déjà été devoilé avant !\nRevenez le mois prochain pour découvrir de nouveau GIF !"; ?> </h1> <?php
        }
        ?>
    </div>
    <img class="col-md-3 side_bamboos" src="../img/side_bamboo_revert.png">
</div>

<?php
include_once("footer.php");
?>
