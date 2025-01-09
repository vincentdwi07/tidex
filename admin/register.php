<?php
include "connect.php";


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['key'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $key = $_POST['key'];

    $sql = "INSERT INTO admin (username, password)
    VALUES ('$username', '$password')";

    if ($key == "Tid3xSURABAYA") {
        if (mysqli_query($conn, $sql)) {
            echo "<script>window.alert('Registered Sucesfully')</script>";
            echo "<script>window.location.href = 'register-form.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

mysqli_close($conn);
?>