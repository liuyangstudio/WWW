<?php
session_start();
$code = '';
$image = imagecreatetruecolor(100, 30);

header('content-type:image/png');
$color = imagecolorallocate($image, 250, 250, 250);
imagefill($image, 10, 10, $color);

$str1 = '23456789qazwsxedcrfvtgbyhnujmikp';
for ($i = 0; $i < 5; $i++) {
    $fontcolor = imagecolorallocate($image, mt_rand(0, 150), mt_rand(0, 150), mt_rand(10, 250));

    $x = $i * 20 + mt_rand(3, 8);
    $y = mt_rand(2, 9);
    $str = substr($str1, mt_rand(0, strlen($str1) - 1), 1);
    $code.=$str;
    imagestring($image, 9, $x, $y, $str, $fontcolor);
};
$_SESSION['code']=$code;
for ($i = 0; $i < 200; $i++) {
    $pixelcolor = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imagesetpixel($image, mt_rand(0, 100), mt_rand(0, 30), $pixelcolor);
}
for ($i = 0; $i < 4; $i++) {
    $linecolor = imagecolorallocate($image, mt_rand(100, 200), mt_rand(100, 200), mt_rand(100, 200));
    imageline($image, mt_rand(10, 90), mt_rand(0, 30), mt_rand(0, 100), mt_rand(0, 30), $linecolor);
}


imagepng($image);

imagedestroy($image);
