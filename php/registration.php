<?php
include 'cn.php';

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$user = $_POST["user"];
$password = $_POST["password"];
$phone = $_POST["phone"];


$insert = "INSERT INTO users(name, lastname, email, user, password, phone) VALUES ('$name', '$lastname', '$email', '$user', '$password', '$phone')";


$verificate_user = mysqli_query($connection, "SELECT * FROM users WHERE user = '$user'");
if (mysqli_num_rows($verificate_user) > 0) {
    echo '<script>
         alert("The user is already registered");
         window.history.go(-1);
         </script>';
    exit;
}

$verificate_email = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
if (mysqli_num_rows($verificate_email) > 0) {
    echo '<script>
         alert("The email is already registered");
         window.history.go(-1);
         </script>';
    exit;
}

$result = mysqli_query($connection, $insert);
if (!$result) {
    echo 'Error with registration';
}
else {
    echo '<script>
         alert("You have been registered successfully");
         window.history.go(-1);
         </script>';
}

mysqli_close($connection);