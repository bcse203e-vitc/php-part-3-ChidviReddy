<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$img = imagecreate(400, 300);

$background = imagecolorallocate($img, 255, 255, 255); // white background
$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$green = imagecolorallocate($img, 0, 255, 0);

imagerectangle($img, 50, 50, 150, 150, $red);

imagefilledellipse($img, 250, 100, 100, 60, $blue);

imageline($img, 50, 200, 350, 200, $green);

imagestring($img, 5, 120, 250, "Shapes Example", $black);

header("Content-type:image/png");
imagepng($img);
imagedestroy($img);
?>

