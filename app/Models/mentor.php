<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    use HasFactory;
    protected $fillable = ['name','profession', 'profile','email'];

    public function courses(){
        return $this->hasMany(course::class);
    }


}
