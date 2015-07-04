<?php
function captcha($pattern, $left, $operator, $right) {
        if(isStringNuberPattern($pattern))
        {
            $left = createStringOperand($left);
            $operator = createOperator($operator);
            $right = createIntegerOperand($right);
        }
        else if(isNuberStringPattern($pattern)){
            $left = createIntegerOperand($left);
            $operator = createOperator($operator);
            $right = createStringOperand($right);
        }
        return $left . " " . $operator . " " . $right ;
}

function createIntegerOperand($operand){
    return strval($operand);
}

function isNuberStringPattern($pattern) {
    return $pattern==2;
}

function isStringNuberPattern($pattern) {
    return $pattern==1;
}

function createStringOperand($operand){
    $STRING_OPERAND = array(
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
    return $STRING_OPERAND[$operand];
}

function createOperator($operator){
    $OPERATOR_SIGN = array(1=>"+", 2=>"-", 3=>"*");
    return $OPERATOR_SIGN[$operator];
}
