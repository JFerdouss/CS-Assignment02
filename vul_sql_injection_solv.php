<?php
$conn = mysqli_connect ("localhost", "root", "", "cs_assign");
if(!$conn){
    die("Unable to connect");
}
if($_POST) {
	$name = $_POST["username"];
	$pass = $_POST["password"];
    //sql injection prevention
    $name = mysqli_real_escape_string($conn, $name);
	$pass = mysqli_real_escape_string($conn, $pass);
    $sql = "SELECT * FROM assign2 WHERE username = '$name' AND password = '$pass'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0) {
		echo "Welcome, user!";
	} else {
		echo "Incorrect Username/Password";
	}
}
$otp = rand(0000,9999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h4>Already registered?</h4>
    <h3>Login here!</h3>
    <form action="" method="POST">
        Username: <input type="text" name="username"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <input type="submit" name="login" value="Login">
    </form>
    <h4>Not registered yet?</h4>
    <a href="signup.php"> Signup here!</a>
    
</body>
</html>