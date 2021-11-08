<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';
use PhpQuery\PhpQuery;

$page=file_get_contents('https://hotline.ua/bt/stiralnye-i-sushilnye-mashiny/');
$pq=new PhpQuery;
$pq->load_str($page);

echo "<br><br>";
//return a list of 2 components
var_dump($pq->query('.catalog-products'));

echo "<br><br>";
//return the first element
var_dump($pq->query('.catalog-products')[0]);
