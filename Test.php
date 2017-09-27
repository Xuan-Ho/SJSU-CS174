<?php

function fibonacciIndex($n)
{
    /*first and second fibo number*/
    $first = 0;
    $second = 1;
    //count of fibo number
    $count=2;
    //using while loop
    while(1)
    {
        /*generating next fibo number*/
        $result = $first + $second;
        //checking the number of digits
        if(strlen(strval($next_fibo))>=$n)
        {
            //if generated number have sufficient digits
            /*returning the count*/
            return $count;
        }

        $first = $second;
        $second = $result;
        /*increasing the count*/
        $count=$count+1;
    }
}
/testing the function
echo fibonacciIndex(2);
echo "<br>";
echo fibonacciIndex(3);
echo "<br>";

?>
