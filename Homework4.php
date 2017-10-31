<p><b>PLEASE UPLOAD A TEXT FILE</b></p><br>

<form action="Homework4.php" method="post" enctype="multipart/form-data">
    <h>1. </h>
    <input type="file" name="selectedFile"><br><br>
    <h>2. </h>
    <input type = "submit"><br><br>
</form>

<?php

//Validate if the the upload file is a ".txt" file
function txtValidation()
{
    if(isset($_FILES['selectedFile'])) //if sumbit button is pressed
    {
        $file = $_FILES['selectedFile']; //set selected uploaded file to a variable

        $file_error = $file['error']; //variable for upload error
        $file_name = $file['name']; //set file's name to a variable

        //Same as $_FILES["selectedFile"]["tmp_name"]
        //temp location of uploaded file without saving it locally
        $file_tmp = $file['tmp_name'];


        //Set each part of the file's name, seperated by ".", into an array
        //[0] = filename, [1] = file extension
        $filenameArray = explode(".", $file_name);

        //the array's last index value is the real file type extension for test case
        //just in case there is a similar file name like "filename.txt.pdf"
        $realFileExtension = strtolower(end($filenameArray));
        $allowExtension = array('txt'); //array to hold allow extension

        //If file extension and the allow extesion are the same and no upload error
        if(in_array($realFileExtension, $allowExtension) && $file_error == 0)
        {
            $document = file_get_contents($file_tmp);//get string or content of text tile
        }
        global $var;
        $var = $document;
        echo "Uploaded Text File String: "."<br>";
        echo $document."<br><br><br>";
        return $document;

    }
    else
    {
        echo ""; //do nothing
    }
 }

//Print all the numbers from the text file's strings that is not alphanumeric
 function txtNum($a)
 {
     //create array of the string parts seperated by a single space
     $stringArray = explode(" ", $a);
     echo ">>>>>SPLIT OF THE STRING INSIDE AN ARRAY BY A SINGLE SPACE<<<<"."<br>";
     print_r($stringArray);
     echo "<br><br><br>"."THE NON-NUMERIC NUMBER ON THE FILE CONTENT:<br>";
     $count = count($stringArray); //count how many item in array

     //Loop through array
     for($j=0 ; $j<$count; $j++)
     {
         //print if the value is a number or a numeric string
         if( is_numeric($stringArray[$j]))
         {
             echo $stringArray[$j]." ";
         }
         else
         {
             echo "";//do nothing
         }
     }
 }


txtValidation();//Validating the uploaded file for the allow file extension

$textContent = $var;//Assign the Valid Text File content to use outside of it function's scope

txtNum($textContent);//Parameterized the content and use it to find all the number on it

?>

