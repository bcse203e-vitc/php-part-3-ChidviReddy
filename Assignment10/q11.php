<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$width = 400;
$height = 300;

$img = imagecreatetruecolor($width, $height);

for ($y = 0; $y < $height; $y++) {
    $r = intval(255 * $y / $height);
    $g = intval(255 * $y / $height);
    $b = 255; // keep blue full
    $color = imagecolorallocate($img, $r, $g, $b);
    imageline($img, 0, $y, $width, $y, $color);
}

$textColor = imagecolorallocate($img, 0, 0, 0);
imagestring($img, 5, 130, 140, "Gradient Example", $textColor);

header("Content-type:image/png");
imagepng($img);
imagedestroy($img);
?>
