<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    public function users(): HasMany
    {
        return $this->HasMany(User::class);
    }

    public function matches(): HasMany
    {
        return $this->HasMany(Matches::class);
    }
    public function goal(): BelongsToMany
    {
        return $this->BelongsToMany(Goals::class, 'users');
    }
}
