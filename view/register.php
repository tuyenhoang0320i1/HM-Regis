<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="../action/creat.php" method="post">
    <fieldset>
    <legend>Register</legend>
    Username: <input type="text" name="username" value="<?php echo $username; ?>"/>
    <span class="error">* <?php echo $usernameErr; ?></span>
    <br><br>
    Password: <input type="password" name="password" value="<?php echo $password; ?>"/>
    <span class="error">* <?php echo $passwordErr; ?></span>
    <br><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"/>
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"/>
    <span class="error">* <?php echo $phoneErr; ?></span>
    <br><br>
    <input type="submit" name="register" value="Register"/>
    <p><span class="error">* required field.</span></p>
    </fieldset>
</form>

</body>
</html>