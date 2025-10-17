<?php
$file = "sample.jpg"; 

if (!file_exists($file)) {
    die("<h3 style='color:red;'>Error: image.jpg not found in current folder!</h3>");
}

$src = @imagecreatefromjpeg($file);
if (!$src) {
    die("<h3 style='color:red;'>Error: Unable to read image file (must be JPG).</h3>");
}

$srcWidth = imagesx($src);
$srcHeight = imagesy($src);

// target width or height
$newWidth = 300;
$newHeight = intval(($srcHeight / $srcWidth) * $newWidth);

// create scaled image
$new = imagescale($src, $newWidth, $newHeight);

header("Content-type:image/jpeg");
imagejpeg($new);
imagedestroy($src);
imagedestroy($new);
?>

