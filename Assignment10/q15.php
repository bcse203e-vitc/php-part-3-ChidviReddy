<?php
session_start();
if(!isset($_SESSION['user'])) {
    $_SESSION['user'] = "Guest";
}

$feedback_sent = false;

if(isset($_POST['submit'])) {
    $name = $_SESSION['user'];
    $feedback = htmlspecialchars($_POST['feedback']);
    $msg = "Feedback from $name:\n\n$feedback";
    $to = "admin@vit.ac.in";
    $subject = "Student Feedback";
    $headers = "From: noreply@vit.ac.in";

    if(mail($to, $subject, $msg, $headers)) {
        $feedback_sent = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['user']; ?></h2>

<?php
if($feedback_sent) {
    echo "<h3>Thank you, your feedback has been sent!</h3>";
} else {
?>
<form method="post" action="">
    <label>Enter your feedback:</label><br>
    <textarea name="feedback" rows="6" cols="50" required></textarea><br><br>
    <input type="submit" name="submit" value="Send Feedback">
</form>
<?php } ?>
</body>
</html>

