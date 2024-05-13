<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'varsity';

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
    
}
else
{
    die("ERROR".mysqli_connect_error());
}

?>