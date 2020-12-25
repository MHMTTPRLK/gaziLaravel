<?php


namespace App\Helpers;


class UploadPaths
{
    //TODO:Burayı Gözden Geçir
    public static $uploadPaths=array(
        'products_photos'=>'/uploads/product_images',
        'profile_photos'=>'/uploads/product_images'
    );
    public  static function  getUploadPath($path)
    {
        return public_path().self::$uploadPaths[$path];
    }
}
