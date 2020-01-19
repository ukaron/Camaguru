<?php
class Photo{
   private $pic;
   private $mask;
   private $path;

    public function __construct($post)
    {
        if (isset($post['photo']) && isset($post['mask']))
        {
            $this->pic = file_get_contents(base64_decode($post['photo']));
            $this->mask = $post['mask'];
            $this->path = './resources/111.png';
            file_put_contents($this->path, $this->pic);
        }
    }

    public function mergePhoto()
    {
        $pic = imagecreatefrompng($this->path);
        $mask = imagecreatefrompng($this->mask);
        imagealphablending($mask, true);
        imagesavealpha($mask, true);
        imagecopy($pic, $mask, 0, 0, 0, 0, imagesx($pic), imagesy($pic));
        imagepng($pic, './resources/111OOO.png');
    }
}

?>