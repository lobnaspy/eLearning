<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
//relationship with lesson -CHILD of
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
