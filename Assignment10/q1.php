<?php
if (isset($_COOKIE['visits'])) {
    $count = $_COOKIE['visits'] + 1;
} else {
    $count = 1;
}
setcookie('visits', $count, time() + 3600);
echo "<h2>Welcome!</h2>";
echo "You have visited this page <b>$count</b> times.";
?>

