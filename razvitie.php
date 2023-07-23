<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="razvitie.css">
        <title>Развитие - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="uchebni-godini.php">Развитие</a></li>
        </ul>
        <pre></pre>

        <div id="href-container">
            <div class="container">
            <a href="lichno-profesionalno-razvitie.php"><button type="button" class="btn btn-outline-danger waves-effect btn-lg  btn-block">Лично професионално развитие</button></a>
            <a href="moiyat-uchitelski-profil-v-razvitie.php"><button type="button" class="btn btn-outline-info waves-effect btn-lg btn-block">Моят учителски профил в развитие</button></a>
            </div>
        </div>


        <?php include('shared/footer.php'); ?>

</body>
</html>