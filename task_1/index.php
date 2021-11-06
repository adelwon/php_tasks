<?php
$persons = require 'array.php';
require 'functions.php';
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
        <?php
        sortArray($persons);

        foreach ($persons

        as $person){
        ?>
        <tr>
            <td><?= $person['full_name'] ?></td>
            <td style="background: <?php echo colorGroups($person['year']) ?>;"><?php echo $person['year'] ?></td>
            <td><?= $person['education'] ?></td>
            <td><?php echo $person['experience'] ?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
</body>
</html>
