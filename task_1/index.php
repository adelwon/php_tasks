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
        include 'array.php';
        include 'functions.php';

        sortArray($persons);

        foreach ($persons as $person){
        ?>

        <tr>
            <td><?php echo $person['full_name'] ?></td>
            <td style="background: <?php ageGroups($person['year']) ?>;"><?php echo $person['year'] ?></td>
            <td><?php echo $person['education'] ?></td>
            <td><?php echo $person['experience'] ?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
</body>
</html>
