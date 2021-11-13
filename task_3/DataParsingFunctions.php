<?php
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

require "../vendor/autoload.php";

use PHPHtmlParser\Dom;
use PHPHtmlParser\Exceptions\ChildNotFoundException;
use PHPHtmlParser\Exceptions\NotLoadedException;
use Psr\Http\Client\ClientExceptionInterface;

$catalog=[];

try {
    $page = (new Dom())->loadFromUrl('https://hotline.ua/bt/stiralnye-i-sushilnye-mashiny/');
} catch (Exception | ClientExceptionInterface $e) {
    echo 'Parse error';

    die();
}

try {
    foreach ($page->find('.product-item') as $element) {
        if (count($element->find('p a'))) {
            $catalog[] = [
                'name' => $element->find('p a'),
                'about' => $element->find('.text'),
                'price' => $element->find('.price-md'),
            ];
        }
    }
} catch (ChildNotFoundException | NotLoadedException $e) {
    echo 'Error find element';

    die();
}

return $catalog;
