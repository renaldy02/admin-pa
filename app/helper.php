<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class helper extends Model
{
public static function fileupload($images, $name, $path)
    {
        $image = $images;
//echo $name;
        if ($image->getSize() > 1000000) {
            return false;
        }

        $extension = strstr($image->getClientOriginalName(), '.');
        $fileName = $name . $extension;
        $image->move($path, $fileName);

        return $fileName;
    }
}
