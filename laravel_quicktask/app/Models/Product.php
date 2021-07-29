<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'color',
        'material',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getNameAttribute($value)
    {
        return Str::title($value);
    }

    public function getDescriptionAttribute($value)
    {
        return Str::ucfirst($value);
    }

    public function getColorAttribute($value)
    {
        return Str::title($value);
    }

    public function getMaterialAttribute($value)
    {
        return Str::title($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::lower($value);
    }

    public function setColorAttribute($value)
    {
        $this->attributes['color'] = Str::lower($value);
    }

    public function setMaterialAttribute($value)
    {
        $this->attributes['material'] = Str::lower($value);
    }
}
