<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'captcha.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function () {
    return "";
});
$app->get('/captcha', function () use ($app) {
    $pattern = rand(1, 2);
    $operand = rand(1,9);
    $operator = rand(1, 3);
    return captcha($pattern, $operand, $operator, $operand);
});

$app->run();
