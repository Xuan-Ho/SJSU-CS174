<?php
/*
    @author Xuan Ho - 007462897

    This function counts how many different number exist with all of the digits
    0,1, and A present at least once for hexadecimal values from 1 to $n digits
*/
function hexdecCounter($n)
{

    // Checker: Check if input is valid decimal integer value
    if(is_int($n) == false)
    {
        echo "-----> $n is not a decimal integer value";

    }
    //else exective the count algorithm
    else
    {
        //Initialized counter
        $counter = 0;

        //find counts of 1,0, and a forms from input 1 to $n (
        //start from 26(01A) because it is the smallest number from the various 3 digits hexadecimal forms that have 0,1, and a
        for($i=1;$i<=$n; $i++)
        {
            //convert the value of $i to hexadeciaml value
            $str = dechex($i);

            //increment $counter by 1 for each time $str hexdecimal number have at least one 1,0, and a where first index of the number's string is not 0
            if(strpos($str, '0') !== false && strpos($str, '1') !== false && strpos($str, 'a') !== false && $str[0] !== 0)
            {
                //Add 1 for each hit
                $counter++;
                //print all hit values
                echo "$counter. $i - $str<br>";
            }
        }

        //print input and it total counts
        echo "<br>";
        echo "Input and total counts <br>----------------------------<br>";
        echo "n Hexadecimal value = $i - $str"."<br>";
        echo "Count: $counter"."<br><br>";
    }
 }
//Test Cases: input values and calls function
echo "Test Case 1: Int Decimal Value<hr>";
$n = 1;
hexdecCounter($n); //Expected 0 counts
echo "<br><br>";

echo "Test Case 2: Int Decimal Value<hr>";
$n = 9999;
hexdecCounter($n); //Expected 98 counts
echo "<br><br>";

echo "Test Case 3: Float Value<hr>";
$n = 9999.1;
hexdecCounter($n); //Expected invalid value
echo "<br><br>";

echo "Test Case 3: String Value<hr>";
$n = "9999";
hexdecCounter($n); //Expected invalid value
echo "<br><br>";
?>


