<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
