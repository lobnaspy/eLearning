<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['name','teacher_id','course_id'];
   
   
     //relationship with teacher
     public function teacher()
     {
         return $this->belongsTo(Teacher::class);
     }
    //relationship with course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
      public function student(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}
