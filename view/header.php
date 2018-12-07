<!DOCTYPE html>
<html>
<head>
    <title>Accueil - 404 : Bamboo not found</title>

    <!--    Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menusheet.css">
    <link rel="stylesheet" href="css/commons.css">
    <link rel="stylesheet" href="css/imgsheet.css">
    <link rel="stylesheet" href="css/botsheet.css">
    <!--    meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/response.js"></script>
    <script type="text/javascript" src="js/bot.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $("#home").click(function(){
                $.ajax({url: "../index.php", success: function(result){
                    var resultElement = $(result);
                    var found = resultElement.children("div").parent();
                        $("#page-content").html(found);
                    }});
            });

            $("#calendar").click(function(){
                $.ajax({url: "view/calendarHome.php", success: function(result){
                        var resultElement = $(result);
                        var found = resultElement.children("div").parent();
                        $("#page-content").html(found);
                        document.getElementById('page-content').style.backgroundColor = 'white';
                    }});
            });
        });

        function seePreviousGIF() {
            $.ajax({url: "view/calendarPrevious.php", success: function(result){
                    var resultElement = $(result);
                    var found = resultElement.children("div").parent();
                    $("#page-content").html(found);
                }});
        }

        function launchBot(){
            var botView = document.getElementById("bot-view");
            var box = botView.getAttribute("class");

            if(box != "bot-view show"){
                botView.setAttribute('class', 'bot-view show');
            }
        }
    </script>

</head>
<body>
<?php
    include ('menu.html');
?>
<div class="row menu_skip">
</div>

<div class="content col-md-12" id="page-content">
