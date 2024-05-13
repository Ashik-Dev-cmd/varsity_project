<?php
session_start();

if(isset($_SESSION['uname']))
{
    echo "<h1>WELCOME ". $_SESSION['uname']."</h1>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="checkbox"] {
    margin-right: 10px;
}

input[type="number"] {
    width: 70px;
    margin-right: 10px;
}

input[type="checkbox"], input[type="number"] {
    margin-bottom: 10px;
}
#cnum
{
    width: 320px;
    padding: 10px;
    margin-left: 30%;
    margin-top: 2%;
    background: #ACE1AF;
    border-radius: 20px;
    border: none;
    box-shadow: 2px 2px 5px black;

}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
}

a {
    text-decoration: none;
    color: #333;
    display: block;
    margin-top: 10px;
}

a:hover {
    color: #4CAF50;
}


    </style>
</head>
<body>
    <h1 class="homeTitle">HOME FOR THE ECOMMERCE SITE</h1>
    <form action="showitem.php" method="post">

    <input type="checkbox" name="item[]" id="" value="RICE">RICE
    <input type="number" name="riceam" id="" placeholder="75tk/kg">

    <input type="checkbox" name="item[]" id="" value="ONION">ONION
    <input type="number" name="onionam" id="" placeholder="60tk/kg">

    <input type="checkbox" name="item[]" id="" value="POTATO">POTATO
    <input type="number" name="potatoam" id="" placeholder="50tk/kg">

    <input type="checkbox" name="item[]" id=""value="GINGER">GINGER
    <input type="number" name="gingeram" id="" placeholder="250tk/kg">

    <br>

    <input type="checkbox" name="item[]" id="" value="TOMATO">TOMATO
    <input type="number" name="tomatoam" id="" placeholder="60tk/kg">

    <input type="checkbox" name="item[]" id="" value="GARLIC">GARLIC
    <input type="number" name="garlicam" id="" placeholder="200tk/kg">

    <input type="checkbox" name="item[]" id="" value="MIXED MASALA">MIXED MASALA
    <input type="number" name="masalaam" id="" placeholder="500tk/kg">
    <br>
    <input type="checkbox" name="item[]" id="" value="BREAD">BREAD
    <input type="number" name="breadam" id="" placeholder="60tk/pack">

    <input type="checkbox" name="item[]" id="" value="CUCUMBER">CUCUMBER
    <input type="number" name="cucumberam" id="" placeholder="40tk/kg">

    <input type="checkbox" name="item[]" id="" value="EGG">EGG
    <input type="number" name="eggam" id="" placeholder="10tk/pc">

    <input type="checkbox" name="item[]" id=""value="FLOUR" >FLOUR
    <input type="number" name="flouram" id="" placeholder="120tk/kg">
    <br>
    <input type="checkbox" name="item[]" id="" value="CABBAGE">CABBAGE
    <input type="number" name="cabbageam" id="" placeholder="65tk/pc">

    <input type="checkbox" name="item[]" id="" value="CHILLI">CHILLI
    <input type="number" name="chilliam" id="" placeholder="200tk/kg">

    <input type="checkbox" name="item[]" id="" value="SALT">SALT
    <input type="number" name="saltam" id="" placeholder="80tk/kg">

    <input type="checkbox" name="item[]" id="" value="OIL">OIL
    <input type="number" name="oilam" id="" placeholder="130tk/ltr">
    <br>
    <input type="number" name="cnum" id="cnum" placeholder="Enter your whatsapp number with country code">
    <br>
    <input type="text" name="area" id="area" placeholder="Enter area name">
    <br>
    <input type="submit" name="send" id="sendOrder" value="ORDER NOW!">
    </form>


   
    <a class="vp" href="profile.php">View Profile</a>
    <a class="logout" href="loginform.php">Logout</a>
</body>
</html>
