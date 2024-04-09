<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matches extends Model
{
    use HasFactory;
    public function goal(): HasMany
    {
        return $this->HasMany(Goals::class);
    }
}
