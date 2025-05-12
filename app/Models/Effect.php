<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Effect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'color',
    ];

    public function districts()
    {
        return $this->belongsToMany(District::class)
            ->withPivot('value')
            ->withTimestamps();
    }
}