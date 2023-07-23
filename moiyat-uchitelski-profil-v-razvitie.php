<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="moiyat-uchitelski-profil-v-razvitie.css">
        <title>Моят учителски профил в развитие - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="razvitie.php">Развитие</a></li>
            <li><a href="moiyat-uchitelski-profil-v-razvitie.php">Моят учителски профил в развитие</a></li>
        </ul>
        <pre></pre>

<section id="showcase">
<div class="container">
    <h4>Моите етични принципи</h4>
    <ul>
        <li>Уважавам достойнството и правата на детето</li>
        <li>Уважавам собственото си професионално достойнство и права, 
           проявявам толерантност и дискретност в професионалното си поведение</li>
        <li>Взискателна съм към възможностите и поведението на децата</li>
        <li>Поддържам висок стандарт на своите компетентности</li>
        <li> Аз съм с ясно съзнание за своята професионална отговорност, запазвайки личното си 
           професионално пространство и не нарушавайки личното пространство на Другия, включително като не
           изземвам негови отговорности. Гарантирам, че не нанасям вреда и възпитавам, обучавам и образовам децата 
           съгласно законите и другите нормативни актове в страната</li>
        <li>Аз работя почтено и лоялно</li>
    </ul>
</div>

<img src="images/kidss.jpg" alt="" class="image">

<pre></pre>

<div class="container">
    <h4>Моят професионален профил</h4>

    <p>Смятам, че владея много добре научно-теоретичните основания за извършване на учителската си дейност.
       Мога без затруднения да се справя в еднаква степен както с необичайните, нетипични, нерутинни професионални 
       задачи/ситуации, така и с обичайните, типичните, рутинните такива. Преобладаващо поемам обоснован професионален 
       риск.</p>
    <p>Перспективата за професионалния ми напредък се вижда в: 
       <ul>
           <li>предстоящото поддържане в устойчиво, но динамично 
               функциониране на постигнатите компетентности</li>
           <li>в непрекъснатото обогатяване на набора ми от лични педагогически 
               техники, работейки сега най-вече за напредъка на своите деца</li>
           <li>в развиване на изследователски саморефлексивни 
               умения за споделяне на своите добри практики и за внедряване на иновациите, които създавам; за подкрепяне на 
               своите колеги в педагогическия екип</li>
           <li>за развиване на компетентности за работа в мрежа</li>
        </ul>
       На практика перспективата е да напредвам в компетентноста да упражнявам професията си с лекота и удоволствие, 
       а оттам – с удовлетворение и самосъхранение.</p>
</div>
</section>

<?php include('shared/footer.php'); ?>

</body>
</html>