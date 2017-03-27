<?php
$user=$_POST['user'];
$password=$_POST['password'];


$connection=mysqli_connect("localhost", "root", "", "test_1");
$consult="SELECT * FROM users WHERE user='$user' and password='$password'";
$result=mysqli_query($connection, $consult);

$rows=mysqli_num_rows($result);
?>



<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<title>Login Form</title>
		<link rel="stylesheet" href="../css/style.css">
    </head>

	<body>
		<form action="validate.php" method="post" class="form-register">
		    <h2 class="form__titulo">Login Form</h2>
            <div class="contenedor-inputs">
                <input type="text" placeholder="&#128272; User" name="user" class="input-100" required>
                <input type="password" placeholder="&#128272; Password" name="password" class="input-100" required>
                <input type="submit" value="Sign in" class="btn-enviar">
                <p class="form__link">

   <?php 
    
    if ($rows>0) {
        header("location:../welcome.html");
}
    else {
        echo "Incorrect User or Password";
}
                    

mysqli_free_result($result);
mysqli_close($connection);
?>
               </p>
                

                <p class="form__link">Create an account <a href="../create.html">Click here</a></p>
                
            </div>
		</form>
    </body>

</html>