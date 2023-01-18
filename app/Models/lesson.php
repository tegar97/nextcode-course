<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'video',
        'duration'
    ];

    public function course(){
        return $this->belongsTo(course::class);
    }
}
