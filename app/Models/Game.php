<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Game extends Model
{
    use HasFactory;
    protected $table = 'games';
    public function goals(): HasMany
    {
        return $this->HasMany(Goal::class);
    }
    public function teams(): BelongsTo
    {
        return $this->BelongsTo(Team::class);
    }
}
