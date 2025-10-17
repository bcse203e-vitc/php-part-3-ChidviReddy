<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $to = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];
    $headers = "From: admin@example.com";
    if(mail($to,$sub,$msg,$headers)){
        echo "Mail Sent";
    } else {
        echo "Failed";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Mail</title></head>
<body>
<form method="post">
<input type="email" name="email" placeholder="Receiver" required><br><br>
<input type="text" name="subject" placeholder="Subject" required><br><br>
<textarea name="message" placeholder="Message" required></textarea><br><br>
<input type="submit" value="Send">
</form>
</body>
</html>

