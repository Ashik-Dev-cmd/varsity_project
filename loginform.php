<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="loginform.js"></script>
</head>
<body>
    <div class="container">
    
    <h2 class="logt">LOGIN</h2>
    <form class="loginForm" action="loginValidation.php" method="POST" onsubmit="return loginvalid();">
    <label for="uname">Username: </label>
    <input type="text" name="uname" id="uname">
    <span id="error1"></span>
    <br>
    <br>
    <label for="pass">Password: </label>
    <input type="password" name="pass" id="pass">
    <span id="error2"></span>
    <br>
    <br>
    <input type="submit" name="submit" class="logsub" value="LOGIN">
    </form>
    
    <button class="cngpassBtn"><a class="cngpass" href="changePass.php">Change Password</a></button>
    </div>
</body>
</html>