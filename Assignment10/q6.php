<?php
$img = imagecreate(300, 300);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
$blue = imagecolorallocate($img, 0, 0, 255);
$green = imagecolorallocate($img, 0, 255, 0);

imagerectangle($img, 50, 50, 150, 150, $red);
imagefilledellipse($img, 200, 200, 80, 80, $blue);
imageline($img, 0, 0, 300, 300, $green);

header("Content-type:image/png");
imagepng($img);
imagedestroy($img);
?>

