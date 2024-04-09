<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongTo;
class Matches extends Model
{
    use HasFactory;
    public function goal(): HasMany
    {
        return $this->HasMany(Goals::class);
    }
    public function teams(): BelongTo
    {
        return $this->BelongTo(Team::class);
    }
}
