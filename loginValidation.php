<?php
session_start();
include 'connection.php';



if($_SERVER['REQUEST_METHOD']==='POST')
{
    $validity = true;
    $uname = filter($_POST['uname']);
    $_SESSION['uname'] = $uname;
    $pass = filter($_POST['pass']);
    //$msg1 = '';
    //$msg2 = '';
    //$msg3 = '';

    if(empty($uname))
{
    echo 'Fillup the username!';
    $validity = false;
}

else if(empty($pass))
{
    
    echo 'Fillup the password!';
    
    $validity = false;
}
else if($validity)
{
    $sql = "SELECT * FROM registration WHERE first_name = '$uname'";
    $res = mysqli_query($conn,$sql);
    
    if($res->num_rows==1)
    {
        session_start();
        $_SESSION['loggedin'] = true;
        header("location:home.php");
        
        
    }
    else
    {
        header("location:logfailed.php");
        
    }
    
}

}


function filter($data)
{
    $data = htmlspecialchars($data);
    return $data;
}




?>