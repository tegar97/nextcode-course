<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'status',
        'price',
        'level',
        'description',
        'mentor_id'
    ];

    public function lessons(){
        return $this->hasMany(lesson::class);
    }

    public function categories(){
        return $this->belongsToMany(category::class);
    }
}
