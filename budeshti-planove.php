<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="budeshti-planove.css">
        <title>Бъдещи планове - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="budeshti-planove.php">Бъдещи планове</a></li>
        </ul>
        <pre></pre>

<div class="container">
    <section id="main">
        <h5><cite>„Никога не е твърде рано или твърде късно да учиш!“</cite></h5>
        <p>Ученето през целия живот е начин на мислене – всеки от нас трябва да бъде отворен за 
            нови идеи, решения, умения или поведение.</p><br>
        <blockquote>
            <b>Моите бъдещи планове са:</b>
                <pre></pre>
                <ul>
                    <li>Усъвършенстване на уменията за планиране и подбор на подходящи, нови и интересни методи, 
                        средства и материали</li>
                    <li>Провокиране интереса на децата в търсене, подбор и работа с различни източници на информация</li>
                </ul>
        </blockquote>
    </section>
</div>

<?php include('shared/footer.php'); ?>

</body>
</html>