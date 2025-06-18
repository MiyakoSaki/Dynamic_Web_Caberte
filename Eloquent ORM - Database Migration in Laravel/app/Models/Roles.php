<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    //
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
