<?php
/*
Write a PHP function that given an integer value n in input, returns the index of the first term in the Fibonacci sequence to contain n digits.

Homework 2 
By Xuan Ho 
007462897
CS 174
*/
function fibIndex($n)
{
    $first = 0;
    $second = 1;
    $count=2;
    
    do
    {
        $result = $first + $second;

        if(strlen(strval($result))>=$n)
        {
            return $count;
        }

        $first = $second;
        $second = $result;
        
        $count = $count+1;
    } 
    while(1);
}
echo "The first Fibonacci's term with 1 digit: ";
echo fibIndex(1);
echo "<br>";
echo "The first Fibonacci's term with 2 digit: ";
echo fibIndex(2);
echo "<br>";
echo "The first Fibonacci's term with 3 digit: ";
echo fibIndex(3);
echo "<br>";

?>