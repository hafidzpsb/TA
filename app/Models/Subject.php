<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
