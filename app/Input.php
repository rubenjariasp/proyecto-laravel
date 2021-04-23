<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{

    protected $fillable = ['category_id','title','description'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
