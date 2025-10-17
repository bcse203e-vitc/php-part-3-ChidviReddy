<?php
$file = "sample.jpg"; // your image file

if (!file_exists($file)) {
    die("<h3 style='color:red;'>Error: sample.jpg not found in current folder!</h3>");
}

$img = @imagecreatefromjpeg($file);
if (!$img) {
    die("<h3 style='color:red;'>Error: Failed to load image. Ensure it’s a valid JPG.</h3>");
}

$color = imagecolorallocate($img, 0, 0, 255); // blue text
imagestring($img, 5, 10, 10, "VIT Chennai", $color);

// Output the image
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);
?>

