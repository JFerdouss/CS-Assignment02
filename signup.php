<?php
$conn = mysqli_connect("localhost", "root", "", "cs_assign");
if (!$conn) {
    die("Unable to connect");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
            $insertSql = "INSERT INTO assign2 (email, password) VALUES ('$email', '$hashedPassword')";
            if (mysqli_query($conn, $insertSql)) {
                echo "Registration successful! You can now login.";
            } else {
                echo "Error in registration. Please try again later.";
            }
        }
$otp = rand(0000,9999);
?>
<h3>Signup here!</h3>
    <form action="otp.php" method="POST">
        Email: <input type="email" name="email" required>
        <h4>An OTP will be sent to this email address</h4>
        <input type="hidden" name="otp" value="<?php echo $otp; ?>">
        Password: <input type="password" name="password"> <br><br>
        <input type="submit" name="login" value="Signup">
    </form>