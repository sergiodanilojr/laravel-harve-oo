<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'price', 'description'];

    protected  $casts = [
        'price' => 'float',
    ];

    protected  $attributes = [
        'price' => 0,
        'description' => null,
    ];

    public static function boot()
    {
        parent::boot();
            
            static::creating(function ($model) {
                $model->slug = \Str::slug($model->title);
            });
    }
}
