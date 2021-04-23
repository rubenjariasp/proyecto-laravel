<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function input(){
        return $this->hasMany(Input::class);
    }
}
