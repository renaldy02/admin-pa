<?php

namespace App\Helper;

use Illuminate\Database\Eloquent\Model;

class Helpers extends Model
{
    public static function sendJson($data){
        $client = new \GuzzleHttp\Client([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ]);
        $res = $client->request("POST", "178.128.63.95:30000/send", [
            'json' => $data,
        ]);
        $res = json_decode($res->getBody());
        return $res;
    }

    public static function errorSlackJson($code,$message){
        $client = new \GuzzleHttp\Client([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ]);
        $url = "https://hooks.slack.com/services/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";
        $res = $client->request("POST", $url, [
            'json' => ["text" => "Laratoric => ".$code." => ".$message],
        ]);
        $res = json_decode($res->getBody());

        return $res;
    }

    public static function fileupload($images, $name, $path)
    {
        $image = $images;
        if ($image->getSize() > 1000000) {
            return false;
        }

        $extension = strstr($image->getClientOriginalName(), '.');
        $fileName = $name . $extension;
        $image->move($path, $fileName);

        return $fileName;
    }

    public static function validasigambar($image)
    {
        if (($image->getMimeType() != 'image/jpeg') && ($image->getMimeType() != 'image/png')) {
            return false;
        } else {
            return true;
        }
    }
}
