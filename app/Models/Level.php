<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'cover',
        'course_id'
         
    ];
//relationship with course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
//relationship with units
public function units() 
{ 
    return $this->hasMany(Unit::class); 
}
}
