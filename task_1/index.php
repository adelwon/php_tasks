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
</div>
</body>
</html>
