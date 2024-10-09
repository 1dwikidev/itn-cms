<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Locations extends Model
{
    public function Coverages(): BelongsToMany
    {
        return $this->belongsToMany(Coverages::class,"coverage_location");
    }
}
