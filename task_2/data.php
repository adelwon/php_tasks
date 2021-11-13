<?php
require 'ImageUploadFunctions.php';

$filePath = uploadImage($_FILES['image']);

if (!$filePath) {
    echo "Тип картинки не підтримується";

    die();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <title>Data - PHP task 2</title>
</head>
<body>
<div class="container">
    <main>
        <div class="py-3 text-center">
            <h2>Дані з форми</h2>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Фото</th>
                <th scope="col">ПІБ</th>
                <th scope="col">Освіта</th>
                <th scope="col">Вік</th>
                <th scope="col">Стаж роботи</th>
                <th scope="col">Коротко про себе</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="<?= $filePath ?>" width="100px"></td>
                <td><?= $_POST['full_name'] ?></td>
                <td><?= $_POST['education'] ?></td>
                <td><?= $_POST['year'] ?></td>
                <td><?= $_POST['experience'] ?></td>
                <td><?= $_POST['about'] ?? '-' ?></td>
            </tr>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>
