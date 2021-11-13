<?php
require_once __DIR__ . '/../vendor/autoload.php';

use TaskFour\FiguresFactory;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>PHP task 4</title>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <?php foreach ((new FiguresFactory())->getFigures() as $figure) { ?>
        <tr>
            <td><?= $figure ?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
</div>
</body>
</html>


