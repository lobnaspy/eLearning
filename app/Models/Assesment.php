<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesment extends Model
{
    use HasFactory;
    protected $fillable = ['title','unit_id'];
    //relationship with unit -CHILD of
        public function unit()
        {
            return $this->belongsTo(Unit::class);
        }
    //relationship with questions -PARENT
public function questions() 
{ 
    return $this->hasMany(Question::class); 
}
}
