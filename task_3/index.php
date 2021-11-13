<?php
$catalog = require 'DataParsingFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>PHP task 3</title>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">About</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($catalog

        as $item) {
        ?>
        <tr>
            <td>
                <?= $item['name'] ?>
            </td>
            <td>
                <?= $item['about'] ?>
            </td>
            <td>
                <?= $item['price'] ?>
            </td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
</body>
</html>
