<?php
include_once("header.php");
?>

<h1 class="head">Les GIFs des mois précédents !</h1>
<div class="row">

    <?php
    $i = 1;
    $nextMonth = strtotime('first day of -1 month');
    $filename = "../img/gif/" . strftime("%B%Y", $nextMonth) . ".gif";
    setlocale(LC_TIME, 'fr_FR.utf-8', 'fra');

    if (file_exists($filename)) {
        ?>
        <div class="col-md-2 col-md-offset-1">
            <h3><?php echo iconv("ISO-8859-1", "UTF-8", strftime("%B", $nextMonth)); ?></h3>
            <img class="img-previous" src="<?php echo $filename; ?>">
        </div>

        <?php
        $i++;
        $nextMonth = strtotime('first day of -'.$i.' month');
        $filename = "/img/gif/" . strftime("%B%Y", $nextMonth) . ".gif";

        while (file_exists($filename)) {
            ?>
            <div class="col-md-2 col-md-offset-1">
                <img src="<?php echo $filename; ?>">
            </div>
            <?php
            $i++;
            $nextMonth = strtotime('first day of -'.$i.' month');
            $filename = "/img/gif/" . strftime("%B%Y", $nextMonth) . ".gif";
        }
    } else {
        ?>
        <h1 class="col-md-5 col-md-offset-4 noPrevious"> <?php echo "Oh non ... aucun GIF n'a déjà été devoilé avant !\nRevenez le mois prochain pour découvrir de nouveau GIF !"; ?> </h1> <?php
    }
    ?>
</div>

<?php
include_once("footer.php");
?>
