<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    //
    use HasFactory; 
    public function teacher(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }

    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

    public function student(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'class_student');
    }
    public $timestamps = false;
}
