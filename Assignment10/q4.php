<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['captcha']) {
        echo "<h3>CAPTCHA verified successfully!</h3>";
    } else {
        echo "<h3 style='color:red;'>Incorrect CAPTCHA!</h3>";
    }
}
?>
<form method="post" action="">
    <img src="q4verify.php"><br><br>
    Enter CAPTCHA: <input type="text" name="captcha"><br><br>
    <input type="submit" value="Verify">
</form>

