<?php
session_start();

if(!isset($_SESSION['name'])) {
    if(isset($_POST['name']) && !empty($_POST['name'])) {
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
    } else {
        $_SESSION['name'] = "Student";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Personalized Greeting</title>
</head>
<body>
<h2><?php echo "Hello, " . $_SESSION['name'] . "! Welcome to the PHP lab."; ?></h2>

<form method="post" action="">
    <label>Enter your name: </label>
    <input type="text" name="name" required>
    <input type="submit" value="Update Name">
</form>

<form method="post" action="logout.php">
    <input type="submit" value="Reset Session">
</form>
</body>
</html>

