<?php
$message_sent = false;

if(isset($_POST['submit'])) {
    $to = "example@domain.com";
    $subject = $_POST['subject'];
    $message = "From: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\n\nMessage:\n" . $_POST['message'];
    $headers = "From: " . $_POST['email'];

    if(mail($to, $subject, $message, $headers)) {
        $message_sent = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<?php
if($message_sent) {
    echo "<h3>Thank you, your message has been sent!</h3>";
} else {
?>
<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Subject:</label><br>
    <input type="text" name="subject" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="6" cols="40" required></textarea><br><br>

    <input type="submit" name="submit" value="Send Message">
</form>
<?php } ?>
</body>
</html>

