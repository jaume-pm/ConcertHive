<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $primaryKey = 'name';
    public $incrementing = false;

    public function concerts()
    {
        return $this->hasMany(Concert::class);
    }
}
