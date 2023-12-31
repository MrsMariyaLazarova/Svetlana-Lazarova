<?php
    $config = require_once('shared/config.php');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="kvalifikaciiya.css">
        <title>Квалификация - <?php echo $config['title']; ?></title>
        <?php include('shared/headTags.php'); ?>
    </head>

    <body>
        <?php include('shared/header.php'); ?>
        <?php include('shared/menu.php'); ?>

        <ul class="collapsed">
            <li><a href="index.php">Начало</a></li>
            <li><a href="kvalifikaciiya.php">Квалификация</a></li>
        </ul>
        <pre></pre>

        <div id="content">
            <div class="container">
                <h3>Вътрешна квалификация  - учебна 2016-17г.</h3>
                    <ol>
                        <li>Тренинг с родители „Как да възпитаме здрави и успешни деца“</li>
                        <li>Дискусия „Работа на учителя в мултикултурна среда”</li>
                            <ul style="list-style-type:cicle">
                                <li>Доклад „Учителят и мотивирането на културно различните деца в детската градина”</li>
                            </ul>
                        <li>„Педагогически умения, педагогически компетентности и учителска креативност”</li>
                            <ul style="list-style-type:cicle">
                                <li>Доклад „Двадесет и четири съвета за развитие на творчеството”</li>
                            </ul>
                        <li>Творчески разговор „Същност на игровите технологии в предучилищното образование”</li>
                            <ul style="list-style-type:cicle">
                                <li>Доклад  „Същност и значение на игровата технология”</li>
                            </ul>
                        <li>Творчески разговор “За детските интереси в предучилищна възраст и чудният свят на изкуствата“</li>
                            <ul style="list-style-type:cicle">
                                <li>Доклад „Чудният свят на музиката“</li>
                            </ul>
                        <li>„Да влезеш в обувките на детето - как да възпитаваме добро и щастливо дете”</li>
                            <ul style="list-style-type:cicle">
                                <li>„Възпитание на детето в оптимизъм и вяра в себе си“</li>
                            </ul>
                        <li>Открита практика „Общуване с изкуствата и влиянието им върху интелекта на децата”, тема „Автопортрет“</li>
                        <li>Открита практика „Какво научих докато играх” - интерактивни игри за стимулиране на сътрудничество и съпреживяване и проектиране на положителни емоции</li>
                        <li>Практикум „Учителският професионализъм и празниците в детската градина”</li>
                        <li>Педагогически тематичен съвет: „Мястото на изкуството за изграждане на естетикохудожествена култура у децата”</li>
                            <ul style="list-style-type:cicle">
                                <li>Доклад и презентация  ”Развиване на фината моторика чрез  изобразителни  дейности”</li>
                            </ul>
                    </ol>
            </div>
            <div class="container">
                <h3>Външна квалификация  - учебна 2016-17г.</h3>
                <section id="main">
                    <p><i>Научно - методическа дейност:</i></p>
                    <blockquote>2017г. – Участие с доклад и презентация на тема „Възможности за повишаване на 
                        емоционалната интелигентност на учителя чрез развиване на социалната компетентност на 
                        децата в детската градина“ във II Национална конференция по предучилищна и начална 
                        училищна педагогика на ИОП “Архимед и Диоген“, КК Албена</blockquote>
                            <ul style="list-style-type:circle">
                                <li>брой кредити: 2</li>
                            </ul>
                </section>
                <aside id="sidebar">
                    <p><i>Педагогическа дейност:</i></p>
                    <ol>
                        <li>Участие в уебинар на тема „Портфолио на учителя“, организиран от Фондация „Кузманов“, отдел „Образование и култура“</li>
                            <ul style="list-style-type:circle">
                                <li>брой кредити: 0,25</li>
                                <li>документ – сертификат</li>
                            </ul>
                        <li>Участие в уебинар на тема „Портфолио на ученика/детето“,  организиран от Фондация „Кузманов“, отдел „Образование и култура“</li>
                            <ul style="list-style-type:circle">
                                <li>брой кредити: 0,50</li> 
                                <li>документ – сертификат</li>
                            </ul>
                        <li>Включване в интензивно дистанционно обучение по Монтесори метод, организирано от Асоциация Монтесори – Ръка за Ръка (член на Montesory Europe)</li>
                            <ul style="list-style-type:circle">
                                <li>документ – сертификат</li>
                            </ul>
                        <li>Обучение по Монтесори метод за деца със СОП, организирано от Асоциация Монтесори – Ръка за Ръка (член на Montesory Europe)</li>
                            <ul style="list-style-type:circle">
                                <li>документ – сертификат</li>
                            </ul>
                    </ol>
                </aside>
            </div>
        </div>

        <?php include('shared/footer.php'); ?>

</body>
</html>