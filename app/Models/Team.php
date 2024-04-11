<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    public function users(): HasMany
    {
        return $this->HasMany(User::class);
    }

    public function games(): HasMany
    {
        return $this->HasMany(Game::class, 'id_team1');
    }
    public function awaygames(): HasMany
    {
        return $this->HasMany(Game::class, 'id_team2');
    }
    public function goals(): BelongsToMany
    {
        return $this->BelongsToMany(Goal::class, 'users');
    }
}
