<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="registration.js"></script>

    <title>Registration</title>
    <style>
        .container1
        {
            width: 200px;
            margin-left: 40%;
            margin-top: 5%;
        }
        h1
        {
            margin-left: 35%;
            margin-top: 8%;
        }
    </style>
</head>
<body>
    <h1>Complete your registration</h1>
    <div class="container1">
    <fieldset>
    <legend>Registration</legend>
    <form action="registrationValidation.php" method="POST" onsubmit="return regval();">
    <span id="error0"></span>
    <label for="Fname">First Name</label>
    <input type="text" name="fname" id="Fname">
    <span id="error1"></span>
    <br>
    <label for="Lname">Last Name</label>
    <input type="text" name="lname" id="Lname">
    <span id="error2"></span>
    <br>
    <label for="Email">E-Mail</label>
    <input type="text" name="email" id="Email">
    <span id="error3"></span>
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="Phone">
    <span id="error4"></span>
    <br>
    <label for="Pass">Password</label>
    <input type="password" name="pass" id="Pass">
    <span id="error5"></span>
    <br>
    <label for="cPass">Confirm Password</label>
    <input type="password" name="cpass" id="cPass">
    <span id="error6"></span>
    <br>
    <input type="submit" name="submit" id="" value="Register">
    </form>
</div>
</body>
</html>