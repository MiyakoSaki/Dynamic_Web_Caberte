<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    //
    use HasFactory; 
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    public $timestamps = false;
}
