<?php
function captcha($pattern, $b, $c, $d) {
    $NUMBER_STRING = array(
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

            $b = $NUMBER_STRING[$b];
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
            $d = $NUMBER_STRING[$d];
        }
        return $b . " " . $c . " " . $d ;
}
