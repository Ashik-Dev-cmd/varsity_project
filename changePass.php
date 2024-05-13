<?php

include 'connection.php';

if(isset($_POST['change']))
{
    $takemail = $_POST['email']; 
    $curp = $_POST['curp'];
    $npass = $_POST['npass'];
    $conf = $_POST['conf'];

    if($npass == $conf)
    {
        $sql ="SELECT * FROM registration WHERE email = '$takemail' AND password = '$curp'";
        $res = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($res) > 0)
        {
            $sql2 = "UPDATE registration SET password = '$npass' WHERE email = '$takemail'";
            if(mysqli_query($conn,$sql2))
            {
                echo "<h1>Password has changed!</h1>";
            }
    //         else 
    //         {
    //             echo "Error updating password: " . mysqli_error($conn);
    //         }
            
    //     }
    //     else
    //     {
    //         echo "Invalid current Password";
    //     }
    }
    // else
    // {       
    //     echo "Password doesn't match!";
     }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="changePass.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

form {
    max-width: 400px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: calc(100% - 10px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

span {
    color: red;
    font-size: 14px;
}


    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return validateChangePass();">
    <label for="mail">Mail</label>
    <input type="text" name="email" id="mail">
    <span id="error1"></span>
    <br>
    <label for="currpass">Current Password</label>
    <input type="password" name="curp" id="currpass">
    <span id="error2"></span>
    <br>
    <label for="newpass">New Password</label>
    <input type="password" name="npass" id="newpass">
    <span id="error3"></span>
    <br>
    <label for="conpass">Confirm Password</label>
    <input type="password" name="conf" id="conpass">
    <span id="error4"></span>
    <br>
    <input type="submit" name="change" id="">
    </form>
</body>
</html>
