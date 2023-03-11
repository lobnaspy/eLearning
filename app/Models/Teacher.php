<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'genre',
        'mobile',
        'school_id',
       
    ];
 //relationship with classroom
    public function classrooms() 
    { 
        return $this->hasMany(Classroom::class); 
    }
    //relationship with school
    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
