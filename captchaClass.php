<?php
class Captcha {
    private $pattern, $left, $operator, $right;
    function __construct($pattern, $left, $operator, $right){
        $this->pattern = $pattern;
        $this->left = $left;
        $this->operator = $operator;
        $this->right =$right;
    }
    function toString(){
        if($this->pattern == 1){
        $left = createStringOperand($this->left);
        $operator = createOperaor($this->operator);
        $right = $this->right;
    }else{
        $left = $this->left;
        $operator = createOperaor($this->operator);
        $right = createStringOperand($this->right);
    }
        return $left . " " . $operator . " " . $right ;
    }
}


function createStringOperand($operand){
    $StringOperand = array(
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
    return $StringOperand[$operand];
}
function isLeftIsIntegerRightIsString($pattern){
    return $pattern==2;
}
function isLeftIsStringRightIsInteger($pattern) {
    return $pattern==1;
}
function createOperaor($operator){
    if($operator == 1){
        $operator = "+";
    }

    if($operator == 3){
        $operator = "*";
    }

    if($operator == 2)
    {
        $operator = "-";
    }
    return $operator;
}

 ?>
