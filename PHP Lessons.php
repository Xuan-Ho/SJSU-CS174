<?php
/*
-Echo: Use for printing text and value (faster) 
-Print: for returning function, boolean, and other more complex expression
-not strict with indentation like python. Use or not use indentation and white sapce
-every statement must end with semicolon ;
-String required enclosed quotation or apostrophes marks " " or ' '
-PHP is a very loosely typed language: variable's type does not need to be declared before the are use. PHP always convert variables to the type required when access and when it type is required
*/

// comment
/* another comment*/
echo "hi Xuan";
echo "<br>";
    
//Variable - use $before variable's name and is case sensitive. Can start with $_name
$name = 'Xuan';
$age = 26;
$heightcm = 17.7;
print("Xuan: $name $age $heightcm ");
print("<br>");

//first program
$username = "Donald Duck";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";

//Array
$xuanFriends = array("Alex", "Darwin", "Quang", "Trung");
echo "$xuanFriends[0] <br>";

//Two Dimensional Array
$twodemArray = array(array('x', '', 'o'),
                     array('o', 'wrong', 'correct'),
                     array('x', 'o', ''),
                    );
echo $twodemArray[1][2];
echo '<br>';

//operators: + - * / %(modulus) ++(increment) --(Decrement)
/*Logical Operator: ==, !=, >, <, >=, <=
  Logical Operator: $$, and, ||, or, !(not), xor(Exclusive or)
  
  "or" and "and" are low precedence. Which case be use in special cases like thie
  $html = file_get_contents($site) or die("Cannot download from $site");
*/

//Increment and Decrement 1 Shorcuts
++$age; // same as 
echo "$age <br>";
$age++;
echo "$age <br>";

//String Concatenation 
//use period "." instead of "+" to append string to another
echo "Xuan is ".$age." years old"."<br>";
$string = "This person name is ";
echo $string.= $name; //String appending - same as $string + $name;
echo "<br>";

//String Types: ' ' for literal string (preserving exact contents, " " for the rest
$info = 'Xuan is about $heightcm cm tall';
echo $info."<br>";
$info = "Xuan is about $heightcm cm tall";
echo $info."<br>";

//Multiple Line Commands
$author = "Steve Ballmer";
echo "Developers, Developers, developers, developers,     
      developers, developers, developers, developers!
       - $author. <br>";

$author = "Bill Gates";
$text = "Measuring programming progress by lines of code
         is like measuring aircraft building progress by weight.
         - $author. <br>";
echo $text;

$author = "brian W. Kernighan";
/*<<< operator is referred to as a here-document or heredoc: Preserving whitespace, line break, indentation and other white space*/
$author = "Brian W. Kernighan";
echo <<<_thiscanbeanything

        Debugging is twice as hard as writing the code in the first place.
        Therefore, if you write the code as cleverly as possible, you are,
        by definition, not smart enough to debug it.
        - $author. <br>
        
_thiscanbeanything;


//Variable Typing
$number = 12345 * 67890; //838102050
echo $number."<br>";
echo substr($number, 3, 2); //get first two substring characters from index 3 (10)

//Constants


//Echo Vs Print
$b = false;
$b? print "false" : print"true" //wont work with echo
?>