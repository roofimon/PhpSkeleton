<?php
require_once __DIR__.'/vendor/autoload.php';
function captcha($pattern, $b, $c, $d) {
    $e = array(
        1 => "One",
        2 => "Two",
        3 => "Three",
        4 => "Four",
        5 => "Five",
        6 => "Six",
        7 => "Seven",
        8 => "Eight",
        9 => "Nine",
    );

    $f = array(
        1 => "+",
        2 => "-",
        3 => "*",
    );
    if(($pattern < 1 or $pattern > 2) or ($c < 1 or $c > 3)){
        return "You shouldn't do this to me :(" . "\n";
    }

        if($pattern==1)
        {
            if($c == 1){
                $c = "+";
            }

            if($c == 3){
                $c = "*";
            }

            if($c == 2)
            {
                $c = "-";
            }

            $b = $e[$b];
        }
        else if($pattern==2){
            if($c == 1){
                $c = "+";
            }

            if($c == 3){
                $c = "*";
            }

            if($c == 2)
            {
                $c = "-";
            }
            $d = $e[$d];
        }
        return $b . " " . $c . " " . $d ;
}

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
