<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'outcomes',
        'dictionary' ,
        'unit_id'      
    ];
//relationship with unit -CHILD of
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
//relationship with activites -PARENT to
public function activities() 
{ 
    return $this->hasMany(Activity::class); 
}
}
