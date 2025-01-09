<?php
include 'connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = md5($password);

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$hashed_password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Login successful!');</script>";
        echo "<script>window.location.href='dashboard.php'</script>";
    } else {
        echo "<script>alert('Invalid username or password');</script>";
        echo "<script>window.location.href='login-form.php'</script>";
    }
}
?>