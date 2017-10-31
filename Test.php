<p><b>PLEASE UPLOAD A TEXT FILE</b></p><br>

<form action="Homework4.php" method="post" enctype="multipart/form-data">
    <h>1. </h>
    <input type="file" name="selectedFile"><br><br>
    <h>2. </h>
    <input type = "submit"><br><br>
</form>


<?php

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
            global $document;
            $document = file_get_contents($file_tmp);//get string or content of text tile
            echo $document;
            echo "<br>";

        }
    }


?>
