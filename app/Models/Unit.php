<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'poeme' ,
        'level_id'       
    ];
//relationship with level -CHILD
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
//relationship with lessons -PARENT
public function lessons() 
{ 
    return $this->hasMany(Lesson::class); 
}
//relationship with assesments -PARENT
public function assesments() 
{ 
    return $this->hasMany(Assesment::class); 
}
}
