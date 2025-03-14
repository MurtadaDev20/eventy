<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','name'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
