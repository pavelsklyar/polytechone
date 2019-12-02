<?php


namespace app\components;


use app\base\Component;
use app\model\Image;

class FileComponent extends Component
{
    public function addImage($file)
    {
        $image = new Image($file['name'], $file['type'], $file['tmp_name'], $file['error'], $file['size']);
        if (!$image->validate)
            return null;

        $filename = hash("md5", $image->name);
        move_uploaded_file($image->tmpName, HOME . 'team/' . $filename);

        return $filename;
    }
}