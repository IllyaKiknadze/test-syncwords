<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_date', 'end_date'];
    protected $guarded = ['id'];
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
