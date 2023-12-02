<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    /**
     * Get the artist that is performing at the concert.
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_name', 'name');
    }

    /**
     * The users (customers) that are attending the concert.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'concert_user');
    }
}
