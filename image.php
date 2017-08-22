<?php
require_once "vendor/autoload.php";

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('dizainers.jpg')
    ->text('HELLO WORLD', 100, 100, function($font) {
        $font->file('arial.ttf');
        $font->size(60);
        $font->color('#fdf6e3');
        $font->align('center');
        $font->valign('top');
//        $font->angle(45);
    })
    ->rotate(90)
    ->resize(300, null, function ($image) {
        $image->aspectRatio();
    })
    ->save('new.png');