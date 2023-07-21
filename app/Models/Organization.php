<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class Organization extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = ['name'];
    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
