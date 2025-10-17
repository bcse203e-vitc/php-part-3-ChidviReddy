<?php
$width = 600;
$height = 100;
$img = imagecreate($width, $height);

$bg_color = imagecolorallocate($img, 240, 240, 240);
$text_color = imagecolorallocate($img, 0, 0, 0);
$border_color = imagecolorallocate($img, 100, 100, 100);

imagerectangle($img, 0, 0, $width-1, $height-1, $border_color);

$timestamp = date("l, d M Y H:i:s");
$font_size = 5;
$text_x = ($width - imagefontwidth($font_size) * strlen($timestamp)) / 2;
$text_y = ($height - imagefontheight($font_size)) / 2;

imagestring($img, $font_size, $text_x, $text_y, "Generated on: " . $timestamp, $text_color);

header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>

