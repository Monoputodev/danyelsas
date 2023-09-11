<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable  = ['name', 'designation', 'status', 'order', 'image'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
