<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['id','created_by','category_id','title','description','start_date','end_date','image','lognUrl','featured','address'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'featured' => 'boolean',
    ];

    public function getLogoAttribute($value)
    {
        // if ($value)
        //     return url($value);
        // return null;
        if ($value) {
            return url('/') . '/storage/' . ltrim($value, '/');
        }
        return null;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->created_by = auth()->user()->id;
        });
    }
}
