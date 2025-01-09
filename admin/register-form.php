<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../admin/asset.css">
</head>

<body>
    <div class="form">
        <div class="form-title">REGISTER</div>
        <form action="register.php" method="post">
            <input class="username" type="text" name="username" placeholder="Username">
            <input class="password" type="password" name="password" placeholder="Password">
            <input class="secret" type="text" name="key" placeholder="Secret Key">
            <button type="submit" class="login">REGISTER</button>
        </form>
        <div class="sign-up">Have account?<a href="login-form.php">Sign in</a></div>
    </div>
</body>

</html>