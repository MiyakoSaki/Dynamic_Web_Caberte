<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    //
        public function user(): BelongsToMany
        {
            return $this->belongsToMany(Category::class, 'post_category');
        }
}
