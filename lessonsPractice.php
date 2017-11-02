<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
$if($conn->connect_error)
    die($conn->connect_error);


$query="SELECT * FROM classics";
$result = $conn->query($query);
if(!$result)
    die($conn->error);
$rows = $result->query($query);

for($j=0; $<$rows; ++$j)
{
    $result->data_seek($j);
    echo 'author: '.$result->fetch_assoc()['author'].'<br>';

    $result->data_seek($j);
    echo 'Title: '.$result->fetch_assoc()['title'].'<br>';

    $result->data_seek($j);
    echo 'Category: '.$result->fetch_assoc()['category'].'<br>';

    $result->data_seek($j);
    echo 'Year: '.$result->fetch_assoc()['year'].'<br>';

    $result->data_seek($j);
    echo 'ISBN: '.$result->fetch_assoc()['isbn'].'<br>';

//More efficient method - extract a row at a time
/*
for($j=0; $<$rows; ++$j)
{
    $result->data_seek($j);
    $row =$result->fetch_array(MYSQLI_ASSOC);


    echo 'author: '.$row['author'].'<br>';


    echo 'Title: '.$row['title'].'<br>';


    echo 'Category: '.$row['category'].'<br>';


    echo 'Year: '.$row['year'].'<br>';


    echo 'ISBN: '.$row['isbn'].'<br>';


*/

}

$result->close();
$conn->close();

function my_sql_fatal_error($msg)
{
    $msg2 = mysql_error();
    echo <<< _END
We are sorry, but it was not possible to complete
the requested task. The error message we got was:

    <p>$msg: $msg2</p>

Please click the back button on your browser
and try again. If you are still having problems,
please <a href="mailto:admin@server.com">email
our administrator</a>. Thank you.
_END;
}
>
