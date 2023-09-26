<?php
$checkotp = $_POST ['checkotp'];
$otp = $_POST ['otp'];

if($checkotp==$otp){
    echo "OTP verified and signup complete";
}else{
    echo "Incorrect OTP";
}
?>