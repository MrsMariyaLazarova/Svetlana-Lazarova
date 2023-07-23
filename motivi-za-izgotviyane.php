<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="motivi-za-izgotviyane.css">
        <title>Мотиви за изготвяне - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="motivi-za-izgotviyane.php">Мотиви за изготвяне</a></li>
        </ul>
        <pre></pre>

<div class="container">
    <div class="p-container">
       <p>Моето учителско портфолио е колекция от рубрики и доказателства за равнището на квалифицираността и компетентностите, 
       които развивам и представям чрез него, непрекъснато допълвайки го.</p>
       <ul>
       <p>Целта му е:<br>
       <li>прозрачност на моята професионална дейност</li>
       <li>справедливост при оценяване на индивидуалното качество на учителския ми труд и доказателственост на моята професионална дейност</li>
   </p></ul>
       <p>Декларирам съгласие моето учителско портфолио да се използва единствено и само с предназначение за рекламна дейност на детската 
           градина в която съм учител и за диференцираното оценяване на учителския ми труд.</p>
       <p>Портфолиото е отворено и подлежи на изменение, допълване и актуализиране във всеки момент от дейността ми като учител.</p>
      </div>
      </div>

<?php include('shared/footer.php'); ?>

</body>
</html>
