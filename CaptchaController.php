<?php
class CaptchaController{
    private $randomizer;
    function __construct($randomizer){
        $this->randomizer = $randomizer;
    }
    function buildCaptcha() {
            $pattern = $this->randomizer->pattern();
            $left = $this->randomizer->operand();
            $operator = $this->randomizer->operator();
            $right = $this->randomizer->operand();
            $captcha = new Captcha($pattern, $left, $operator, $right);
            return $captcha->toString();
    }
}

class Randomizer{
    function pattern(){
        return rand(1,2);
    }
    function operand(){
        return rand(1,9);
    }
    function operator(){
        return rand(1,3);
    }
}
?>
