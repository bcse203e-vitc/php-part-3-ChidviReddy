<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: q2.php");
    exit();
}
echo "<h2>Welcome, " . $_SESSION['user'] . "!</h2>";
echo "<a href='logout.php'>Logout</a>";
?>

