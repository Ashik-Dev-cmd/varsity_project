<?php


include 'connection.php';
include 'loginValidation.php';

// Check if the user is logged in and their username is stored in the session
if(isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname']; // Retrieve the username from the session
    $sql = "SELECT * FROM profile WHERE Name = '$uname'";
    $res = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

a {
    display: block;
    width: fit-content;
    margin: 20px auto;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <h1>Profile</h1>
    <?php 
    if(isset($res)) {
        while($data = mysqli_fetch_assoc($res)) {
    ?>
    <table border="1px">
    <tr>
        <td>Name</td>
        <td><?php echo $data['Name']?></td>
    </tr>
    <br>
    <tr>
        <td>Age</td>
        <td><?php echo $data['Age']?></td>
    </tr>
    <br>
    <tr>
        <td>Father's Name</td>
        <td><?php echo $data["Father's Name"]?></td>
    </tr>
    <br>
    <tr>
        <td>Mother's Name</td>
        <td><?php echo $data["Mother's Name"]?></td>
    </tr>
    </table>
    <?php
        }
    }?>
    <br>
    <a href="profileEdit.php">Edit Profile</a>
    <br>
    <a href="loginform.php">Logout</a>
</body>
</html>
