<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function getImageAttribute()
    {
        if($img = $this->attributes['slug']){
            $exists = Storage::disk('images')->exists($img.'.png');
            if(!$exists){
                $exists = Storage::disk('images')->exists($img.'.svg');
                if(!$exists){
                    $exists = Storage::disk('images')->exists($img.'.jpg');
                    if(!$exists){
                        return '';
                    }
                    return url('images/'.$img.'.jpg');
                }
                return url('images/'.$img.'.svg');
            }


            return url('images/'.$img.'.png');
        }
    }
}
