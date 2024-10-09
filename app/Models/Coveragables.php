<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Coveragables extends Model
{
    protected $fillable = ['coverageable_id', 'coverageable_type'];

    use HasFactory;

    public function Coveragables(): MorphTo
    {
        return $this->morphTo();
    }

    // public function Coverage(): BelongsToMany
    // {
    //     return $this->belongsToMany(Coverages::class, 'coverages', 'coverages_id');
    // }
}

