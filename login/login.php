
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<head>
    <a id="back" href="../index.html"><b>BACK TO HOME</b></a>
</head>
<div id="container">
    <div style="border: 1px solid #DDD; border-radius: 10px; width: 400px; padding: 0px">

        <div id="login-title">
            <h3 style="margin: 0px; padding: 12px 170px; color:white; font-family: Arial;">Login</h3>
        </div>

        <div id="login-form">
            <form name="loginfrm">
                <p><input type="email" name="user_email" /></p>
                <p><input type="password" name="user_password" /></p>
                <p><input type="submit" name="loginbtn" value="LOGIN" /></p>
            </form>

            <p><a href="../login/reset_password.html">Forgot your password?</a></p>
            <p><a href="../Register/register.php">No Account? Register Now!</a></p>

        </div>

    </div>
</div>

</body>
</html>