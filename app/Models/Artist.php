<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'name';
    public $incrementing = false;

    public function concerts()
    {
        return $this->hasMany(Concert::class, 'artist_name', 'name');
    }
}
