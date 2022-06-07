<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class HerOkuController extends Controller
{
    public function getServerIpFromServer($ip)
    {
        $file = 'server_ip.json';
        $destinationPath = public_path()."/server_ip/";
        
        if (!is_dir($destinationPath)) {  mkdir($destinationPath,0777,true);  }

        File::put($destinationPath.$file, $ip);
        
        return response()->json([
            'statu' => 'success'
        ]);    
    }


    public function getServerIpFromHerOku()
    {
        $url = public_path().'/server_ip/server_ip.json';
        $ip = file_get_contents($url);

        if ($ip == 'noIp') {
            return response()->json([
                'ip' => 'Sanal Makine Kapalı veya IP adrese erişilmiyor.'
            ]);
        }else{
            return response()->json([
                'ip' => $ip
            ]);
        }
        
    }
}
