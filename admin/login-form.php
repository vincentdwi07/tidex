<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../admin/asset.css">
</head>

<body style="background-color: black;">
    <div class=" form">
        <div class="form-title">LOGIN</div>
        <form action="login.php" method="POST">
            <input class="username" type="text" name="username" placeholder="Username">
            <input class="password" type="password" name="password" placeholder="Password">
            <button type="submit" class="login">LOGIN</button>
        </form>

        <div class="sign-up">Doesn't have account?<a href="register-form.php">Sign up</a></div>
    </div>
</body>

</html>