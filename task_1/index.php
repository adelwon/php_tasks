<?php
$persons = require 'array.php';
require 'functions.php';
sortArray($persons);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>PHP task 1</title>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ПІБ</th>
            <th scope="col">Вік</th>
            <th scope="col">Освіта</th>
            <th scope="col">Стаж</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($persons

        as $person){ ?>
        <tr>
            <td><?= $person['full_name'] ?></td>
            <td style="color: <?= getColorByYear($person['year']) ?>">
                <?php echo $person['year'] ?>
            </td>
            <td <?= !isHigherEducation($person['education']) ?: 'style="font-weight: bold"' ?>>
                <?= $person['education'] ?>
            </td>
            <td <?= !isBeginner($person['experience']) ?: 'style="background:rgba(8 205 80)"' ?>>
                <?= $person['experience'] ?>
            </td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
    <h4>Пояснення до таблиці</h4>
    <h6>Вікові групи:</h6>
    <ul>
        <li><p style="color: rgba(215,178,0,0.87);">0-15 - діти</p></li>
        <li><p style="color: rgba(8 205 80);">16-59 - працездатні</p></li>
        <li><p style="color: rgba(235 58 58);">60 і більше - літні</p></li>
    </ul>
    <h6>Освіта:</h6>
    <p>Наявність вищої освіти позначається <strong>жирним</strong> шрифтом.</p>
    <h6>Стаж:</h6>
    <p>Стаж роботи менше 3 років позначається  <mark style="background:rgba(8 205 80)">зеленим</mark> фоном</p>
</div>
</body>
</html>
