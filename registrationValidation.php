<?php
include 'connection.php';

if(isset($_POST['submit']))
{
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];
if($pass==$cpass)
{
    $sql = "INSERT INTO registration(first_name,last_name,email,phone,password)
    VALUES('$fname','$lname','$email','$phone','$pass')";
    $res = mysqli_query($conn,$sql);
    if($res)
    {
       echo "Registration complete!";
    }
    else
    {
        echo "Couldn't complete the registration!";
        header("location:registration.php");
    }
}else
{
    echo "Password didn't matched!";
}
}

?>