<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'genre', 
        'school_id' 
    ];
    //relationship with course
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function classroom(): BelongsToMany
    {
        return $this->belongsToMany(Classroom::class);
    }

}
