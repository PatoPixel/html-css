<?php
$num1 = 00;
$num2 = 1;
$num3 = 260;

if($num1 > $num2 && $num1 > $num3) {
    if($num2>$num3){
        echo "$num1 > $num2 > $num3";
        }   else
            echo "$num1 > $num3 > $num2";
    }else{
        if($num1 < $num2 && $num1 < $num3) {
            if($num2>$num3) {
                echo "$num2 > $num3 > $num1";
                }      else  {
                echo "$num3 > $num2 > $num1";
            } 
        }else {
                if( $num2 > $num3){
            echo "$num2 > $num1 > $num3";
            } else { 
                echo "$num3 > $num1 > $num2";
            }
        }
    } 
      



