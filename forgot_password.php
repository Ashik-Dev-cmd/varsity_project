

<?php
include 'connection.php';
if(isset($_POST['show'])) {
    $mail = $_POST["mail"];
    $firsName = $_POST["first_name"];


    $sql = "SELECT password FROM registration WHERE email='$mail' AND first_name='$firsName'";
    $res = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $password = $row['password'];
        echo "<h1>Password: " . $password."</h1>";
    } else {
        echo "<h1>No matching email or first name found.</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
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
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #E65C19;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background-color: #F97300;
}

.error {
    color: red;
    margin-top: 10px;
}

    </style>
    <script type="text/javascript" src="forgotPassword.js"></script>
</head>
<body>
    <form action="" method="post" onsubmit="return forgot();">
    <label for="">Enter your first name</label>
        <input type="text" name="first_name" id="fname">
        <br>
        <label for="">Enter your mail</label>
        <input type="email" name="mail" id="mail">
        <br>
        <input type="submit" name="show" id="">
    </form>
</body>
</html>
