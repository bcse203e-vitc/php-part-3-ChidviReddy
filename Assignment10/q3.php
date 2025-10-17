<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + (86400), "/");
    } else {
        setcookie('username', '', time() - 3600, "/");
    }
    echo "Welcome, <b>" . htmlspecialchars($username) . "</b>!";
}
?>
<form method="post" action="">
    Username: <input type="text" name="username" value="<?php echo $_COOKIE['username'] ?? ''; ?>"><br><br>
    <input type="checkbox" name="remember" <?php if(isset($_COOKIE['username'])) echo "checked"; ?>> Remember Me<br><br>
    <input type="submit" value="Login">
</form>

