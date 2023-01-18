<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'course_id'
    ];

    public function courses(){
        return $this->hasMany(course::class);
    }

    public function categories(){
        return $this->hasMany(category::class);
    }
}
