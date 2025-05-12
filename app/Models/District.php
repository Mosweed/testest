<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'image_path',
    ];


    public const CATEGORIES = [
        'Safety',
        'Recreation',
        'Environmental Quality',
        'Facilities',
        'Mobility',
    ];

    public function effects()
    {
        return $this->belongsToMany(Effect::class)
                    ->withPivot('value')
                    ->withTimestamps();
    }
    
}