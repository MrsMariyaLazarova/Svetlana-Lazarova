<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="galeriiya.css">
    <title>Галерия - <?php echo $config['title'] ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>
    <body>
        <?php include('shared/bodyHeader.php'); ?>
        <?php include('shared/menu.php'); ?>
        <ul>
            <li><a href="index.php">Начало</a></li> 
            <li><a href="galeriya.php">Галерия</a></li>
        </ul>
        
        <div id="lb-back">
            <div id="lb-img"></div>
            </div>

        <!-- The grid: four columns -->
        <div id="gallery">
            <div class="row">
                <div class="column">
                    <img src="images/gallery/1.2.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/1.1.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/2.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/3.jpg" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/4.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/5.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/6.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/7.jpg" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                    <div class="column">
                        <img src="images/gallery/8.jpg" class="zoomD" style="width:80%">
                    </div>
                    <div class="column">
                        <img src="images/gallery/9.jpg" class="zoomD" style="width:80%">
                    </div>
                    <div class="column">
                        <img src="images/gallery/10.jpg" class="zoomD" style="width:80%">
                    </div>
                    <div class="column">
                        <img src="images/gallery/11.jpg" class="zoomD" style="width:80%">
                    </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/12.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/13.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/14.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/15.jpg" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/16.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/17.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/18.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/19.jpg" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/20.png" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/21.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/22.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/23.png" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/24.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/25.png" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/26.png" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/27.jpg" class="zoomD" style="width:80%">
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img src="images/gallery/28.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/29.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/30.jpg" class="zoomD" style="width:80%">
                </div>
                <div class="column">
                    <img src="images/gallery/31.jpg" class="zoomD" style="width:80%">
                </div>
            </div>
            <?php include('shared/bodyFooter.php'); ?>
    </body>
</html>

