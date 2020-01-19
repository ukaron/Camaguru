
<?php





$mask = imagecreatefrompng("./resources/292-2925638_orange-heart-crown-heartcrown-sticker-random-broken-heart.png");
imagealphablending($mask, true);
imagesavealpha($mask, true);

$png2 = imagecreatefrompng("./resources/111.png");



imagecopy($png2, $mask, 0, 0, 0, 0, imagesx($png2), imagesy($png2));
imagepng($png2, './resources/111OOO.png');

?>