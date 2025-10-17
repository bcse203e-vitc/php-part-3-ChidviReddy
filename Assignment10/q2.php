<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user == "admin" && $pass == "1234") {
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<p style='color:red;'>Invalid credentials.</p>";
    }
}
?>
<form method="post" action="">
    Username: <input type="text" name="user"><br><br>
    Password: <input type="password" name="pass"><br><br>
    <input type="submit" value="Login">
</form>

