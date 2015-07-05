<?php
require_once 'captchaClass.php';
function captcha($pattern, $left, $operator, $right) {
    if(($pattern < 1 or $pattern > 2) or ($operator < 1 or $operator > 3)){
        return "You shouldn't do this to me :(" . "\n";
    }
    $captcha = new Captcha($pattern, $left, $operator, $right);
    return $captcha->toString();
}
