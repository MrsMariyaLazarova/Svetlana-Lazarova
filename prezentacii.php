<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="prezentacii.css">
        <title>Презентации - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="prezentacii.php">Презентации</a></li>
        </ul>
        <pre></pre>

        <div id="href-container">
            <div class="container">
                <ul style="list-style-type:circle">
                    <li><a href="prezentacii/Игри-Монтесори-Лазарова.pptx" download>Игри Монтесори, Лазарова</a></li><br>
                    <li><a href="prezentacii/Монтесори-и-играта-Лазарова.pptx" download>Монтесори и играта, Лазарова</a></li><br>
                    <li><a href="prezentacii/Развиване-на-фината-моторика-чрез-изобразителни-дейности.pptx" download>Развиване на фината моторика чрез изобразителни дейности, 2017г.</a></li><br>
                    <li><a href="prezentacii/Повишаване-на-ЕИ-на-учителя-чрез-развиване-на-социалната-компетентност-на-децата.pptx" download>Повишаване на ЕИ на учителя чрез развиване на социалната компетентност на децата, 2017г.</a></li><br>
                    <li><a href="prezentacii/Автопортрет-Лазарова-2017.pptx" download>Автопортрет, Лазарова 2017г.</a></li><br>
                    <li><a href="prezentacii/Нашите-цветни-дни-1111.pptx" download>Нашите цветни дни 2015/2016г.</a></li><br>
                    <li><a href="prezentacii/йога.pptx" download>Йога 2015г.</a></li><br>
                    <li><a href="prezentacii/Нашите-цветни-дни.ppt" download>Нашите цветни дни, 2014/ 2015г.</a></li><br>
                    <li><a href="prezentacii/ПОВИШАВАНЕ-НА-ЕМОЦИОНАЛНАТА-ИНТЕЛИГЕНТНОСТ-НА-6-7-ГОДИШНИТЕ-ДЕЦА.pptx" download>ПОВИШАВАНЕ НА ЕМОЦИОНАЛНАТА ИНТЕЛИГЕНТНОСТ НА 6-7 ГОДИШНИТЕ ДЕЦА, 2013г.</a></li><br>
                    <li><a href="prezentacii/Релаксацията-средство-за-справяне-с-детската-агресия-слайдшоу-sv.pptx" download>Релаксацията - средство за справяне с детската агресия, 2012г.</a></li>
                </ul>
            </div>
        </div>

        <?php include('shared/footer.php'); ?>

</body>
</html>