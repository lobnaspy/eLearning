<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo'
    ];

//relationship with levels
public function levels() 
{ 
    return $this->hasMany(Level::class); 
}
//relationship with classroom
public function classrooms() 
{ 
    return $this->hasMany(Classroom::class); 
}
//relationship with SelfLearner
public function selfLearner(): BelongsToMany
{
    return $this->belongsToMany(SelfLearner::class);
}
}
