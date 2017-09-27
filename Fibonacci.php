<?php
/*
Homework 2 - Fibonnacci Sequence
By Xuan Ho
007462897
CS 174
*/

function fibonacci($terms) //terms = terms - 1. Ex: if want 12 terms, input 13
{

    $first = 0;
    $second = 1;

    for($i =2; $i < $terms; $i++)
    {
        $result = $first + $second;
        echo $result.' ';


        $first = $second;
        $second = $result;
    }
}

function fibIndex($n)
{
    $fibArray= array();
    $fibArray[0] = 0;
    $fibArray[1] = 1;

    $fibString =
}


echo "terms: 2 - 12 <br>";
echo fibonacci(13);


?>
