<?php
namespace App\Http\Libs;

class Views
{
    public static function _fm($name,$data,$type='Grid'){
        return [
            'Type'=>$type,
            'Name'=>$name,
            'Data'=>$data
        ];
    }
}