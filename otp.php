<?php
$email = $_POST['email'];
$otp = $_POST['otp'];

$to = $email;
$from = "jferdous192017@bscse.uiu.ac.bd";
$fromName = "Jannatul";
$sub = "OTP Authentication";
$msg = "Your OTP is " .$otp;
$header = 'From:' .$fromName. '<'.$from.'>';
mail ($to, $sub, $msg, $header);
?>
<form action="submit.otp" method="POST">
    Enter OTP:
    <input type="number" name="checkotp">
    <input type="hidden" name="otp" value="<?php echo $otp; ?>">
    <input type="submit" value="Verify">
</form>