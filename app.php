<?php
require_once __DIR__.'/vendor/autoload.php';
require_once 'CaptchaClass.php';
require_once 'CaptchaController.php';

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['captcha.controller'] = $app->share(function() use ($app) {
  return new CaptchaController(new Randomizer());
});

$app->get('/', function () {
    return "";
});
$app->get('/captcha', 'captcha.controller:buildCaptcha');

$app->run();
