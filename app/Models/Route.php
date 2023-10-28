<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function routes()
    {
        return $this->hasMany(Ticket::class, 'route_id');
    }

    public function seats(): HasMany
    {
        return $this->hasMany(Seat::class);
    }
}
