<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $table = 'goal';
    public function games()
    {
        return $this->belongsTo(Game::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
