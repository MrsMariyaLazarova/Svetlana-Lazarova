<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="uchebni-godini.css">
        <title>Учебни години - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="uchebni-godini.php">Учебни години</a></li>
        </ul>
        <pre></pre>

        <div id="href-container">
            <div class="container">
            <a href="nashite-cvetni-dni.php"><button type="button" class="btn btn-outline-success waves-effect btn-lg btn-block">Нашите цветни дни</button></a>
            <a href="2016-2017-uchebna-godina.php"><button type="button" class="btn btn-outline-secondary waves-effect btn-lg btn-block">2016/2017 учебна година</button></a>
            <a href="2017-2018-uchebna-godina.php"><button type="button" class="btn btn-outline-danger waves-effect btn-lg  btn-block">2017/2018 учебна година</button></a>
            <a href="2019-2020-uchebna-godina.php"><button type="button" class="btn btn-outline-info waves-effect btn-lg btn-block">2019/2020 учебна година</button></a>
            </div>
        </div>


        <?php include('shared/footer.php'); ?>

</body>
</html>