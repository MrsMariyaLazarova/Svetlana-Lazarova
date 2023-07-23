<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="universitetsko-akademichno-obrazovanie.css">
        <title>Университетско-академично образование - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

<body>
     <?php include('shared/header.php'); ?>
     <?php include('shared/menu.php'); ?>

     <ul class="collapsed">
      <li><a href="index.php">Начало</a></li>
      <li><a href="universitetsko-akademichno-obrazovanie.php">Университетско-академично образование</a></li>
  </ul>
  <pre></pre>

<div id="school">
    <h2>Университетско-академично и училищно образование</h2>
    <div class="block">
      <div class="block-1">
          <a href="http://shu.bg/" target="_blank">
          <img src="images/shumenski-universitet.jpg" alt="university" class="responsive" style="width:100%; height: 280px;"></a>
          <figcaption class="av fc if ig ih dc da db ii ij aq ck" data-selectable-paragraph="">През 1992г. – завършено висше образование в ШУ „Еп. К. Преславски” – гр. Шумен, специалност Предучилищна педагогика със степен магистър</figcaption>
          </div>
      <div class="block-2">
          <a href="http://su-balchik.com/" target="_blank">
            <img src="images/hristo-botev.jpg" alt="hight-school" class="responsive" style="width:100%; height: 280px;"></a>
            <figcaption class="av fc if ig ih dc da db ii ij aq ck" data-selectable-paragraph="">1979г. – 1987г. – завършено средно образование в СОУ „Христо Ботев“ – гр. Балчик</figcaption>
      </div>
      <div class="block-3">
          <a href="http://www.kmbalchik.com/" target="_blank">
            <img src="images/kiril&metodii.jpg" alt="school" class="responsive" style="width:100%; height: 280px;"></a>
            <figcaption class="av fc if ig ih dc da db ii ij aq ck" data-selectable-paragraph="">1976 – 1978 – завършен начален курс на обучение в ОУ „Св. Св. Кирил и Методий“ – гр Балчик</figcaption>
      </div>
    </div>
  </div> 
  <pre></pre> 

<?php include('shared/footer.php'); ?>

</body>
</html>